<?php

namespace DesignPatterns\Model;

use DesignPatterns\Observer\Publisher;

class UserRepository{

    private User $user;

    public function __construct(){
        $this->update(new User(1, 'Kevin'));
    }

    public function find(): User{
        return $this->user;
    }

    public function update(User $user): void
    {
        $this->user = $user;
        Publisher::getUserPublisher()->update($user);
    }

}