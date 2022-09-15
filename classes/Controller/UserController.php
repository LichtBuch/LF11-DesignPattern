<?php

namespace DesignPatterns\Controller;

use DesignPatterns\Model\User;
use DesignPatterns\Model\UserRepository;
use DesignPatterns\Observer\Publisher;
use DesignPatterns\Observer\Subscriber;

class UserController extends Controller
{
    public function __construct(
        private readonly UserRepository $repository
    ){
        parent::__construct('');
    }

    public function run(){
        $userSubscriber = new Subscriber(fn(User $user) => print '<h1>' . $user->getName() . '</h1>', true);

        $this->repository->update(new User(2, 'Tom'));
        Publisher::getUserPublisher()->unsubscribe($userSubscriber);
    }
}