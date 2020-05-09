<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->truncate();

	DB::table('quizzes')->insert(
	    [
		[
		    'title' => '意味:自分自身の、所有する　覚え方：自分自身で所有するなんてオウンモーレツ',
		    'answers_id' => 1,
		    'categories_id' => 1,
		    'created_at' => now(),
		    'updated_at' => now(),
		    'image_src' => NULL,
		],
		[
		    'title' => '意味:しかし　覚え方：這うエバーさん、しかし見つかる',
		    'answers_id' => 2,
		    'categories_id' => 1,
		    'created_at' => now(),
		    'updated_at' => now(),
		    'image_src' => NULL,
		],
		[
		    'title' => '意味:～でさえ、いっそう　覚え方：浮気後の土下座でさえ、言い分でいっそう修羅場',
		    'answers_id' => 3,
		    'categories_id' => 1,
		    'created_at' => now(),
		    'updated_at' => now(),
		    'image_src' => NULL,
		],
		[
		    'title' => '意味:～らしい、～のように思える　覚え方：シームレスの洋服が流行らしい',
		    'answers_id' => 4,
		    'categories_id' => 1,
		    'created_at' => now(),
		    'updated_at' => now(),
		    'image_src' => NULL,
		],
		[
		    'title' => '意味:しかし　覚え方：這うエバーさん、しかし見つかる',
		    'answers_id' => 5,
		    'categories_id' => 1,
		    'created_at' => now(),
		    'updated_at' => now(),
		    'image_src' => NULL,
		]
	    ]
	);
		    
    }
}
