<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCompetences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('userCompetences', function (Blueprint $table) {
              $table->increments('id_user_competence');
              $table->integer('id_user')->unsigned();
              $table->foreign('id_user')
              ->references('id_user')->on('users')
              ->onDelete('cascade');
              $table->integer('id_competence')->unsigned();
              $table->foreign('id_competence')
              ->references('id_competence')->on('competences')
              ->onDelete('cascade');
              });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('userCompetences');
    }
}
