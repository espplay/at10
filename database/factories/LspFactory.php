<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lsp>
 */
class LspFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $lsp_name = ['Hoa quả', 'Thực phẩm hữu cơ', 'Thực phẩm khô', 'Sản phẩm nổi bật'];
        return [
            'lsp_name' => $this->faker->randomElement($lsp_name),
        ];
    }
}
