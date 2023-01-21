<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Blogufy\Core\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
        ->count(10)
        ->create();
    }
}
