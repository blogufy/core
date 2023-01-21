<?php

namespace Database\Seeders;

use Blogufy\Core\Models\Tag;
use Illuminate\Database\Seeder;
use Blogufy\Core\Models\Article;
use Blogufy\Core\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
        ->count(1000)
        ->for(Category::factory())
        ->for(Tag::factory())
        ->create();
    }
}
