<?php

use Illuminate\Database\Seeder;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            'name' => 'Application One',
            'description' => 'Application Description , Short Description',
            'image1' => 'avatar-2.jpg',
        ]);
    }
}
