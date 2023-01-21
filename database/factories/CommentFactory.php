<?php

namespace Database\Factories;

use Blogufy\Core\Model;
use Blogufy\Core\Models\Comment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Blogufy\Core\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => User::factory(),
            'author_type' => function(array $attributes){
                return User::find($attributes['author_id'])->type;
            },
            'comment' => fake()->sentence(),
            'status' => fake()->randomElement(['pending', 'active', 'suspended']),
            'vote' => fake()->randomNumber(1000)
        ];
    }
}
