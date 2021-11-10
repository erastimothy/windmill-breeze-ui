<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AreaSeeder::class,
            CategorySeeder::class,
            StatusSeeder::class,
            ScheduleSeeder::class,
            UserSeeder::class,
            CourceMaterialSeeder::class,
            HouseSeeder::class,
            ReportSeeder::class,
            AttendanceSeeder::class,
            InventorySeeder::class,
            StockFlowSeeder::class,
            CashflowSeeder::class,
            house_scheduleSeeder::class,
        ]);
    }
}
