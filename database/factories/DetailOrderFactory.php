<?php

namespace Database\Factories;

use App\Models\DetailOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => mt_rand(1, 3),
            'product_id' => mt_rand(1, 10),
            'quantity' => $this->faker->numberBetween(1, 50),
            'price' => $this->faker->numberBetween(150000, 10000000)
        ];
    }
}
