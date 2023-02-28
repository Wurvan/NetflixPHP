<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosGeneresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_generes', function (Blueprint $table) {
            $table->id('idVideosGeneres');
            //$table->timestamps();
            $table->unsignedBigInteger('idVideoVG');
            $table->foreign('idVideoVG')->references('idVideo')->on('videos');
            $table->unsignedBigInteger('idGenereVG');
            $table ->foreign('idGenereVG')->references('idGenere')->on('generes');  
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos_generes');
    }
}
