<?php

namespace Database\Seeders\Auth;


use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {

    // ta metoda powinna byc stworzona w kazdym seederze
    public function run() {
        User::create([
            'name' => 'wojtekkonieczny',
            'email' => 'wojtek.konieczny@local',
            'email_verified_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
            'password' => Hash::make( 'zaq1@WSX' )
        ]);
    }

}