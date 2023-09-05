<?php

namespace App\Tests\Service;

use App\Entity\User;
use App\Service\Mailer;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Mailer\MailerInterface;

class MailerTest extends KernelTestCase
{
    public function testRegisterEmail()
    {
        $user = new User();
        $user->setEmail('john@doe.com');

        $mailerMock = $this
                        ->getMockBuilder(MailerInterface::class)
                        ->disableOriginalConstructor()
                        ->getMock();
        
        $mailerMock
            ->expects($this->once())->method('send')
            ->with($this->callback(function($subject) {
                dump(  json_encode($subject));
                return true;          
            }));
        
        $mailer = new Mailer($mailerMock);
        $mailer->sendOnRegisterEmail($user);
    }
}