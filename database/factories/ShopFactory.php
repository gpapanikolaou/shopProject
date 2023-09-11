<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $categoryIds = Category::pluck('id')->toArray();
//        $userIds=User::pluck('id')->toArray();

        return [
            'name'=> $this->faker->unique()->company,
            'user_id' => Category::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => $this->faker->paragraph(5),
            'open_hours' => '09.00-17.00',
            'city'=> $this->faker->city(),
            'address'=> $this->faker->address()

        ];
    }
}
