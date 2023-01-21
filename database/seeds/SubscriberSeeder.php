<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Blogufy\Core\Models\Subscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscriber::factory()
        ->count(1000)
        ->create();
    }
}
