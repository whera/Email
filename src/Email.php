<?php

namespace WSW\Email;

use InvalidArgumentException;

/**
 * Class Email
 *
 * @package WSW\Email
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
final class Email
{
    use Validator;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $hostname;

    /**
     * @param string $email
     */
    public function __construct($email)
    {
        if (!$this->emailIsValid($email)) {
            throw new InvalidArgumentException('You should inform a valid email.');
        }

        list($this->username, $this->hostname) = explode('@', $email);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return sprintf('%s@%s', $this->username, $this->hostname);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @return array
     */
    public function getMx()
    {
        getmxrr($this->getHostname(), $arr);

        return $arr;
    }

    /**
     * @return bool
     */
    public function mxIsValid()
    {
        return $this->checkMxIsValid($this->getHostname());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getEmail();
    }
}
