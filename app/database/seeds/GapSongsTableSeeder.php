<?php

class GapSongsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		Eloquent::unguard();

		$count = 75;
		// $this->call('UserTableSeeder');
		DB::table('gap_songs')->delete();
		$faker = Faker\Factory::create('en_GB');

		$faker->addProvider(new Faker\Provider\Base($faker));
		$faker->addProvider(new Faker\Provider\en_GB\Address($faker));
		$faker->addProvider(new Faker\Provider\Internet($faker));
		$faker->addProvider(new Faker\Provider\Uuid($faker));
		
		$array = array('kids','happy','love','fun','mean','sexy');
		$this->command->info(implode($array));
		for( $x=0 ; $x<$count; $x++ )
    	{
    		$cats = $faker->randomElements($array, $faker->numberBetween(1, 3));
    		$this->command->info(implode($cats));
    		$catStr = implode("|", $cats);
    		$this->command->info($catStr);
    		GapSong::create(array(
    			'title_en' => $faker->name,
                'title_es' => $faker->name,
    			'categories'=> $catStr,
    			'gaps' => $faker->numberBetween(1, 4),
    			'gap_duration' => $faker->numberBetween(500,2000),
    			'gap_num_characters' => $faker->numberBetween(5,20),
    			'gap_song_file'=> $faker->url,
    			'inAppId_iOS'=> $faker->uuid,
    			'inAppId_Android'=> $faker->uuid,
    			'price'=> $faker->numberBetween(0,100)
    		));
    	}
	}

}
