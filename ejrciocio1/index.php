<?php
// Archivo: index.php
require_once 'PersonajeFactory.php';

try {
    // Nivel del juego (puede cambiar a "dificil" o "facil")
    $nivel = 'facil'; // Cambia esto para probar otros niveles

    // Crear personaje utilizando el Factory
    $personaje = PersonajeFactory::crearPersonaje($nivel);

    // Mostrar detalles del personaje
    echo "Nivel del juego: " . ucfirst($nivel) . "<br>";
    echo "Ataque: " . $personaje->ataque() . "<br>";
    echo "Velocidad: " . $personaje->velocidad() . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
