<?php

namespace App\Patterns\Behavioral\Iterator;

use IteratorAggregate;
use Traversable;

class UserCollection implements IteratorAggregate
{
    private array $users;

    public function add(User $user)
    {
        $this->users[] = $user;
    }

    public function getIterator(): Traversable
    {
        return new RandomUserIterator($this->users);
    }
}
