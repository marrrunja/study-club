<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Product::create([
            "code" => 1,
            "name" => "Silver Queen",
            "description" => "Coklat nya manis",
            "qty" => 40,
            "price" => 15000
       ]); 
    }
}
