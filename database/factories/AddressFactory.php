<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address'  => $this->faker->streetAddress,
            'zip'      => $this->faker->postcode,
            'state_id' => $this->faker->numberBetween(1, 50),
            'city'     => $this->faker->city,
        ];
    }
}
