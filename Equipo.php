<?php

class Equipo { //Creamos la clase equipo.

    private $jugadores;

    public function __construct($jugadores){
        $this->jugadores=$jugadores; //Constructor de la clase jugadores.
    }

    public function getNumJug() { //método getNumJug
        return $this->numJug;
    }

    public function addJug($jugador) {
        array_push($this->jugadores, $jugador); //Usamos el método array_push para añadir un jugador a lo que será el array jugadores
    }
    
    public function getJug($numJug) {  // La función o método getJug crea en primer lugar un variable exist, inicializada en
                                       // un valor buleano de false, posteriormente un bucle foreach recorre el array jugadores asociando
                                       //la variable jugador a la variable numJug. Una vez hecho esto, definira la eistencia del número
                                       //del jugador en cuestión.
        $exists = false;
        
        foreach ($this->jugadores as $jugador) {
            if ($jugador->getNumJug() == $numJug) {
                $exists = true;
                
            }else{
                return $exists ? $jugador : "No existe el jugador número $numJug";

            }
        }
            
        
    }

    public function gettotal(){//El método gettotal muestra el total de los puntos conseguidos por el equipo.

        $Ptostotales=0; //Generamos una variable incializada en 0.

        foreach ($this->jugadores as $jugador){ //Recorremo el array, definiendo que los puntos totales serán igual los puntos 
            $Ptostotales=$Ptostotales+$jugador->getPtos(); //obtenidos por el jugador.



        }

        return $Ptostotales;
    }
    
    
    
    
    }