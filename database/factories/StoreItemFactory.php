<?php

namespace Database\Factories;

use App\Models\StoreItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StoreItemFactory extends Factory
{
    protected $model = \App\Models\StoreItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imgs = [
            'img/store/list/t-shirt.png',
            'img/store/list/long.png',
        ];

        return [
            'name' => $this->faker->word(),
            'cost' => 3999,
            'img' => $imgs[random_int(0, 1)],
        ];
    }
}
