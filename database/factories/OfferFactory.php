<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
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

             'title'=>fake()->name(),
            'description'=>fake()->text(),
            'start_date'=>fake()->date(),
            'end_date'=>fake()->date(),
            'location'=>fake()->address(),
            'photo'=>fake()->url(),
            'user_id'=>fake()->numberBetween(0,10),
        ];
    }
}
