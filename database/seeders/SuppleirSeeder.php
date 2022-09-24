<?php

namespace Database\Seeders;

use App\Models\Suppleir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppleirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suppleir::factory()->count(5)->create();
    }
}
