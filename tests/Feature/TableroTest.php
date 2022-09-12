<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class TableroTest extends TestCase
{

    public function test_colocar_fichas(){
        
        $tablero = new Tablero;

        $tablero->iniciar_tablero();
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(7);

        $this->assertTrue($tablero->fichas[1][1]->mostrar_ficha() != "⬛");
        $this->assertTrue($tablero->fichas[2][1]->mostrar_ficha() != "⬛");
        $this->assertTrue($tablero->fichas[1][7]->mostrar_ficha() != "⬛");

    }

    public function test_turnos(){
        
        $tablero = new Tablero;

        $tablero->iniciar_tablero();
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(1);
        $tablero->colocar_ficha(7);

        $this->assertTrue($tablero->fichas[1][1]->mostrar_ficha() == "🔶");
        $this->assertTrue($tablero->fichas[2][1]->mostrar_ficha() == "🔷");
        $this->assertTrue($tablero->fichas[1][7]->mostrar_ficha() == "🔶");

    }

}