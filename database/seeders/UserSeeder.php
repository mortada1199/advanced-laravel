<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::factory()->create([
            'name' => 'murtada',
            'email' => 'murtada@example.com',
        
        
        ]);

        User::factory()->create([
            'name' => 'Shruti',
            'email' => 'shruti@example.com'
        ]);

        User::factory()->create([
            'name' => 'mohamed',
            'email' => 'mohamed@example.com',
            'role' => 'instructor',
        
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
        
        ]);

        User::factory()->count(10)->create();



        User::factory()->count(10)->create([
            'role' => 'instructor'
        ]);
    }
}
