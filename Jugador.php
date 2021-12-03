<?php
//Creamos la clase.
class Jugador {
    private $numJug; //Atributo de identicicación del jugador
    private $Ptos; //Atributo puntos    

    //Método constructor
    public function __construct($numJug, $Ptos) {
        $this->numJug = $numJug;
        $this->Ptos = $Ptos;
    }


    //Getters.



    public function getNumJug() {
        return $this->numJug;
    }

    public function getPtos() {
        return $this->Ptos;
    }


    //AÑADIR PUNTOS--Definimos un if que sume los puntos añadidos a la variable, siempre que lo que añadamos sea superior a 0.

    public function addPtos($Ptos) {

        if ($Ptos>0){
            $this->Ptos+=$Ptos;
        }else{

            echo "Para añadir puntos, la cantidad debe ser mayor a uno";
        }
        
    }
}