<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function verificaSaludoUsuariosConNickname()
    {
        $this->get('/saludos/francisco/paco')
        ->assertStatus(200)
        ->assertSee('hola francisco, tu apodo es: paco');
    }
    /** @test */
    function verificaSaludoUsuariosSinNickname()
    {
        $this->get('/saludos/francisco')
        ->assertStatus(200)
        ->assertSee('hola francisco, no tienes apodo');
    }
}
