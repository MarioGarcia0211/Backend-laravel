<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Register>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'date' => $this->faker->date(),
            'amount' => $this->faker->randomDigitNot(0),
            'fkprofiletaqui' => $this->faker->randomElement(['5', '6' ,'7']),
            'fkprofileturis' => $this->faker->randomElement(['3', '4'])
        ];
    }
}
