<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text,
            'link' => $this->faker->word,
            'code' => $this->faker->word,
            'more_info' => $this->faker->word,
            'subtitle' => $this->faker->word,
            'title' => $this->faker->sentence(4),
        ];
    }
}
