<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class FichaColorTest extends TestCase
{
    public function test_ficha_roja(){
        
        $ficha = new Ficha("🔶");
        $this->assertTrue($ficha->mostrar_ficha() == "🔶");

    }

    public function test_ficha_azul(){
        
        $ficha = new Ficha("🔷");
        $this->assertTrue($ficha->mostrar_ficha() == "🔷");

    }

}