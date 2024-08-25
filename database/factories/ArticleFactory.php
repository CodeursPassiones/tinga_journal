<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'issue_id' => $this->faker->numberBetween(4, 6),
            'discipline_id' => $this->faker->numberBetween(4, 6),
            'user_id' => $this->faker->numberBetween(1, 6),
            'title' => $this->faker->word(),
            'abstract' => $this->faker->text(),
            'content' => $this->faker->text(),
            'status' => $this->faker->randomElement(['IN_REVIEW', 'PUBLISHED', 'SUBMITED', 'REJECTED']),
            // 'image_url' => $this->faker->url(),
            'publication_date' => $this->faker->date(),
        ];
    }
}
