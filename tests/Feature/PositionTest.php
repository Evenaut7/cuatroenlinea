<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PositioinTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_red_position()
    {
        $codigo = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1234567');
                    
        $this->assertTrue(substr_count($codigo,'bg-red-500') == 4);

    }

    public function test_sky_position()
    {
        $codigo = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1234567');
                    
        $this->assertTrue(substr_count($codigo,'bg-red-500') == 4);

    }

    public function test_empty_position()
    {
        $codigo = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1234567');
                    
        $this->assertTrue(substr_count($codigo,'bg-gray-200') == 35);

    }

}