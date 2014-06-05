<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocaleToGapSongs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gap_songs', function(Blueprint $table)
		{
			//
            $table->renameColumn('gap_song_url', 'gap_song_file');
            $table->renameColumn('title', 'title_es');
            $table->string('title_en', 128);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gap_songs', function(Blueprint $table)
		{
			//
		});
	}

}
