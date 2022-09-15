<?php

class UserDao{

    private User $user;

    public function __construct(){
        $this->updateUser(new User(1, 'Kevin'));
    }

    public function find(): User{
        return $this->user;
    }

    public function updateUser(User $user): void
    {
        $this->user = $user;
        Publisher::getUserPublisher()->update($user);
    }

}