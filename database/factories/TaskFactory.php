<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(1, 3)),
            'desc' => collect($this->faker->paragraphs(rand(4, 8)))
                ->map((fn ($p) => "<p>$p</p>"))
                ->join('')
        ];
    }
}
