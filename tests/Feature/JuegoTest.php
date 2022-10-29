<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class JuegoTest extends TestCase
{

    public function test_diagonal_win(){
        
        $tablero = new Tablero();
        $tablero -> iniciar_tablero();

        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(3);
        $tablero->colocar_ficha(4);
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(3);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(1);

        $juego = new Juego($tablero);
        
        $this->assertTrue($juego->Jugar() == "Gana Jugador 2");

    }
    
    public function test_horizontal_win(){
        
        $tablero = new Tablero();
        $tablero -> iniciar_tablero();

        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(3);
        $tablero->colocar_ficha(3);
        $tablero->colocar_ficha(4);

        $juego = new Juego($tablero);
        
        $this->assertTrue($juego->Jugar() == "Gana Jugador 1");

    }

    public function test_vertical_win(){
        
        $tablero = new Tablero();
        $tablero -> iniciar_tablero();

        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(2);
        $tablero->colocar_ficha(3);
        $tablero->colocar_ficha(2);

        $juego = new Juego($tablero);
        
        $this->assertTrue($juego->Jugar() == "Gana Jugador 2");

    }

}