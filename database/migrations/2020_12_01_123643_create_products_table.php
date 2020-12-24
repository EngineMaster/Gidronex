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
            $table->string('name');
            $table->string('index');
            $table->string('qty')->default(1);
            $table->double('price')->default(0);
            $table->text('description')->nullable();
            $table->text('option')->nullable();
            $table->text('option2')->nullable();
            $table->text('image')->nullable();
            $table->text('image_product')->default('https://lh3.googleusercontent.com/proxy/2prlRxRg3FheXlVuK73uHGuD8XcBpHRDlg0G9TXW0Y9oFFGh0b7UXK2v9vHXs04GbtS5EppcQMf2bEhs31u3sVw28k9sr2PBwj3kPQ');
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
