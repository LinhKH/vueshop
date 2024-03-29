<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(7);

        return [
            'title' => $name,
            'price' => 1.2 * random_int(100, 10000),
            'quantity' => 3,
            'categroy_id' => rand(1,2),
            'brand_id' => rand(1,2),
            'description' => $this->faker->paragraphs(5, true),
        ];
    }
}
