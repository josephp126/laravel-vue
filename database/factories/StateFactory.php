<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = State::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                  => $this->faker->name,
            'standard_abbreviation' => $this->faker->word,
            'postal_abbreviation'   => $this->faker->word,
            'capital_city'          => $this->faker->word,
            'country_id'            => 1,
        ];
    }
}
