<?php

namespace Database\Seeders;

use App\Models\Cashflow;
use Illuminate\Database\Seeder;

class CashflowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cashflow::factory()->count(5)->create();
    }
}
