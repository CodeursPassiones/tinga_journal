<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mime_type' => $this->faker->mimeType(),
            'path' => $this->faker->filePath(),
            'url' => $this->faker->url(),
            'name' => $this->faker->filePath(),
            'description' => $this->faker->text(),
            'article_id' => 1,
        ];
    }
}
