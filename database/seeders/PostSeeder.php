<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/PostSeeder.php
        public function run()
        {
            \App\Models\Post::factory()->count(5)->create();
        }

}
