<?php

namespace Database\Seeders\Auth;


use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {

    // ta metoda powinna byc stworzona w kazdym seederze
    public function run() {

        $globalAdmin = User::create([
            'name' => 'admin1',
            'email' => 'admin1@localhost',
            'email_verified_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
            'password' => Hash::make( 'zaq1@WSX' )
        ]);

        $normalUser = User::create([
            'name' => 'wojtekkonieczny',
            'email' => 'user1@localhost',
            'email_verified_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
            'password' => Hash::make( 'zaq1@WSX' )
        ]);

        $globalAdmin->assignRole( config('app.admin_role') );
        $normalUser->assignRole( config('app.user_role') );

        User::factory()->count(10)->create()->each( function( $user ) {
            $user->assignRole( config('app.user_role') );
        });
    }

}