<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuariosTests extends TestCase
{
    /** @test */
    public function it_shows_users()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);
    }
}
