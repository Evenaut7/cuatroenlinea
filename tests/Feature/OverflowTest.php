<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OverflowTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_overflow_by_amount_of_numbers()
    {
        $codigo = file_get_contents('https://cuatroenlinea.ddev.site/jugar/123456712345671234567123456712345671234567123456713');
                    
        $this->assertTrue(substr_count($codigo,'bg-red-500') == 21) && $this->assertTrue(substr_count($codigo,'bg-sky-500') == 21);

    }

    public function test_overflow_by_bigger_number()
    {
        $response = $this->get('jugar/12345671238');

        $response->assertStatus(500);
    }


}