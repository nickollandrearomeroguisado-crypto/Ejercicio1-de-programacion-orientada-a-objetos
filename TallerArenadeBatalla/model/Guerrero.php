<?php

require_once __DIR__ .'/Personaje.php';

class Guerrero extends Personaje {
    private $correr;

    public function __construct($nombre, $vida, $ataque, $defensa, $correr) {
        //Llama al padre (Reutilización)
        parent :: __construct($nombre, $vida, $ataque, $defensa);

        //Inicializamos del atributo propio de guerrero
        $this -> correr = $correr;
    }

    //GETTERS Y SETTERS propios de guerrero
    public function getCorrer() {
        return $this -> correr;
    }

    public function setCorrer($correr) {
        $this -> correr = $correr;
    }

    public function atacar() {
        return parent :: atacar() . "| Correr: {$this -> correr} cc.";
    }
}