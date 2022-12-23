<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    protected $model = \App\Models\News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imgs = [
            'img/news/tour.jpg',
            'img/news/angel.jpg',
            'img/news/tv.jpg',
        ];

        return [
            'title' => $this->faker->word(),
            'tag' => $this->faker->word(),
            'body' => $this->faker->paragraph,
            'img' => $imgs[random_int(0, 2)],
            'date' => now(),
            'url' => ''
        ];
    }
}
