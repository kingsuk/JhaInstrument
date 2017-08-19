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
        DB::table('categories')->insert([
            'name' => 'Category One',
            'description' => 'Category Description , Short Description',
            'image1' => 'avatar-1.jpg',
        ]);
    }
}
