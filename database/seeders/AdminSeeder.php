<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin1',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password', // password
        ]);

        $admin->assignRole('admin');
    }
}
