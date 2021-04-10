<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb = 2, $asTest = true);
        return [
            'name'=> $name,
            'stug'=> Str::slug($name),
            'short-description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10,500),
            'SKU' => $this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'in_stock',
            'quantity'=> $this->faker->numberBetween(100,200),
            'image'=> 'digital_'. $this->faker->unique()->numberBetween(1,22).'.jpg',
            'category_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
