<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Orders_Detail;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Orders_DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders_Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $orders = Order::pluck("id")->toArray();
        $products = Product::pluck("id")->toArray();
        return [
            "quantity"=>$this->faker->numberBetween(1,50),
            "orders_id"=>$this->faker->randomElement($orders),
            "products_id"=>$this->faker->randomElement($products)
        ];
    }
}
