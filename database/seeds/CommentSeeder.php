<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Blogufy\Core\Models\Article;
use Blogufy\Core\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory()
        ->count(100)
        ->for(Article::factory())
        ->creae();
    }
}
