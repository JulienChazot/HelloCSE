<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    /**
     * 
     *
     * @return array
     */
    public function definition()
    {
        // On créé de faux profils afin d'enrichir la BDD, utile pour les tests
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'status' => $this->faker->randomElement(['inactive', 'pending', 'active']),
            'administrator_id' => 1,
        ];
    }
}