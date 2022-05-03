<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    use RefreshDatabase;
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'unique_key' => $this->faker->numberBetween(6000, 6300),
            'product_title' => $this->faker->word, 
            'product_description' => $this->faker->sentence(30, true), 
            'style' => $this->faker->hexcolor, 
            'sanmar_mainframe_color' => $this->faker->colorName, 
            'size' => $this->faker->randomElement(arrya('S', 'M', 'L', 'XL')), 
            'color_name' => $this->faker->colorName, 
            'piece_price' => $this->faker->randomFloat(2, 1, 10)
        ];
    }
}
