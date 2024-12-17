<?php
// Archivo: Esqueleto.php
require_once 'Personaje.php';

class Esqueleto extends Personaje {
    public function ataque(): string {
        return "El Esqueleto ataca con flechas.";
    }

    public function velocidad(): string {
        return "El Esqueleto tiene una velocidad moderada.";
    }
}
