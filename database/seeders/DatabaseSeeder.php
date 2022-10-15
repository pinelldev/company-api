<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\Category::factory(3)->create();

        //  \App\Models\User::factory()->create([
        //      'name' => 'Joao Pinell',
        //      'email' => 'jpinell@netsupport.com',
        //  ]);

        CategorySeeder::class;
        SuppleirSeeder::class;
        CustomerSeeder::class;
    }
}
