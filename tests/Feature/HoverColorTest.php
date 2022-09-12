<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HoverColorTest extends TestCase
{
    public function test_sky_hover(){

        $codigo = file_get_contents('https://cuatroenlinea.ddev.site/jugar/123456717');        
        $this->assertTrue(substr_count($codigo,'hover:bg-sky-500') == 7);

    }

    public function test_red_hover(){

        $codigo = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1234567176');      
        $this->assertTrue(substr_count($codigo,'hover:bg-red-500') == 7);

    }


}