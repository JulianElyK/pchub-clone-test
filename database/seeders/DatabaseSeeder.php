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
            'password' => bcrypt('12345'),
            'phone' => '081325654789'
        ]);

        Customer::create([
            'email' => 'Tinus@gmail.com',
            'name' => 'Tinus',
            'password' => bcrypt('12345'),
            'phone' => '081325654789'
        ]);

        Customer::create([
            'email' => 'dave@gmail.com',
            'name' => 'Dave',
            'password' => bcrypt('12345'),
            'phone' => '081325654789'
        ]);

        //Customer::factory(5)->create();

        Order::create([
            'customer_id' => '1',
            'total_price' => '8900000', 
        ]);

        Order::create([
            'customer_id' => '2',
            'total_price' => '1500000', 
        ]);

        Order::create([
            'customer_id' => '3',
            'total_price' => '1500000', 
        ]);

        Order::create([
            'customer_id' => '1',
            'total_price' => '1500000', 
        ]);

        Order::create([
            'customer_id' => '3',
            'total_price' => '1500000', 
        ]);


        //Order::factory(10)->create();

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '1'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '2'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '3'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '4'
        ]);

        Payment::create([
            'amount' => '1500000',
            'method' => 'alfamart',
            'order_id' => '5'
        ]);

        

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '1'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '2'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '3'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '4'
        ]);

        Shipment::create([
            'address' => 'kopo permain',
            'type' => 'Ninja Express',
            'ship_date' => '2020-11-15 13:15:12',
            'arrival_date' => '2020-11-20 13:15:12',
            'order_id' => '5'
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'Ram 5 GB Kingston',
            'price' => '450000',
            'image' => 'Kingston 5 GB RAM.png',
            'vendor' => 'Kingston Indonesia',
            'category' => 'RAM',
            'description' => 'Kingston DDR2 Memori PC [5 GB/PC-6400] merupakan memory RAM PC berkapasitas 5 GB dengan chipset PC2-6400.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'Processor Intel I5 11th Gen',
            'price' => '8000000',
            'image' => 'Intel I5 11th Gen.png',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Prosesor',
            'description' => 'The 11th Generation Intel Core i5-1135G7 is a typical 2020 mid-range laptop processor.',
            'stock' => 200
        ]);


        DetailOrder::create([
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => 2,
            'price' => 900000
        ]);

        DetailOrder::create([
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => 2,
            'price' => 8000000
        ]);

        DetailOrder::factory(20)->create();



        Admin::create([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => '12345',
            'admin_code' => 1
        ]);

    }
}
