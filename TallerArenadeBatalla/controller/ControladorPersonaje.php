<?php

//Importación de las clases del modelo que el controller usará
require_once __DIR__ . '/../model/Personaje.php';
require_once __DIR__ . '/../model/Guerrero.php';
require_once __DIR__ . '/../model/Mago.php';
require_once __DIR__ . '/../model/Arquero.php';
require_once __DIR__ . '/../model/Guerrero1.php';

//Importación a la view que el controller utlizará
require_once __DIR__ . '/../view/VistaPersonaje.php';

class ControladorPersonaje {
    private $vista;

    /** @param VistaPersonaje $vista */
    public function __construct(VistaPersonaje $vista) {
        $this -> vista = $vista;
    }

    public function demostrar() {
        $this -> vista -> mostrarTitulo('Academia de Guerreros');

        $personajes = array(
            new Personaje('', 5, 'Dos golpes', ''),
            new Guerrero('Ulises', 3, 'Espada', 'Con su escudo reduce el daño', 'Con su velocidad de correr puede atacar rapido a los enemigos'),
            new Guerrero1('Con su escudo ayuda a hacer más fuerte'),      //'Aquiles', 4, 'Espada de hierro', 'Con su escudo reduce el daño', 
            new Mago('Merlín', 4, 'Magia', 'Con su libro sube la cantidad de vida', 'Con su magia convierte a los enemigos en animales'),
            new Arquero('Arturo', 3, 'Arco', '', 'Con la punteria puede matar hasta tres enemigos seguidos con una flecha')
        );

        $this -> vista -> mostrarSeparador();
        foreach ($personajes as $personaje) {
            $this -> vista -> mostrarPersonaje($personaje);
        }
        $this -> vista -> mostrarSeparador();

        echo "<br> Arena de Batalla <br>";
        echo "-Encapsulamiento: atributos privados (nombre, vida, ataque, defensa). <br>";
        echo "-Herencia: Guerrero, Mago y Arquero heredan de Personaje <br>";
        echo "-Polimorfismo: atacar() se comporta diferente en cada subclase <br>";
        echo "-Abstracción: se implementa mediante clases abstractas Guerrero1 y métodos matar()";
    }
}