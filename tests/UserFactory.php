<?php

namespace PySosu\Blogufy\Tests;

use Illuminate\Support\Str;
use Orchestra\Testbench\Factories\UserFactory as FactoriesUserFactory;

class UserFactory extends FactoriesUserFactory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
    }
}
