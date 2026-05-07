<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
           'photo_URL'=>fake()->url(),
           'description'=>fake()->realText(),
           'category_id'=>fake()->numberBetween(0,12),
           'user_id'=>fake()->numberBetween(1,20),
            'report_count'=>0,
        ];
    }
}
