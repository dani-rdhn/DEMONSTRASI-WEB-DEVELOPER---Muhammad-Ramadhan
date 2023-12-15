<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'usertype' => '0',
            'password' => bcrypt('12345678'),
        ]);
        
        User::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'usertype' => '1',
            'password' => bcrypt('12345678'),
        ]);

        $categories = [
            ['category_name' => 'Huawei'],
            ['category_name' => 'TP-Link'],
            ['category_name' => 'Netgear'],
            ['category_name' => 'ZTE'],
            ['category_name' => 'D-Link'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $this->call(ProductSeeder::class);

    }
}
