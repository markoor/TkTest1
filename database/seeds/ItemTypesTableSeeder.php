<?php

use Illuminate\Database\Seeder;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('item_types')->insert([
            'name' => "Books",

        ]);
		DB::table('item_types')->insert([
            'name' => "Laptops",

        ]);
		DB::table('item_types')->insert([
            'name' => "Others",

        ]);

    }
}
