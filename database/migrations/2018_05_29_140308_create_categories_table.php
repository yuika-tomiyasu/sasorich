<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('sports')->default(0);
            $table->integer('food')->default(0);
            $table->integer('music')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
