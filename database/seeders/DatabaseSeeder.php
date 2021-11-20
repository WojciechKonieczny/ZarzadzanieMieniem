<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\LocationSeeder;
use Database\Seeders\Auth\RolesSeeder;
use Database\Seeders\Auth\UsersSeeder;
use Database\Seeders\ModelOrNameSeeder;
use Database\Seeders\ManufacturerSeeder;
use Database\Seeders\Auth\PermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(UsersSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(ModelOrNameSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
