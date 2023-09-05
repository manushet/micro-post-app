<?php

namespace App\Service;
use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class Mailer
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendOnRegisterEmail(User $user)
    {
        $email = (new TemplatedEmail())
            ->to($user->getEmail())
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Welcome to the Micropost App')
            ->htmlTemplate('email/registration.html.twig')
            ->context([
                'user' => $user,
            ]);
        $this->mailer->send($email);        
    }
}