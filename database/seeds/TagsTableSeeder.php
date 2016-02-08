<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'graphic',
        ]);
        DB::table('tags')->insert([
            'name' => 'design',
        ]);
        DB::table('tags')->insert([
            'name' => 'photography',
        ]);
        DB::table('tags')->insert([
            'name' => 'web',
        ]);
    }
}
