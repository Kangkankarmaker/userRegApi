<?php

namespace Database\Factories;

use App\Models\person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name'=>$this->faker->userName,
            'user_email'=>$this->faker->safeEmail,
            'user_phone'=>$this->faker->e164PhoneNumber,
            'user_pass'=>$this->faker->password,
        ];
    }
}
