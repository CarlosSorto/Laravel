<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class usuarios extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testModuloUsuario()
    {
        $response = $this->get('/usuario');
        
        $response->assertStatus(200);
        //$response->assertSee("testing user page");
    }
}

/* Ojo con que las pruebas deben llevar el prefijo test en el nombre de la funcion,
    y el nombre de la prueba Test debe ir como sufijo, la prueba se crea con
    php artisan make:test nombreTest
*/