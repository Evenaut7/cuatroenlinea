<?php

namespace App;

class Juego {

    private $tablero;
  
    public function __construct(Tablero $tablerin){
        $this->tablero = $tablerin;
    }

    public function reiniciar_tablero(){
        $this->tablero->iniciar_tablero();
    }

    public function jugar(){
    
        while(($this->horizontal() || $this->vertical() || $this->diagonal()) != True){
            if($this->tablero->fichas_totales % 2 == 0){
                print("Turno Jugador 1: ");
                $coordenada = readline();
                $this->tablero->colocar_ficha($coordenada);
                $this->tablero->mostrar_tablero();
            }
            else{
                print("Turno Jugador 2: ");
                $coordenada = readline();
                $this->tablero->colocar_ficha($coordenada);
                $this->tablero->mostrar_tablero();
            }
        }
        if(($this->horizontal() || $this->vertical() || $this->diagonal())){
            if($this->tablero->fichas_totales % 2 == 0){
                return "Gana Jugador 2";
            }
            else{
                return "Gana Jugador 1";
            }
        }
        else{
            return "Empate";
        }
    }

    private function horizontal(){
    
        $aux = "";
        $cant_aux = 0;
        
        for($i = 6; $i>=1; $i--){
            for($x = 1; $x<=7; $x++){
                $fichas = $this->tablero->fichas;
                if($fichas[$i][$x]->mostrar_ficha() == $aux && $fichas[$i][$x]->mostrar_ficha() != "⬛"){
                    $cant_aux ++;
                }
                else{
                    $aux = $fichas[$i][$x]->mostrar_ficha();
                    $cant_aux = 1;
                }
                if($cant_aux == 4){
                    return True;
                }
            }
        }
    }

    private function vertical(){
    
        $aux = "";
        $cant_aux = 0;
    
        for($x = 1; $x<=7; $x++){
            for($i = 6; $i>=1; $i--){
                $fichas = $this->tablero->fichas;
                if($fichas[$i][$x]->mostrar_ficha() == $aux && $fichas[$i][$x]->mostrar_ficha() != "⬛"){
                    $cant_aux ++;
                }
                else{
                    $aux = $fichas[$i][$x]->mostrar_ficha();
                    $cant_aux = 1;
                }
                if($cant_aux == 4){
                    return True;
                }
            }
        }
    }

    private function diagonal(){
    
        for($i = 6; $i>=1; $i--){
            for($x = 1; $x<=7; $x++){
                $fichas = $this->tablero->fichas;
                if($i<=3 && $x<=4){
                    if($fichas[$i][$x]->mostrar_ficha() == $fichas[$i+1][$x+1]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() == $fichas[$i+2][$x+2]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() == $fichas[$i+3][$x+3]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() != "⬛"){
                        return True;
                    }
                }
                if($i>=4 && $x<=4){
                    if($fichas[$i][$x]->mostrar_ficha() == $fichas[$i-1][$x+1]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() == $fichas[$i-2][$x+2]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() == $fichas[$i-3][$x+3]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() != "⬛"){
                        return True;
                    }
                } 
            }
        }
    }
}

$tablero = new Tablero();

$juego = new Juego($tablero);
$juego -> jugar();

?>
