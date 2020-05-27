<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('category')->insert([
                'name' => Str::random(10),
                'parent_id' => $i,
                'image' => 'https://www.lokeshdhakar.com/projects/lightbox2/images/image-3.jpg'
            ]);
        }
    }
}