<?php

namespace Database\Factories;

use Blogufy\Core\Model;
use Blogufy\Core\Models\Subscriber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Blogufy\Core\Subscriberl>
 */
class SubscriberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscriber::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'whatsapp' => fake()->unique()->e164PhoneNumber(),
            'status' => fake()->randomElement(['active', 'suspended'])
        ];
    }
}
