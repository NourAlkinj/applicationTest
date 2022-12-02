<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_size_id');
            $table->unsignedBigInteger('product_color_id');
            $table->decimal('discount', 8, 2)->nullable()->default(0.0);
            $table->decimal('price', 8, 2)->nullable()->default(0.0);
            $table->integer('quantity')->nullable()->default(0);
            $table->integer('status')->nullable()->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_color_sizes');
    }
};
