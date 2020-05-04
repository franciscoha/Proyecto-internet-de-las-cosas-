<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function verificaCargaPaginaUsuario()
    {
        $this->get('/usuario')
        ->assertStatus(200)
        ->assertSee('Usuario: Francisco Hernandez Alvarez');
    }
    /** @test */
    function verificaCargaPaginaDetalleUsuario()
    {
        $this->get('/usuario/4')
        ->assertStatus(200)
        ->assertSee('mostrando detalles de usuario: 4');
    }
    /** @test */
    function verificaCargaPaginaUsuarioNuevo()
    {
        $this->get('/usuario/nuevo')
        ->assertStatus(200)
        ->assertSee('Bienvenido usuario nuevo');
    }
}
