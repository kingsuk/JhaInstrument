<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'code' => 'AS101',
            'name' => 'Product One',
            'description' => 'Product Description , Short Description',
            'rating' => 'Product ration goes here',
            'status' => 'In Production',
            'category_id_fk' => 1,
            'application_id_fk' => 1,
            'data_sheet_url' => 'data-sheet.pdf',
            'image1' => 'avatar-4.jpg',
            'image2' => 'avatar-2.jpg',
            'image3' => 'avatar-2.jpg',
            'image4' => 'avatar-2.jpg',
        ]);
    }
}
