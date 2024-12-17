<?php
// Archivo: PersonajeFactory.php
require_once 'Esqueleto.php';
require_once 'Zombi.php';

class PersonajeFactory {
    public static function crearPersonaje(string $nivel): Personaje {
        switch (strtolower($nivel)) {
            case 'facil':
                return new Esqueleto();
            case 'dificil':
                return new Zombi();
            default:
                throw new Exception("Nivel no reconocido: " . $nivel);
        }
    }
}
