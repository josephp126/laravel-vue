<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'imageable' => $this->faker->word,
            'mime_type' => $this->faker->word,
            'title' => $this->faker->sentence(4),
            'code_number' => $this->faker->word,
            'hash' => $this->faker->word,
        ];
    }
}
