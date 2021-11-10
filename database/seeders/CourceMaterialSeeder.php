<?php

namespace Database\Seeders;

use App\Models\CourceMaterial;
use Illuminate\Database\Seeder;

class CourceMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourceMaterial::factory()->count(5)->create();
    }
}
