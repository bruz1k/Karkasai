<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrdersUsers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersUsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrdersUsers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $orders = Order::pluck("id")->toArray();
        $users = User::pluck("id")->toArray();
        return [
            "orders_id"=>$this->faker->randomElement($orders),
            "users_id"=>$this->faker->randomElement($users)
        ];
    }
}
