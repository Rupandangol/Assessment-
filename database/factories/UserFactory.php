<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender=['male','female'];
        $nationality=['Nepali','English'];
        $contact=['email','phone'];
        return [
            'name'=>$this->faker->name,
            'gender'=>$this->faker->randomElement($gender),
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'address'=>$this->faker->address,
            'nationality'=>$this->faker->randomElement($nationality),
            'date_of_birth'=>$this->faker->date,
            'education_background'=>$this->faker->word,
            'preferred_mode_of_contact'=>$this->faker->randomElement($contact)

        ];
    }

}
