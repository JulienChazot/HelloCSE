<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    // Définir le modèle associé à la factory
    protected $model = Profile::class;

    /**
     * Définir l'état par défaut du modèle
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'status' => $this->faker->randomElement(['inactive', 'pending', 'active']),
            'administrator_id' => 1,
        ];
    }
}