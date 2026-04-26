<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'user_id'=>fake()->numberBetween(1,20),
            'price'=>fake()->numberBetween(10,200),
            'description'=>fake()->text(),
            'category_id'=>fake()->numberBetween(0,12),
            'order_id'=>fake()->numberBetween(0,10),
        ];
    }
}
