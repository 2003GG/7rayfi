<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'       => fake()->name(),
            'description' => fake()->paragraph(),
            'start_date'  => fake()->dateTimeBetween('now', '+1 month'),
            'end_date'    => fake()->dateTimeBetween('+2 months', '+6 months'),
            'photo'       => fake()->imageUrl(640, 480, 'business'),
            'user_id'     => User::factory(),
            'category_id' => Category::factory(),
            'salaire'     => fake()->numberBetween(3000, 20000),
            'ville'       => fake()->city(),
            'status'      => 'disponible',
        ];
    }
}
