<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder {

    public function run() {
        
        // czyścimy cache, ponieważ uprawnienia są cacheowane
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /*
        * Stworzenie ról
        */
        $admin = Role::create( ['name' => config('app.admin_role')] );
        $user = Role::create( ['name' => config('app.user_role')] );
    }

}