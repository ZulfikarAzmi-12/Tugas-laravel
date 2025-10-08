<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Guardian;
use App\Models\Classroom;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
       Guardian:: factory(50)->create();
    

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Classroom::factory(4)
            ->hasStudent(5)
            ->create();
    }
}
