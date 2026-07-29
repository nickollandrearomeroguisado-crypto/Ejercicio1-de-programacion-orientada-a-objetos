<?php

//Encapsulamiento
class Personaje {
    private $nombre;
    private $vida;
    private $ataque;
    private $defensa; 

    public function __construct($nombre, $vida, $ataque, $defensa) {
        $this -> nombre = $nombre;
        $this -> vida = $vida;
        $this -> ataque = $ataque;
        $this -> defensa = $defensa;
    }

    //GETTERS
    public function getNombre() {
        return $this -> nombre;
    }

    public function getVida() {
        return $this -> vida;
    }

    public function getAtaque() {
        return $this -> ataque;
    }

    public function getDefensa() {
        return $this -> defensa;
    }

    //SETTERS
    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }

    public function setVida($vida) {
        $this -> vida = $vida;
    }

    public function setAtaque($ataque) {
        $this -> ataque = $ataque;
    }

    public function setDefensa($defensa) {
        $this -> defensa = $defensa;
    }

    //Polimorfismo
    public function atacar() {
        return "Nombre: {$this -> nombre} | Vida: {$this -> vida} | Ataque: {$this -> ataque} | Defensa: {$this -> defensa}";
    }
}