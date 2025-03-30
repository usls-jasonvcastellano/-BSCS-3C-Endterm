<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); 
            $table->string('category')->unique(); 
            $table->string('itemname')->unique(); 
            $table->string('price')->unique(); 
            $table->string('quantity')->unique(); 
            
            $table->timestamps(); //  
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
