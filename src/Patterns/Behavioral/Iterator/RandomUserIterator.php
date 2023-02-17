<?php

namespace App\Patterns\Behavioral\Iterator;

use Iterator;

class RandomUserIterator implements Iterator
{
    private int $currentIndex = 0;

    /**
     * @var User[]
     */
    private array $users;

    /**
     * @param User[] $users
     */
    public function __construct(array $users)
    {
        shuffle($users);
        $this->users = $users;
    }

    public function current(): User
    {
        return $this->users[$this->currentIndex];
    }

    public function next(): void
    {
        ++$this->currentIndex;
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function valid(): bool
    {
        return isset($this->users[$this->currentIndex]);
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }
}
