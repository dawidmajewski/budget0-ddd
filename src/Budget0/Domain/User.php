<?php

namespace Budget0\Domain;

class User
{
    /**
     * @var string $login
     */
    private $login;

    /**
     * User constructor.
     * @param string $login
     */
    public function __construct($login)
    {
        $this->login = $login;
    }
}
