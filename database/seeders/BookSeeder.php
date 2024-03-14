<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            [
                'title' => 'Book 2',
                'author' => 'Author 2',
                'isbn' => '0987654321',
                'edition' => 'Second Edition',
                'cover' => 'book2.jpg',
                'description' => 'This is book 2',
                'pages' => 300,
            ],
            [
                'title' => 'Poesia resumida',
                'author' => 'Francisco Ferrer Lerín',
                'isbn' => '9788411072816',
                'edition' => 'First Edition',
                'cover' => 'book1.jpg',
                'description' => 'Toda la obra reunida de un poeta que forma ya parte imprescindible',
                'pages' => 512,
            ],
            [
                'title' => 'El infinito en un junco',
                'author' => 'Irene Vallejo',
                'isbn' => '9788499428813',
                'edition' => 'First Edition',
                'cover' => 'book2.jpg',
                'description' => 'La invención de los libros en el mundo antiguo',
                'pages' => 512,
            ],
            [
                'title' => 'El cuco de cristal ',
                'author' => 'Javier Castillo',
                'isbn' => '9788491293552',
                'edition' => 'First Edition',
                'cover' => 'book2.jpg',
                'description' => 'El libro es, como todos los suyos, el ágil, fácil de leer y engancha desde el principio. Pero luego va perdiendo fuelle.',
                'pages' => 512,
            ],
        ];

        foreach ($books as $book) {
            \App\Models\Book::create($book);
        }
    }
}
