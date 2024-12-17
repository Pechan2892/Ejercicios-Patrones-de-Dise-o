<?php
// Archivo: Zombi.php
require_once 'Personaje.php';

class Zombi extends Personaje {
    public function ataque(): string {
        return "El Zombi ataca con mordiscos.";
    }

    public function velocidad(): string {
        return "El Zombi es lento pero resistente.";
    }
}
