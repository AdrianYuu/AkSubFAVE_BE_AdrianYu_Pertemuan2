<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = faker::create();
        return [
            'name' => $faker->words(2, true),
            'description' => $faker->sentence(5),
            'price' => $faker->numberBetween(10000, 100000),
            'picture' => $faker->image(public_path('storage/images'), 200, 200, 'item', false),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
