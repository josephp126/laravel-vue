<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\News;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug,
            'summary' => $this->faker->text,
            'content' => $this->faker->paragraphs(3, true),
            'is_homepage' => $this->faker->word,
        ];
    }
}
