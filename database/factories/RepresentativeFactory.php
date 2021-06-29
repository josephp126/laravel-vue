<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Representative;

class RepresentativeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Representative::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'website' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'fax' => $this->faker->word,
            'is_international' => $this->faker->boolean,
        ];
    }
}
