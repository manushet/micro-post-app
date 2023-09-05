<?php

namespace App\Tests\Security;

use App\Security\TokenGenerator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TokenGeneratorTest extends KernelTestCase
{
    public function testTokenGenerater() 
    {
        $tokenGenerator = new TokenGenerator();
        $token = $tokenGenerator->generateToken();

        $this->assertEquals(35, strlen($token));

        $this->assertEquals(1, preg_match("/[A-Za-z0-9]/", $token));

        $this->assertTrue(ctype_alnum($token), "Token value contains incorrect characters");
    }
}