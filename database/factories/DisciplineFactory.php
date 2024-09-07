<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discipline>
 */
class DisciplineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Liste de disciplines fixes
        $disciplines = [
            'Littérature',
            'Arts',
            'Biologie',
            'Histoire',
            'Géographie',
            'Anglais',
            'Français',
        ];

        return [
            'journal_id' => 1,
            'name' => $this->faker->randomElement($disciplines), // Choisir un nom au hasard parmi les disciplines
            'description' => $this->faker->text(),
        ];
    }
}
