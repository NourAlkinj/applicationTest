<?php

namespace Database\Seeders;

use \App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        $user1 = User::create([
            'name' => 'Clauda 1',
            'email' => 'klodaalrakkad@gmail.com',
            'first_name' => 'Clauda',
            'middle_name' => 'Wakeel',
            'last_name' => 'Al-Rakkad',
            'phone' => '345678',
            'mobile' => '3212',
            'address' => 'Address',
            'notes' => 'notes',
        ]);
    }
}
