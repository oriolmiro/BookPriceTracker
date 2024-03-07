<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Book;

class BookInsertTest extends TestCase
{
    use RefreshDatabase; // Esto reseteará tu base de datos después de cada prueba.

    /** @test */
    public function a_book_can_be_added_through_the_api()
    {
        $response = $this->postJson('/api/books', [
            'title' => 'Sample Book',
            'author' => 'John Doe',
            'isbn' => '1234567890123',
            'edition' => '1st',
        ]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'title' => 'Sample Book',
                'author' => 'John Doe',
                'isbn' => '1234567890123',
                'edition' => '1st',
            ]);

        $this->assertCount(1, Book::all()); // Asegurarse de que el libro fue añadido.
    }

    /** @test */
    public function book_creation_fails_with_invalid_data()
    {
        $response = $this->postJson('/api/books', [
            'title' => '', // Título inválido.
            'author' => '', // Autor inválido.
            'isbn' => '123', // ISBN inválido.
            // La edición es opcional, por lo tanto, no se incluye en la prueba de datos inválidos.
        ]);

        $response->assertStatus(400); // Debería fallar debido a datos inválidos.

        $this->assertCount(0, Book::all()); // Asegurarse de que ningún libro fue añadido.
    }
}