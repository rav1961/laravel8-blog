<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'first_name' => 'Rafal',
            'email' => 'r.rojek87@gmail.com',
            'role' => Role::ADMIN,
            'password' => bcrypt('admin'),
        ]);
    }
}
