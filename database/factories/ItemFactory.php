<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        static $idx = 0;
        return [
            'name' => Str::random(15),
            'description' => Str::random(30),
            'price' => rand(10000, 50000),
            'picture' => $idx++ . '.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
