<?php

namespace Database\Factories;

use App\Models\User;
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
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'tc_no' => $this->faker->unique()->numberBetween(10000000000,90000000000), // 8-digit number for tc_no
            'full_name' => $this->faker->name, // Random name for full_name
            'email' => $this->faker->unique()->safeEmail, // Random unique email
            'phone' => $this->faker->unique()->e164PhoneNumber(), // Random 10-digit phone number
            'birth_date' => $this->faker->date(), // Random birth date
            'password' => bcrypt('password'), // Default password (hashed)
            'role' => 'user', // Default role
            'height' => $this->faker->numberBetween(150, 200), // Random height between 150 and 200 cm
            'weight' => $this->faker->numberBetween(50, 100), // Random weight between 50 and 100 kg
            'shoe_number' => $this->faker->numberBetween(36, 45), // Random shoe size
            'position' => $this->faker->randomElement(['Goalkeeper', 'Defender', 'Midfielder', 'Forward']), // Random position
            'back_number' => $this->faker->numberBetween(1, 99), // Random back number between 1 and 99
        ];
    }
}
