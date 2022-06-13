<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('image')->insert([
            'announcement_id' => 0,
            'url' => 'poluted-river.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        \DB::table('image')->insert([
            'announcement_id' => 0,
            'url' => 'poluted-river.png',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
