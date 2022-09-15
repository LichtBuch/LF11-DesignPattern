<?php

namespace DesignPatterns\Observer;

class Subscriber
{

    public function __construct(
        private $callback,
        bool $immediate = false
    ){
        Publisher::getUserPublisher()->subscribe($this, $immediate);
    }

    public function update(mixed $data): void
    {
        ($this->callback)($data);
    }

}