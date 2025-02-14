<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table("students")->insert([
        //     "nama" => "Muammar Irfan",
        //     "nim" => "F1E123040",
        //     "prodi" => "SISTEM INFORMASI",
        //     "alamat" => "Jambi",
        //     "angkatan" => 2023
        // ]);
        for($i = 0; $i < 100; $i++){
            Student::create([
                "name" => Str::random(20),
                "nim" => Str::random(9),
                "prodi" => Str::random(30),
                "alamat" => Str::random(40),
                "angkatan" => rand(2000,2023)     
            ]);
        }
        // Student::create([
        //     "name" => Str::random(20),
        //     "nim" => Str::random(9),
        //     "prodi" => Str::random(30),
        //     "alamat" => Str::random(40),
        //     "angkatan" => rand(2000,2023)
        // ]);
       
        
    }
}
