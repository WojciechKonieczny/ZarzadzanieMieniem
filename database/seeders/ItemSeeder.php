<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    

        Item::factory()->count(150)->create();

        for($i = 0; $i < 750; $i ++) {
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);

                $startDate = strtotime(date('2012-01-01'));
                $endInStartDateRand = strtotime(date('2017-12-31'));
                $randStartDate = rand($startDate, $endInStartDateRand);
                $today = strtotime(date('Y-m-d'));
                $randDateEnd = rand($randStartDate , $today);
                $randDateEnd2 = rand($randStartDate , $today);

                $randomString = '';
                $randomLength = rand(6,10);

                for ($j = 0; $j < $randomLength; $j++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }

                DB::table('item_user')->insert([
                    'item_id' => rand(1,150),
                    'user_id' => User::select('id')->orderByRaw("RAND()")->first()->id,
                    'serial_number' => $randomString,
                    'purcharse_date' => date('Y-m-d', $randStartDate),
                    'warranty_end' => date('Y-m-d', $randDateEnd),
                    'assignment_date' => date('Y-m-d', $randDateEnd2)
                ]);
        }
    }
}
