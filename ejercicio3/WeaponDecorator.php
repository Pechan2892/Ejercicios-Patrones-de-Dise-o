<?php

abstract class WeaponDecorator implements Character{
     protected $character;


     public function __construct(Character $character){
        $this->character = $character;
    }

    public function getDescription(): string{
        return $this->character->getDescription();
    }

    public function getPower(): int{
        return $this->character->getPower();
    }
    
}



?>