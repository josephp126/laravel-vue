<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
            'email' => $this->faker->safeEmail,
            'email_verified_at' => $this->faker->dateTime(),
            'date_joined' => $this->faker->word,
            'guid' => $this->faker->uuid,
            'phone' => $this->faker->phoneNumber,
            'fax' => $this->faker->word,
            'website' => $this->faker->word,
            'notification_preferences' => $this->faker->text,
            'is_contact' => $this->faker->boolean,
            'is_representative' => $this->faker->boolean,
            'is_international' => $this->faker->boolean,
            'remember_token' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
