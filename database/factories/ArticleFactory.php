<?php
namespace Blogufy\Core\Database\Factories;


use Illuminate\Support\Str;
use Blogufy\Core\Models\Article;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $title = fake()->sentence();

        return [
            'author_id' => User::factory(),
            'author_type' => function(array $attributes){
                return User::find($attributes['author_id'])->type;
            },
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->paragraph(),
            'description' => fake()->paragraph(),
            'image' => fake()->image(),
            'status' => fake()->randomElement(['active', 'draft']),
            'views' => fake()->randomNumber(1000),
            'click' => fake()->randomNumber(1000),
            'dislike' => fake()->randomNumber(1000),
            'share' => fake()->randomNumber(1000),
        ];
    }
}