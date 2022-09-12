<?php

namespace App;

class Tablero {

    public $fichas;
    private $color1 = "🔶";
    private $color2 = "🔷";
    public $fichas_totales = 0;
    private $columna = array(0,0,0,0,0,0,0,0);

    public function iniciar_tablero(){
        $this->fichas = [];
        $this->fichas_totales = 0;
        for($i = 1; $i<=6; $i++){
            for($x = 1; $x<=7; $x++){
                $this->fichas[$i][$x] = new Ficha("⬛");
            }
        }
    }

    public function mostrar_tablero() {
        for($i = 6; $i>=1; $i--){
            for($x = 1; $x<=7; $x++){
                print($this->fichas[$i][$x]->mostrar_ficha());
            }
            print("\n");
        }
    }

    public function colocar_ficha(int $posicion) {
        
        if ($this->fichas_totales % 2 == 0){
            $ficha = new Ficha($this->color1);
        }
        else{
            $ficha = new Ficha($this->color2);
        }

        $this->fichas_totales ++;
        $this->columna[$posicion] ++;
        $cantidad = $this->columna[$posicion];

        $this->fichas[$cantidad][$posicion] = $ficha;
    }

}

?>