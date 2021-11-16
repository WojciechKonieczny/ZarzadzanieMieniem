<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder {
    
    public function run() {

        // czyścimy cache, ponieważ uprawnienia są cacheowane
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        /*
        *  Uprawnienia od logów (log-viewer)
        */
        $logsIndex = Permission::create( ['name' => 'log-viewer.index'] );

        /*
        * Uprawnienia od użytkowników
        */
        $usersIndex = Permission::create( ['name' => 'users.index'] ); // wyswietlanie
        $usersStore = Permission::create( ['name' => 'users.store'] ); // dodawanie nowego
        $usersEdit = Permission::create( ['name' => 'users.edit'] ); // edycja
        $usersDestroy = Permission::create( ['name' => 'users.destroy'] ); // usuwanie
        $usersChangeRole = Permission::create( ['name' => 'users.change_role'] ); // kto może zmieniać role

        /*
        * Uprawnienia od Producentów
        */
        $manufacturersIndex = Permission::create( ['name' => 'manufacturers.index'] ); // wyswietlanie
        $manufacturersStore = Permission::create( ['name' => 'manufacturers.store'] ); // dodawanie nowego
        $manufacturersEdit = Permission::create( ['name' => 'manufacturers.edit'] ); // edycja
        $manufacturersDestroy = Permission::create( ['name' => 'manufacturers.destroy'] ); // usuwanie

        /*
        * Uprawnienia od Modeli
        */
        $modelsIndex = Permission::create( ['name' => 'models.index'] ); // wyswietlanie
        $modelsStore = Permission::create( ['name' => 'models.store'] ); // dodawanie nowego
        $modelsEdit = Permission::create( ['name' => 'models.edit'] ); // edycja
        $modelsDestroy = Permission::create( ['name' => 'models.destroy'] ); // usuwanie

        /*
        * Uprawnienia od Kategorii
        */
        $categoriesIndex = Permission::create( ['name' => 'categories.index'] ); // wyswietlanie
        $categoriesStore = Permission::create( ['name' => 'categories.store'] ); // dodawanie nowego
        $categoriesEdit = Permission::create( ['name' => 'categories.edit'] ); // edycja
        $categoriesDestroy = Permission::create( ['name' => 'categories.destroy'] ); // usuwanie

        /*
        * Uprawnienia od Lokalizacji
        */
        $locationsIndex = Permission::create( ['name' => 'locations.index'] ); // wyswietlanie
        $locationsStore = Permission::create( ['name' => 'locations.store'] ); // dodawanie nowego
        $locationsEdit = Permission::create( ['name' => 'locations.edit'] ); // edycja
        $locationsDestroy = Permission::create( ['name' => 'locations.destroy'] ); // usuwanie

        /*
        * Uprawnienia od ThingsUsers
        */
        $thingsUsersIndex = Permission::create( ['name' => 'thingsUsers.index'] ); // wyswietlanie
        $thingsUsersStore = Permission::create( ['name' => 'thingsUsers.store'] ); // dodawanie nowego
        $thingsUsersEdit = Permission::create( ['name' => 'thingsUsers.edit'] ); // edycja
        $thingsUsersDestroy = Permission::create( ['name' => 'thingsUsers.destroy'] ); // usuwanie
        $thingsUsersIndexToMe = Permission::create( ['name' => 'thingsUsers.index_to_me'] ); // uzytkownik moze wyswietlic tylko te rzeczy, ktore sa przypisane do niego

        /*
        * Przypisywanie uprawnień do ról
        */
        $adminRole = Role::findByName( config('app.admin_role') ); 
        $adminRole->givePermissionTo([
            $logsIndex,
            $usersIndex, $usersStore, $usersEdit, $usersDestroy, $usersChangeRole, 
            $manufacturersIndex, $manufacturersStore, $manufacturersEdit, $manufacturersDestroy,
            $modelsIndex, $modelsStore, $modelsEdit, $modelsDestroy,
            $categoriesIndex, $categoriesStore, $categoriesEdit, $categoriesDestroy,
            $locationsIndex, $locationsStore, $locationsEdit, $locationsDestroy,
            $thingsUsersIndex, $thingsUsersStore, $thingsUsersEdit, $thingsUsersDestroy, $thingsUsersIndexToMe
        ]);

        $userRole = Role::findByName( config('app.user_role') );
        $userRole->givePermissionTo([
            $thingsUsersIndexToMe,
        ]);
    }

}