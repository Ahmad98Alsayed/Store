<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Admin::factory(3)->create();
        // $this->call(UserSeeder::class);
        // Store::factory(5)->create();
        // User::factory(5)->create();
        // Category::factory(10)->create();
        // Product::factory(50)->create();
    }
}
