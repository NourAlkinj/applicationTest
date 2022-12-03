<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->string('photo')->nullable()->default(null);
            $table->float('main_price', 10, 5)->nullable()->default(0.0);
            $table->float('main_discount', 10, 5)->nullable()->default(0.0);
            $table->unsignedBigInteger('category_id')->nullable()->default(null);
            $table->boolean('is_active')->nullable()->default(false);
            $table->string('notes')->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
};
