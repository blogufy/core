<?php
namespace Blogufy\Core\Database\Factories;

use Illuminate\Support\Str;
use Blogufy\Core\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition() 
    { 
        $name = fake()->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->sentence(),
        ];
    }
    
}