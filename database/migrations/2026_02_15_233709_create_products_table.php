<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->json('images');
            $table->integer('pages_num');
            $table->string('author');
            $table->text('description');
            $table->string('publisher');
            $table->string('language');
            $table->date('publication_year');
            $table->integer('stock');
            $table->decimal('rate', 3, 2)->default(0);
            $table->string('author_img');
            $table->decimal('discount', 5, 2);
            $table->enum('category', [
                'Fantacy','Thriller','Mystery','Horror','Romance','Cooking',
                'History','Art','Self-help','Travel','Business','Health',
                'Comedy','Sport','Children','Science'
            ]);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
