<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProyectImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyect_image', function (Blueprint $table) {
            $table->unsignedBigInteger('proyect_id');
            $table->foreign('proyect_id')->references('id')->on('proyects');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_proyect_image');
    }
}
