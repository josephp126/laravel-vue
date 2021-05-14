<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Article;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'link' => $this->faker->word,
            'content' => $this->faker->paragraphs(3, true),
            'title' => $this->faker->sentence(4),
            'summary' => $this->faker->text,
            'is_homepage' => $this->faker->word,
        ];
    }
}
