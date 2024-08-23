<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volume>
 */
class VolumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'issn' => $this->faker->word(),
            'logo_path' => $this->faker->filePath(),

            'year' => $this->faker->year(),
            'journal_id' => $this->faker->numberBetween(1, 6),
        ];
    }
}
