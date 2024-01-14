<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Dell',
            'created_by' => rand(1,2),
            'updated_by' => rand(1,2),
        ]);
        Brand::create([
            'name' => 'Samsung',
            'created_by' => rand(1,2),
            'updated_by' => rand(1,2),
        ]);
        Brand::create([
            'name' => 'Apple',
            'created_by' => rand(1,2),
            'updated_by' => rand(1,2),
        ]);
    }
}
