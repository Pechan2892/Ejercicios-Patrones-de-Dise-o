<?php

class BaseCharacter implements Character{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getDescription(): string{
        return "Character: " . $this->name;
    }

    public function getPower(): int{
        return 10;
    }
}



?>