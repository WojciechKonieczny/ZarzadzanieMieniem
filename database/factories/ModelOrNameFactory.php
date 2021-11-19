<?php

namespace Database\Factories;

use App\Models\ModelOrName;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelOrNameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = ModelOrName::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->unique->word(50)
        ];
    }
}
