<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id('idVideo');
            //$table->timestamps();
            $table->string('title');
            $table->date('creationDate');
            $table->string('sinopsis', 600);
            $table->unsignedInteger('duration');
            $table->string('file');
            $table->string('tipo');
            $table->integer('episode');
            $table->integer('season');
            $table->string('imageFilm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
