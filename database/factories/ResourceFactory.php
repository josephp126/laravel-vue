<?php

namespace Database\Factories;

use App\Models\Resource;
use App\Models\ResourceGroup;
use App\Models\ResourceType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(4),
            'filename' => $this->faker->word,
            'resource_type_id' => ResourceType::factory(),
            'resource_group_id' => ResourceGroup::factory(),
        ];
    }
}
