<?php

require_once __DIR__ . '/Personaje.php';

class Mago extends Personaje {
    private $magia;

    public function __construct($nombre, $vida, $ataque, $defensa, $magia) {
        //Hereda del padre
        parent :: __construct($nombre, $vida, $ataque, $defensa);

        $this -> magia = $magia;
    }

    //GETTERS Y SETTERS
    public function getMagia() {
        return $this -> magia;
    }

    public function setMagia($magia) {
        $this -> magia = $magia;
    }

    public function atacar() {
        return parent :: atacar() . " | Magia: {$this -> magia} cc.";
    }
}