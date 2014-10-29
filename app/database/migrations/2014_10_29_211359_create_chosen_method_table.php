<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChosenMethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chosen_methods', function(Blueprint $table)
		{
			
			$table->unsignedInteger('mid');

			$table->foreign('mid')->references('mid')->on('methods');

			$table->unsignedInteger('uid');

			$table->foreign('uid')->references('uid')->on('users');
                        
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
		Schema::drop('chosen_methods');
	}

}
