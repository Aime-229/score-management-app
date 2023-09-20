<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipe_id');
            $table->unsignedBigInteger('equipe2_id');
            $table->unsignedBigInteger('scoreEquipe1');
            $table->unsignedBigInteger('scoreEquipe2');
            $table->unsignedBigInteger('pointEquipe1');
            $table->unsignedBigInteger('pointEquipe2');
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('equipe2_id')->references('id')->on('equipes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('matches');
    }
}
