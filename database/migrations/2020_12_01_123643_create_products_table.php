<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->integer('category_id');
            $table->integer('section_id');
            $table->string('name');
            $table->string('index');
            $table->string('qty')->default(1);
            $table->double('price')->nullable();
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->text('link2')->nullable();
            $table->text('link3')->nullable();
            $table->text('image')->nullable();
            $table->text('image_product')->nullable();
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
}
