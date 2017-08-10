<?php

namespace WSW\Email;

/**
 * Trait Validator
 *
 * @package WSW\Email
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
trait Validator
{
    /**
     * @param string $email
     *
     * @return bool
     */
    protected function emailIsValid($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param string $domain
     *
     * @return bool
     */
    protected function checkMxIsValid($domain)
    {
        return (bool) checkdnsrr($domain, 'MX');
    }
}
