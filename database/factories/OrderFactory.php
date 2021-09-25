<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cart_id' => $this->faker->randomNumber(4),
            'customer_id' => $this->faker->randomNumber(4),
            'payment_type_id' => 1,
            'shipping_type_id' => 1,
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'total' => $this->faker->randomNumber(6),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }
}
