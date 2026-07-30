<?php

class VistaPersonaje {
    /** @param Personaje $personaje */

    public function mostrarPersonaje(Personaje $personaje) {
        echo $personaje -> atacar();
    }

    public function mostrarSeparador() {
        echo str_repeat('-', 60);
    }

    /** @param string $titulo */
    public function mostrarTitulo($titulo) {
        echo "=== {$titulo} ===";
    }
}