<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

	DB::table('categories')->insert(
	    [
		[
		    'name' => '1～100問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '100～200問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '200～300問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '300～400問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '400～500問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '500～600問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '600～700問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '700～800問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '800～900問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '900～1000問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1000～1100問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1100～1200問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1200～1300問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1300～1400問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1400～1500問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1500～1600問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1600～1700問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
				[
		    'name' => '1700～1800問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		],
		[
		    'name' => '1800～1900問目',
		    'created_at' => now(),
		    'updated_at' => now(),
		]
	    ]
	);
    }
}
