<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->truncate();

	DB::table('answers')->insert([
	    [
		'answer_1' => 'own',
		'answer_2' => 'owner',
		'answer_3' => 'absence',
		'answer_4' => 'sadly',
		'correct_answer_no' => 1,
		'commentary' => 'ownは、自分自身のや所有するといった意味の英単語です。

Ownerは、所有者という意味です。
absenceは、欠席や欠損という意味です。
sadlyは、悲しいことにという意味です。

例文で簡単に覚えちゃってください。',
		'created_at' => now(),
		'updated_at' => now(),
	    ],
	    [
		'answer_1' => 'refuse',
		'answer_2' => 'promote',
		'answer_3' => 'however',
		'answer_4' => 'wife',
		'correct_answer_no' => 3,
		'commentary' => 'howeverは、しかしといった意味の英単語です。

refuseは、拒絶するという意味の英単語です。
promoteは、促進という意味の英単語です。
wifeは、妻という意味の英単語です。

例文で簡単に覚えちゃってください。',
		'created_at' => now(),
		'updated_at' => now(),
	    ],
	    [
		'answer_1' => 'even',
		'answer_2' => 'main',
		'answer_3' => 'age',
		'answer_4' => 'cat',
		'correct_answer_no' => 1,
		'commentary' => 'evenは、～でさえ、いっそうといった意味の英単語です。

mainは、主要なという意味の英単語です。
ageは、年齢という意味の英単語です。
catは、猫という意味の英単語です。

例文で簡単に覚えちゃってください。',
		'created_at' => now(),
		'updated_at' => now(),
	    ],
	    [
		'answer_1' => 'share',
		'answer_2' => 'nation',
		'answer_3' => 'war',
		'answer_4' => 'seem',
		'correct_answer_no' => 4,
		'commentary' => 'seemは、らしい、～のように見えるといった意味の英単語です。

shareは、分け前や分け合うという意味の英単語です。
nationは、国民という意味の英単語です。
warは、戦争という意味の英単語です。

例文で簡単に覚えちゃってください。',
		'created_at' => now(),
		'updated_at' => now(),
	    ],
	    [
		'answer_1' => 'pick',
		'answer_2' => 'however',
		'answer_3' => 'save',
		'answer_4' => 'suffer',
		'correct_answer_no' => 2,
		'commentary' => 'howeverは、しかしといった意味の英単語です。

pickは、精選物や運ぶという意味の英単語です。
saveは、救うという意味の英単語です。
sufferは、被るという意味の英単語です。

例文で簡単に覚えちゃってください。',
		'created_at' => now(),
		'updated_at' => now(),
	    ],
	]);
    }
}
