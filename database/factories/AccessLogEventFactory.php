<?php

namespace Database\Factories;

use App\Models\AccessLogEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccessLogEventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AccessLogEvent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
