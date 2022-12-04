<?php
namespace PySosu\Blogufy\Database\Factories;


use Illuminate\Support\Str;
use PySosu\Blogufy\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->paragraph(),
            'description' => fake()->paragraph(),
        ];
    }
}