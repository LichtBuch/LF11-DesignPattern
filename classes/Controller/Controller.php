<?php

abstract class Controller
{

    public function __construct(
        private readonly string $template
    ){}

    abstract public function run();

    public function render(array $data): bool|string{
        ob_start();
        extract($data);
        include $this->template;
        return ob_get_clean();
    }


}