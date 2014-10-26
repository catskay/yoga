<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subsections', function(Blueprint $table)
		{
			$table->increments('ssid');
                        
            $table->string('ssname', 50);
			$table->unsignedInteger('sid');
			$table->foreign('sid')->references('sid')->on('sections');
                        
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
		Schema::drop('subsections');
	}

}
