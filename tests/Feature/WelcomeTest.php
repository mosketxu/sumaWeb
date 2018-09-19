<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeTest extends TestCase
{
    /** @test */
    public function it_shows_welcome_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSee('Welcome');
    }
}
