<?php

namespace App\EventListener;

use App\Entity\Post;
use Doctrine\ORM\Events;
use App\Entity\LikeNotification;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\PersistentCollection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;

#[AsDoctrineListener(event: Events::onFlush, priority: 500, connection: 'default')]
class LikeNotificationSubscriber implements EventSubscriber
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * get events subscribed on flush
     *
     * @return array
     */
    public function getSubscribedEvents(): array
    {
        return [
            Events::onFlush
        ];
    }

    public function onFlush(OnFlushEventArgs $args)
    {
        $uow = $this->entityManager->getUnitOfWork();

        /**
         * @var PersistentCollection $collectionUpdate
         */
        foreach ($uow->getScheduledCollectionUpdates() as $collectionUpdate) {
            if (!$collectionUpdate->getOwner() instanceof Post) {
                continue;
            }

            if ("likedBy" !== $collectionUpdate->getMapping()["fieldName"]) {
                continue;
            } 

            $insertDiff = $collectionUpdate->getInsertDiff();

            if (!count($insertDiff)) {
                return;
            }

            /**
             * @var Post $post 
             */
            $post = $collectionUpdate->getOwner();

            $notification = new LikeNotification();
            $notification->setUser($post->getUser());
            $notification->setPost($post);
            $notification->setLikedBy(reset($insertDiff));

            $this->entityManager->persist($notification);

            $uow->computeChangeSet(
                $this->entityManager->getClassMetadata(LikeNotification::class), 
                $notification
            );

        }
    }
}