<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        // Seeder sont des exemples des données qu'on peut entrer en BDD, ils servent pour mettre despremières  données depuis une requete SQL
        // Ce Seeder informe qu'on veut créer 10 profil fictif depuis le ProfileFactory
        Profile::factory()->count(10)->create();
    }
}