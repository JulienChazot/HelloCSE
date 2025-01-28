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
        Administrator::create([
            'email' => 'admin@example.com',
            'name' => 'Admin User',
            'password' => bcrypt('password123'),
        ]);
    }
}
