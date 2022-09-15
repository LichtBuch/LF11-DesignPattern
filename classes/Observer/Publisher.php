<?php

namespace DesignPatterns\Observer;


class Publisher{

    /**
     * @var Subscriber[]
     */
    private array $subscribers = [];

    private mixed $value;

    private static Publisher $userPublisher;

    public static function getUserPublisher(): Publisher
    {
        if (!isset(self::$userPublisher)){
            self::$userPublisher = new Publisher();
        }
        return self::$userPublisher;
    }


    public function subscribe(Subscriber $subscriber, bool $immediate = false): void
    {
        $this->subscribers[] = $subscriber;
        if ($immediate){
            $subscriber->update($this->value);
        }
    }

    public function unsubscribe(Subscriber $subscriber): void
    {
        if (($key = array_search($subscriber, $this->subscribers)) !== false) {
            unset($this->subscribers[$key]);
        }
    }

    public function dispatch(): void
    {
        foreach ($this->subscribers as $subscriber){
            $subscriber->update($this->value);
        }
    }

    public function update(mixed $value): void
    {
        $this->value = $value;
        $this->dispatch();
    }


}