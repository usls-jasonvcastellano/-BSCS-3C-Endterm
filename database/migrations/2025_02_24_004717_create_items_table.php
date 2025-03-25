<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Column to store item name
            $table->decimal('price', 8, 2); // Column to store the price of the item
            $table->unsignedBigInteger('category_id'); // Foreign key to categories table
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Foreign key relationship
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
