<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        // Créer 10 profils fictifs
        Profile::factory()->count(10)->create();
    }
}