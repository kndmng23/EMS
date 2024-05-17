<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => fake()->randomNumber(),         
            'last_name' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->name(),
            'date_of_birth' => fake()->date(),
            'age' => fake()->numberBetween($min = 18, $max = 60),
            'sex' => fake()->randomElement(['male', 'female']),
            'civil_status' =>fake()->randomElement(['single', 'merried']),
            'email' => fake()->email(),
            'contact_no' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'position' => fake()->jobTitle(),
            'department' => fake()->randomElement(['HR','FINANCE','MARKETING']),
            'work_status' => fake()->randomElement(['Active', 'Inactive']),
            'work_type' => fake()->randomElement(['Part Time', 'Full Time']),
        ];
    }
}
