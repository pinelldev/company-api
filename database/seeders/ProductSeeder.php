<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Suppleir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(5)->hasSuppleir(3)->hasCategory(3)->create();
    }
}
