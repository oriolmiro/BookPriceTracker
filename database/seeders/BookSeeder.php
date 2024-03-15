<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         *         Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('isbn')->unique();
            $table->string('edition')->nullable();
            $table->string('cover')->nullable();
            $table->text('description')->nullable();
            $table->integer('pages')->nullable();
            $table->timestamps();
        });
         */
        //create a seeder
        $books = [
            [
                'title' => 'Book 1',
                'author' => 'Author 1',
                'isbn' => '1234567890',
                'edition' => 'First Edition',
                'cover' => 'book1.jpg',
                'description' => 'This is book 1',
                'pages' => 200,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }

        /**
         * Importació del fitxer JSON
         */
        $jsonPath = base_path('database/data/books.json');

        if (!File::exists($jsonPath)) {
            echo "El archivo JSON no existe.";
            return;
        }

        $jsonData = File::get($jsonPath);
        $booksData = json_decode($jsonData, true);

        foreach ($booksData as $bookData) {
            $isbn = $this->extractIsbn($bookData['Links_compras']);
            $pagines = intval($bookData['Paginas'] ?? "") >= 1000 ? 0 : intval($bookData['Paginas'] ?? "");
            Book::create([
                'title' => $bookData['Titulo'],
                'author' => mb_convert_encoding(substr($bookData['Autor'], 0, 190), 'UTF-8', 'UTF-8'),
                // Asegúrate de que el campo ISBN exista o ajústalo según sea necesario
                'isbn' => $isbn,
                'cover' => $bookData['Portada'] ?? "",
                'description' => mb_convert_encoding($bookData['Descripcion'], 'UTF-8', 'UTF-8'),
                'pages' => $pagines,
                // Añade aquí cualquier otro campo que necesites
            ]);
        }
    }
    protected function extractIsbn($links)
{
    foreach ($links as $link) {
        if (strpos($link, 'todostuslibros.com') !== false || strpos($link, 'agapea.com') !== false) {
            // Actualizado para buscar un ISBN de 13 dígitos
            preg_match('/\d{13}/', $link, $matches);
            if (!empty($matches)) {
                return $matches[0];
            }
        }
    }

    return "";
}
}
