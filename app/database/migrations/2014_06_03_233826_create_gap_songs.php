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
		/*
		Schema::create('gap_songs', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('iata_code', 3)->primary();
            $table->string('name', 128);
            $table->string('country', 128);
            $table->string('area', 128);
            $table->string('city', 128);
            $table->boolean('is_partner');
        });
        DB::statement('ALTER TABLE `airports` ADD `coordinate` POINT AFTER `name`;');
        */
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
