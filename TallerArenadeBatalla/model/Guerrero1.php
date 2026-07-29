<?php

require_once __DIR__  .'/Personaje.php';

//Abstracción
abstract class Guerrero1 {
    private $escudo;

    //Metodo de guerrero1 abstracto
    abstract public function matar();

    public function __construct($escudo) {
        $this -> escudo = $escudo;
    }

    //GETTERS
    public function getEscudo() {
        return $this -> escudo;
    }

    //SETTERS
    public function setEscudo($escudo) {
        $this -> escudo = $escudo;
    }

    public function atacar() {
        return "Escudo: {$this -> escudo}";
    }
}