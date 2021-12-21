<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $products = Product::pluck("id")->toArray();
        $users = User::pluck("id")->toArray();
        return [
            "rating"=>$this->faker->numberBetween(1,5),
            "comments"=>$this->faker->paragraph(3),
            "products_id"=>$this->faker->randomElement($products),
            "users_id"=>$this->faker->randomElement($users)
        ];
    }
}
