<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books');
            $table->foreignId('book_store_id')->constrained('book_stores');
            $table->decimal('current_price', 8, 2);
            $table->text('price_history')->nullable(); // Will store the JSON with the history
            $table->date('update_date')->nullable();
            $table->string('condition')->nullable();
            $table->text('product_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
