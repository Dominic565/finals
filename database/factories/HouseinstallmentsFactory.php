<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Houseinstallments>
 */
class HouseinstallmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Housename' => $this->faker->name(),
            'Address' => $this->faker->address,
            'price' =>$this->faker->numberBetween(10,100),
        ];
    }
}
