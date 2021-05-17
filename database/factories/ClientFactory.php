<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'phone_number' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->streetAddress(),
            'nationality' => $this->faker->country(),
            'date_of_birth' => $this->faker->date(),
            'education_background' => $this->faker->text(50),
            'preferred_contact_method' => $this->faker->randomElement(['email', 'phone_number', 'none']),
        ];
    }

}
