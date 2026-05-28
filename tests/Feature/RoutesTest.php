<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_about_route(): void
    {
        $response = $this->get('/about?fn=Zsolt');

        $response->assertStatus(200);
        $response->assertSee('Zsolt');
    }
    public function test_filmek_route(): void
    {
        $response = $this->get('/filmek');

        $response->assertStatus(200);
        $response->assertSee('Pulp Fiction');
    }
    public function test_nemletezik_view(): void
    {
        $response = $this->get('/nemletezik');

        $response->assertStatus(500);
    }
    public function test_nemletezik_route(): void
    {
        $response = $this->get('/nemmletezik');

        $response->assertStatus(404);
        $response->assertNotFound();
        $response->assertSee('Not Found');
    }
    public function test_rolam_route(): void
    {
        $response = $this->get('/rolam');

        $response->assertStatus(200);
        $response->assertDontSee('Hiba');
    }
    public function test_kedvenc_jatek_route(): void
    {
        $response = $this->get('/kedvenc-jatek');

        $response->assertStatus(200);
        $response->assertSee('Kedvenc játék');
    }
    public function test_kapcsolat_route(): void
    {
        $response = $this->get('/kapcsolat');

        $response->assertStatus(200);
        $response->assertSee('Kapcsolat');
    }
}
