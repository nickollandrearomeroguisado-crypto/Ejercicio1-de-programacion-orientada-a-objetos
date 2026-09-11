<?php

require_once __DIR__ . '/controller/ControladorPersonaje.php';
require_once __DIR__ . '/view/VistaPersonaje.php';

$vista = new VistaPersonaje();
$controlador = new ControladorPersonaje($vista);

$controlador -> demostrar();