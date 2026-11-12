<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_homepage_redirects_to_the_todo_list(): void
    {
        $response = $this->get('/');

        $response->assertRedirect(route('todos.index'));
    }

    public function test_the_create_page_renders(): void
    {
        $response = $this->get('/todos/create');

        $response->assertOk();
    }
}
