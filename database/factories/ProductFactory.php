<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'compability' => mt_rand(1,3),
            'name' => $this->faker->sentence(3, true),
            'price' => $this->faker->numberBetween(150000, 5000000),
            'vendor' => $this->faker->sentence(2, true)
        ];
    }
}
