<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarkers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('gap_songs', function(Blueprint $table)
        {
            //
            $table->string('markers', 128);
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
        Schema::table('gap_songs', function(Blueprint $table)
        {
            //
            $table->dropColumn('markers');
        });
	}

}
