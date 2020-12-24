<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('index');
            $table->text('description')->nullable();
            $table->text('image')->nullable()->default('https://lh3.googleusercontent.com/proxy/2prlRxRg3FheXlVuK73uHGuD8XcBpHRDlg0G9TXW0Y9oFFGh0b7UXK2v9vHXs04GbtS5EppcQMf2bEhs31u3sVw28k9sr2PBwj3kPQ');
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
        Schema::dropIfExists('categories');
    }
}
