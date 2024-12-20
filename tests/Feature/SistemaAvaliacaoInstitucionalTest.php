<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SistemaAvaliacaoInstitucionalTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Testa a rota GET /home.
     */
    public function test_get_route()
    {
        $response = $this->get('/home');

        $response->assertStatus(200); // Verifica se a resposta tem status 200
    }

    /**
     * Testa a rota POST /home.
     */
    public function test_post_route()
    {
        $response = $this->post('/home', [
            'nome' => 'João',
            'email' => 'joao@email.com',
        ]);

        $response->assertStatus(200); // Ajuste para o status retornado pela rota
    }
}
