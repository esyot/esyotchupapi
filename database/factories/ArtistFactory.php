<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         
                'artist_name' => fake()->firstName() .' '. fake()->lastname() ,
                'address' => fake()->unique()->address(),
                'date_started' => fake()->date() ,
          
        ];
    }
}
