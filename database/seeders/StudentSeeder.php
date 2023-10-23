<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Zé do Teste',
            'email' => 'zeteste@gmail.com',
            'celphone' => '911234567891',
            'registration_number' => 12345
        ]);
    }
}