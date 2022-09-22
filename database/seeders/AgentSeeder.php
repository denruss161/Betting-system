<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $agent = User::create([
            'name' => 'agent',
            'username' => 'agent1',
            'email' => 'agent@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password', // password
        ]);

        // $agents = User::factory(5)->create();
            $agent->assignRole('agent');
    }
}
