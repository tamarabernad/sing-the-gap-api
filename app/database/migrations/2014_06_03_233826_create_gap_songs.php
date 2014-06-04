<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGapSongs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		
		Schema::create('gap_songs', function (Blueprint $table) {

			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('title', 128);
			$table->string('categories', 128);
			$table->nullableTimestamps();
			$table->string('gaps', 128);
			$table->integer('gap_duration');
			$table->integer('gap_num_characters');
			$table->string('gap_song_url', 128);
			$table->string('inAppId_iOS', 128);
			$table->string('inAppId_Android', 128);
			$table->integer('price');
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
		Schema::drop('gap_songs');
	}

}
