<?php

namespace WSW\Email;

use PHPUnit_Framework_TestCase;

/**
 * Class EmailTest
 *
 * @package WSW\Email
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class EmailTest extends PHPUnit_Framework_TestCase
{
    public function testInstanceObject()
    {
        $email = new Email('ronaldo@whera.com.br');
        $this->assertInstanceOf(Email::class, $email);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid email.
     */
    public function testEmailInvalid()
    {
        $email = new Email('ronaldo@whera');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You must provide an email with valid MX.
     */
    public function testMXInvalid()
    {
        $email = new Email('ronaldo@wheras.com.br');
    }

    public function testHostname()
    {
        $email = new Email('ronaldo@whera.com.br');
        $this->assertEquals('whera.com.br', $email->getHostname());
    }

    public function testUsername()
    {
        $email = new Email('ronaldo@whera.com.br');
        $this->assertEquals('ronaldo', $email->getUsername());
    }

    public function testEmail()
    {
        $email = new Email('ronaldo@whera.com.br');
        $this->assertEquals('ronaldo@whera.com.br', $email->getEmail());
    }

    public function testMx()
    {
        $email = new Email('ronaldo@whera.com.br');
        $this->assertInternalType('array', $email->getMx());
    }
}
