<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:Book-Shop/database/migrations/2021_09_14_092246_create_products_information_table.php
        Schema::create('product_infomations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->string('published');
            $table->string('language');
            $table->smallint('year');
=======
        Schema::create('product_information', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('author')->nullable();
            $table->string('published')->nullable();
            $table->string('language')->nullable();
            $table->integer('year')->nullable();
>>>>>>> huudinh:Book-Shop/database/migrations/2021_09_14_092246_create_product_information_table.php
            $table->timestamps();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD:Book-Shop/database/migrations/2021_09_14_092246_create_products_information_table.php
        Schema::dropIfExists('product_infomations');
=======
        Schema::dropIfExists('product_information');
>>>>>>> huudinh:Book-Shop/database/migrations/2021_09_14_092246_create_product_information_table.php
    }
}
