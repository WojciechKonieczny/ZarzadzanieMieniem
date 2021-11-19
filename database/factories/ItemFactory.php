<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Category;
use App\Models\Location;
use App\Models\ModelOrName;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Item::class;

    public function definition()
    {
        return [
            'manufacturer_id' => Manufacturer::select('id')->orderByRaw("RAND()")->first()->id,
            'model_or_name_id' => ModelOrName::select('id')->orderByRaw("RAND()")->first()->id,
            'category_id' => Category::select('id')->orderByRaw('RAND()')->first()->id
        ];
    }
}
