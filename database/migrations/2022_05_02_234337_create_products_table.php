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
            $table->string('id', 32)->primary();
            $table->unsignedBigInteger('unique_key')->index();
            $table->string('product_title');
            $table->text('product_description');
            $table->string('style');
            $table->string('sanmar_mainframe_color');
            $table->string('size');
            $table->string('color_name');
            $table->string('piece_price');

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
