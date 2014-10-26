<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScriptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scripts', function(Blueprint $table)
		{
			$table->increments('id');
                        
            $table->string('name', 50);
			$table->unsignedInteger('uid');
			$table->foreign('uid')->references('uid')->on('users');
			$table->date('date');
			$table->string('notes', 1000);
			$table->string('methods', 500);
			$table->string('font_size', 15);

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
		Schema::drop('scripts');
	}

}
