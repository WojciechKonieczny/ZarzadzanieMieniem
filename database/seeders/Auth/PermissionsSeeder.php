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
        * Uprawnienia od Items
        */
        $itemsIndex = Permission::create( ['name' => 'items.index'] ); // wyswietlanie
        $itemsStore = Permission::create( ['name' => 'items.store'] ); // dodawanie nowego
        $itemsEdit = Permission::create( ['name' => 'items.edit'] ); // edycja
        $itemsDestroy = Permission::create( ['name' => 'items.destroy'] ); // usuwanie

        /*
        * Uprawnienia od Kategorii
        */
        $categoriesIndex = Permission::create( ['name' => 'categories.index'] ); // wyswietlanie
        $categoriesStore = Permission::create( ['name' => 'categories.store'] ); // dodawanie nowego
        $categoriesEdit = Permission::create( ['name' => 'categories.edit'] ); // edycja
        $categoriesDestroy = Permission::create( ['name' => 'categories.destroy'] ); // usuwanie

        /*
        * Uprawnienia od itemsUsers
        */
        $itemsUsersIndex = Permission::create( ['name' => 'itemsUsers.index'] ); // wyswietlanie
        $itemsUsersStore = Permission::create( ['name' => 'itemsUsers.store'] ); // dodawanie nowego
        $itemsUsersEdit = Permission::create( ['name' => 'itemsUsers.edit'] ); // edycja
        $itemsUsersDestroy = Permission::create( ['name' => 'itemsUsers.destroy'] ); // usuwanie
        $itemsUsersIndexToMe = Permission::create( ['name' => 'itemsUsers.index_to_me'] ); // uzytkownik moze wyswietlic tylko te rzeczy, ktore sa przypisane do niego

        /*
        * Przypisywanie uprawnień do ról
        */
        $adminRole = Role::findByName( config('app.admin_role') ); 
        $adminRole->givePermissionTo([
            $logsIndex,
            $usersIndex, $usersStore, $usersEdit, $usersDestroy, $usersChangeRole, 
            $manufacturersIndex, $manufacturersStore, $manufacturersEdit, $manufacturersDestroy,
            $modelsIndex, $modelsStore, $modelsEdit, $modelsDestroy,
            $itemsIndex, $itemsStore, $itemsEdit, $itemsDestroy,
            $categoriesIndex, $categoriesStore, $categoriesEdit, $categoriesDestroy,
            $itemsUsersIndex, $itemsUsersStore, $itemsUsersEdit, $itemsUsersDestroy, $itemsUsersIndexToMe
        ]);

        $userRole = Role::findByName( config('app.user_role') );
        $userRole->givePermissionTo([
            $itemsUsersIndexToMe,
        ]);
    }

}