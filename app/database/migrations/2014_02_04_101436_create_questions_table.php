<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			//
		$table->increments('id');
        $table->integer('user_id');
        $table->string('content');
		$table->string('optiona');
        $table->string('optionb');
		$table->string('optionc');
		$table->string('optiond');
		$table->string('optione');
		$table->string('correct');
		$table->string('categoryid');
		$table->string('subcategoryid');
        $table->string('explanation');
		$table->string('link');
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
		Schema::table('questions', function(Blueprint $table)
		{
			//
		});
	}

}