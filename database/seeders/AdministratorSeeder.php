<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrator;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder sont des exemples des données qu'on peut entrer en BDD, ils servent pour mettre despremières  données depuis une requete SQL
        Administrator::create([
            'email' => 'admin@example.com',
            'name' => 'Admin User',
            'password' => bcrypt('password123'),
        ]);
    }
}
