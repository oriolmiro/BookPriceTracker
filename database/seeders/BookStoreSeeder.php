<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         *         Schema::create('book_stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->timestamps();
        });
         */
        //Create seeder
        $bookStores = [
            [
                'name' => 'amazon',
                'url' => 'https://www.amazon.com',
            ],
            [
                'name' => 'agapea',
                'url' => 'https://www.agapea.com/',
            ],
            [
                'name' => 'llardelllibre',
                'url' => 'https://www.llardelllibre.cat',
            ],
            [
                'name' => 'carrefour',
                'url' => 'https://www.carrefour.es',
            ],
            [
                'name' => 'abacus',
                'url' => 'https://www.abacus.coop',
            ],
            [
                'name' => 'lacentral',
                'url' => 'https://www.lacentral.com/',
            ],
            [
                'name' => 'fnac',
                'url' => 'https://www.fnac.es/',
            ],
            [
                'name' => 'casadellibro',
                'url' => 'https://www.casadellibro.com/',
            ],
            [
                'name' => 'llibreriablanquerna',
                'url' => 'https://www.llibreriablanquerna.cat/',
            ],
            [
                'name' => 'elcorteingles',
                'url' => 'https://www.elcorteingles.es/',
            ],

        ];
        foreach ($bookStores as $bookStore) {
            \App\Models\BookStore::create($bookStore);
        }

    }
}
