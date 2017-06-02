<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaLocais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('locais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 60)->nullable();
            $table->string('andar', 3)->nullable();

            $table->integer('predio_id')->unsigned();

            $table->foreign('predio_id')->references('id')->on('predio');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('locais');
    }
}
