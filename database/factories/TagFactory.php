<?php
namespace Blogufy\Core\Database\Factories;

use Illuminate\Support\Str;
use Blogufy\Core\Models\Tag;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition() 
    { 
        $name = fake()->unique()->name();

        return [
            'author_id' => User::factory(),
            'author_type' => function(array $attributes){
                return User::find($attributes['author_id'])->type;
            },
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->sentence(),
        ];
    }
    
}