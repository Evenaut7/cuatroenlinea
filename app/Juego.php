<?php

namespace App;

class Juego {

    private $tablero;
  
    public function __construct(Tablero $tablerin){
        $this->tablero = $tablerin;
    }

    public function jugar(){

        $this->tablero->iniciar_tablero();
        $contador = 0;
    
        while(($this->horizontal() || $this->vertical() || $this->diagonal()) != True){
            if($contador % 2 == 0){
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
            $contador ++;
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
                    print("Has ganado");
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
                    print("Has ganado");
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
                        print("Has ganado");
                        return True;
                    }
                }
                if($i<=3 && $x>4){
                    if($fichas[$i][$x]->mostrar_ficha() == $fichas[$i+1][$x-1]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() == $fichas[$i+2][$x-2]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() == $fichas[$i+3][$x-3]->mostrar_ficha() && $fichas[$i][$x]->mostrar_ficha() != "⬛"){
                        print("Has ganado");
                        return True;
                    }
                } 
            }
        }
    return False;
    }
}

$tablero = new Tablero();

$juego = new Juego($tablero);
$juego -> jugar();

?>
