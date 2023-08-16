<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genders = ['male','female'];

        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'mobile_number' => fake()->phoneNumber(),
            'gender' => fake()->randomElement($genders),
            'address' => fake()->address(),
        ];
    }
}
