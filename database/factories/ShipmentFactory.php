<?php

namespace Database\Factories;

use App\Models\Shipment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address(),
            'type' => 'Ninja Express',
            'ship_date' => $this->faker->date(),
            'arrival_date' => $this->faker->date(),
            'order_id' => mt_rand(1, 3)
        ];
    }
}
