<?php

namespace App;

class tablero {

    private $cantidad = 0;
    private $fichas;
    private $color1 = "Azul";
    private $color2 = "Rojo";
    private $comprobante = 0;

    public function cambiar_color1($color) {
        if($this->comprobante == 0){
            $this->color1 = $color;
        }
        else{
            print("No se puede cambiar el color durante una partida");
        }
    }

    public function cambiar_color2($color) {
        if($this->comprobante == 0){
            $this->color2 = $color;
        }
        else{
            print("No se puede cambiar el color durante una partida");
        }
    }

    public function mostrar_tablero() {
        return $this->fichas;
    }

    public function colocar_ficha(int $posicion) {
        
        $this->comprobante = 1;
        
        if ((strlen($this->fichas) % 2) == 0){
        $ficha = new ficha($this->color1);
        }
        else{
        $ficha = new ficha($this->color2);
        }
        
        $this->fichas[$this->cantidad] = ($ficha, $posicion);
        $this->cantidad ++;
    }

    public function reiniciar() {
        $this->cantidad = 0;
        $this->fichas = [];
        $this->comprobante = 0;
    }


}

?>