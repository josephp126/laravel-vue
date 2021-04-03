<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'link'        => $this->faker->url,
            'summary'     => $this->faker->realText(),
            'title'       => $this->faker->jobTitle,
            'content'     => $this->faker->realText(200),
            'is_homepage' => $this->faker->boolean(80),
        ];
    }
}
