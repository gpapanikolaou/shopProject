<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private $categories = [
        'Electronics',
        'Clothing',
        'Home AND Garden',
        'Toys AND Games',
        'Books AND Literature',
        'Sports AND Outdoors',
        'Health AND Wellness',
        'Food AND Grocery',
        'Automotive',
        'Jewelry AND Accessories',
    ];

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement($this->categories), // You can customize category names as needed
        ];
    }
}
