<?php

namespace Database\Seeders;

use Database\Factories\HouseFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class house_scheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=5;$i++){
            DB::table('house_schedule')->insert([
                'house_id' => rand(1,5),
                'schedule_id' => rand(1,5),
            ]);
        }
    }
}
