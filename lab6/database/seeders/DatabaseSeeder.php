<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* $this->call(ImagesTableSeeder::class);
        $this->call(AnnouncementTableSeeder::class);*/
        $this->call(AnnouncementImageTableSeeder::class);
    }
}
