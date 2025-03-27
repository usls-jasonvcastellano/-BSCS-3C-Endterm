<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();  // Auto-increment ID
            $table->string('name'); // Category name
            $table->timestamps();  // Created_at & Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
