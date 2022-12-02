<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_colors');
    }
};
