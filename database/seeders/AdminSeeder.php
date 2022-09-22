<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $admin->referralToken()->create(['referral_token' => Str::random()]);

        $admin->deposit(10000);
    }
}
