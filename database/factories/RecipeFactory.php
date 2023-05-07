<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'author' => $this->faker->firstNameMale(),
            'description' => $this->faker->sentence(2),
            'time'=>$this->faker->numberBetween(5, 60),
            'ingredients' => $this->faker->sentence(1),
            'directions' => $this->faker->paragraph(4),
        ];
    }
}
