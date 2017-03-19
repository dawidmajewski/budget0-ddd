<?php

namespace spec\Budget0\Domain;

use Budget0\Domain\Expense;
use Budget0\Domain\User;
use PhpSpec\ObjectBehavior;

class ExpenseSpec extends ObjectBehavior
{
    function it_should_be_registered_by_a_user_containing_an_amount_a_category_and_a_creation_date()
    {
        $this->beConstructedWith(new User('David'), 200, 'Food Category', new \DateTime('2017-05-01'));
        $this->shouldHaveType(Expense::class);
    }
}
