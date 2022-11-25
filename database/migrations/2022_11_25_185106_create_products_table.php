<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->integer('price')->nullable()->default(0);
            $table->boolean('is_perfume')->nullable()->default(false);
            $table->boolean('is_makeup')->nullable()->default(false);
            $table->boolean('is_nailpolish')->nullable()->default(false);
            $table->boolean('is_active')->nullable()->default(false);
            $table->string('notes')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
