<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store(): void
    {
        $response = $this->post('tags', ['name' => 'PHP']);

        $response->assertRedirect('/');

        $this->assertDatabaseHas('tags', ['name' => 'PHP']);
    }
}
