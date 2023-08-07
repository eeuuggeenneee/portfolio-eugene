<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'video_presentation' => 'https://www.youtube.com/watch?v=' . $this->faker->randomElement([
                '3tmd-ClpJxA',
                'dQw4w9WgXcQ',
                'kXYiU_JCYtU',
                // more video IDs...
            ]),
            'name' => $this->faker->name(),
            'image_1' => $this->faker->imageUrl(),
            'image_2' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'date_created' => $this->faker->dateTime,
            'live_link' => $this->faker->url,
        ];
    }
}
