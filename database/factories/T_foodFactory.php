<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\T_food>
 */
class T_foodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->asciify('user-****'),
            'price' => fake()->shuffle('hello-world'),
            'detail' => fake()->shuffle('hello-world'),
            'price_sale'=> fake()->shuffle('hello-world'),
            'image' =>'hinh'.rand(1,4).'.png',
            'lsp_id'=>rand(1,4),
        ];
    }
}
