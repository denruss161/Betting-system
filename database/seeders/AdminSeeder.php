<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

=======
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> d0d2a46996dfa8836874d3195c07a7efcf51e74c;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
=======

>>>>>>> d0d2a46996dfa8836874d3195c07a7efcf51e74c;
        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin1',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password', // password
        ]);

        $admin->assignRole('admin');
<<<<<<< HEAD
=======
        $admin->referralToken()->create(['referral_token' => Str::random()]);
        $admin->deposit(10000);
>>>>>>> d0d2a46996dfa8836874d3195c07a7efcf51e74c;
    }
};
