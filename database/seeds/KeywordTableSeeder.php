<?php

use Illuminate\Database\Seeder;

class KeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keywords')->truncate();

        DB::table('keywords')->insert([

          [
            'initial' => 'o',
            'keyword' => 'own',
            'description' => '自分自身の、所有する',
            'categories_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
          ],
	  [
        'initial' => 'e',
        'keyword' => 'even',
        'description' => 'でさえも、いっそう',
        'categories_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
      ],
    ]);
  }
}
