<?php

namespace spec\Budget0\Domain;

use Budget0\Domain\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_should_always_have_a_login($login)
    {
        $this->beConstructedWith($login);
        $this->shouldHaveType(User::class);
    }
}
