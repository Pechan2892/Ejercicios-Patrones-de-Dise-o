<?php

class Shiel extends WeaponDecorator{

    public function getDescription(): string {
        return $this->character->getDescription() . " with a Shield";

    }

    public function getPower(): int {
        return $this->character->getPower() + 20;
    
        
    }
}

?>