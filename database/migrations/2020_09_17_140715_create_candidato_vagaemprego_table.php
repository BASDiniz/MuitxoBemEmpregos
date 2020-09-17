<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoVagaempregoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_vagaemprego', function (Blueprint $table) {
            $table->integer('candidato_id')->unsigned();
            $table->integer('empregador_id')->unsigned();

            $table->timestamps();

            $table->foreign('candidato_id')->references('id')->on('candidatos');
            $table->foreign('empregador_id')->references('id')->on('empregadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_vagaemprego');
    }
}
