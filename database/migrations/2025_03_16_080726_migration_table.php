<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbl_features', function (Blueprint $table) {
            $table->id(); 
            $table->string('feature_name')->unique(); 
            $table->string('description')->unique(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_features'); 
    }
};

