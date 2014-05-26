<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TesteTableCreate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('testes', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->integer('idade');
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
		Schema::drop('testes');
	}

}
