<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Shipment;
use App\Models\Product;
use App\Models\DetailOrder;
use App\Models\Admin;

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

        Customer::create([
            'email' => 'ojan@gmail.com',
            'name' => 'Ojan',
            'password' => md5('12345'),
            'phone' => '081325654789'
        ]);

        Order::create([
            'customer_id' => '1',
            'total_price' => 450000,
            'status' => 3
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'Processor Intel I5 11th Gen',
            'price' => '8000000',
            'image' => 'eNWl31nu2tyo5Fz9G8L0LUyWkFeuucw9ET5ISrZK.jpg',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Prosesor',
            'description' => 'The 11th Generation Intel Core i5-1135G7 is a typical 2020 mid-range laptop processor.',
            'stock' => 200
        ]);


        Admin::create([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => '12345',
            'admin_code' => 1
        ]);

    }
}
