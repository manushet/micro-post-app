<?php

namespace App\Entity;

use App\Entity\Post;
use App\Entity\User;
use App\Entity\Notification;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LikeNotificationRepository;

#[ORM\Entity(repositoryClass: LikeNotificationRepository::class)]
class LikeNotification extends Notification
{
    #[ORM\ManyToOne(targetEntity: Post::class)]
    private ?Post $post = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private ?User $likedBy = null;

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): static
    {
        $this->post = $post;

        return $this;
    }

    public function getLikedBy(): ?User
    {
        return $this->likedBy;
    }

    public function setLikedBy(?User $likedBy): static
    {
        $this->likedBy = $likedBy;

        return $this;
    }
}
