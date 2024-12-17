<?php

class Sword extends WeaponDecorator{

    public function getDescription(): string{
        return $this->character->getDescription() . " with a Sword";
}
public function getPower(): int{
    return $this->character->getPower() + 15;
}
}


?>