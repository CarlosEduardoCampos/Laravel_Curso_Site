<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use function Laravel\Prompts\password;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'admin',
            'lastName'  => 'admin',
            'email'     => 'contato@rodrigo.com',
            'password'  => bcrypt('12345678'),
        ]);
    }
}
