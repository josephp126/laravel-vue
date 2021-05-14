<?php

namespace Database\Factories;

use App\Models\AccessLog;
use App\Models\AccessLogEvent;
use App\Models\Entity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccessLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AccessLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'access_log_event_id' => AccessLogEvent::factory(),
            'entity_id' => Entity::factory(),
            'accessable' => $this->faker->word,
        ];
    }
}
