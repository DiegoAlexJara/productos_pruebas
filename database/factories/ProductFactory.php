<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{   
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'descripcion' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'category' => $this->faker->word(),
            'marca' => $this->faker->word(),
        ];
    }
}
