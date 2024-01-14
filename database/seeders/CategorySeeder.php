<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Category::create([
            'name' => 'Computer',
            'created_by' => rand(1,2),
            'updated_by' => rand(1,2),
        ]);
        Category::create([
            'name' => 'Phone',
            'created_by' => rand(1,2),
            'updated_by' => rand(1,2),
        ]);
        Category::create([
            'name' => 'Watch',
            'created_by' => rand(1,2),
            'updated_by' => rand(1,2),
        ]);
    }
}
