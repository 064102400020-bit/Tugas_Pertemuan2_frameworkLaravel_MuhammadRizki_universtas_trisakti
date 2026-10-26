<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example for root redirection.
     */
    public function test_the_application_root_redirects_to_books(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/books');
    }
}
