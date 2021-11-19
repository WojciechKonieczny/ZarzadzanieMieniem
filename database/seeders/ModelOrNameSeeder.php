<?php

namespace Database\Seeders;

use App\Models\ModelOrName;
use Illuminate\Database\Seeder;

class ModelOrNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelOrName::factory()->count(50)->create();
    }
}
