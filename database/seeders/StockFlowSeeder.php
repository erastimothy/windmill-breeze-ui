<?php

namespace Database\Seeders;

use App\Models\StockFlow;
use Illuminate\Database\Seeder;

class StockFlowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StockFlow::factory()->count(5)->create();
    }
}
