<?php

require 'Jugador.php'; //Referenciamos las clase Jugador.
require 'Equipo.php'; //Referenciamos la clase equipo

$Unicaja = new Equipo([]); //Creamos un nuevo objeto de tipo equipo.

for ($i = 1; $i < 10; $i++) { //Recorremos el array, creando un nuevo jugador y asignanado una cantidad aleatoria de puntos
    $jugador = new Jugador($i, rand(20, 100));
    
    $Unicaja->addJug($jugador);
}

echo "El equipo ha conseguido un total de " .$Unicaja->gettotal() ." puntos, repartidos de la siguiente forma: " ; //llamamos al metodo gettotal


    var_dump($Unicaja) ; //usamos la función var_dump para mostrar información del equipo creado.

