<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
{
    return [
        'name' => $this->faker->randomElement([
            '🏺 Céramique & Poterie',
            '👜 Travail du Cuir',
            '🪵 Travail du Bois',
            '🧵 Textile & Tissage',
            '💍 Bijouterie',
            '⚒️ Travail du Fer & Cuivre',
            '🧺 Vannerie & Osier',
            '🪡 Broderie',
            '🪔 Tapis',
            '🏛️ Plâtrerie & Stuc',
            '✍️ Calligraphie',
            '👝 Maroquinerie',
        ]),
    ];
}
}
