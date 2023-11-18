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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('auther_name');
            $table->string('pages');
            $table->string('image','260');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
        $table->id();
        $table->boolean('is_available')->default(true);
        $table->string('book_name');
        $table->string('auther_name');
        $table->string('pages');
        $table->string('image','260');
        $table->timestamps();
    }
};
