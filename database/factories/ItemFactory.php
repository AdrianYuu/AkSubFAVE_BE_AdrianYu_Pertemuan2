<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        $faker = faker::create();
        static $idx = 0;
        return [
            'name' => $faker->words(2, true),
            'description' => $faker->sentence(),
            'price' => $faker->numberBetween(10000, 100000),
            'picture' => $idx++ . '.png',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
