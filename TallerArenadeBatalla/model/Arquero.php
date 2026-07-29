<?php

require_once __DIR__ . '/Personaje.php';

class Arquero extends Personaje {
    private $apuntar;

    public function __construct($nombre, $vida, $ataque, $defensa, $apuntar) {
        //Hereda del padre
        parent :: __construct($nombre, $vida, $ataque, $defensa);

        $this -> apuntar = $apuntar;
    }

    //GETTERS Y SETTERS
    public function getApuntar() {
        return $this -> apuntar;
    }

    public function setApuntar($apuntar) {
        $this -> apuntar = $apuntar;
    }
    
    public function atacar() {
        return parent :: atacar() . " | Apuntar: {$this -> apuntar} cc.";
    }
}