<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoPages\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RectitudeOpen\FilamentInfoPages\Models\Page;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\RectitudeOpen\FilamentInfoPages\Models\Page>
 */
class PageFactory extends Factory
{
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            'status' => $this->faker->boolean ? 1 : 0,
        ];
    }
}
