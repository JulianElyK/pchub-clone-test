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
            'name' => 'Ram 5 GB Kingston',
            'price' => '450000',
            'image' => 'product-images/Kingston 5 GB RAM.png',
            'vendor' => 'Kingston Indonesia',
            'category' => 'RAM',
            'description' => 'Kingston DDR2 Memori PC [5 GB/PC-6400] merupakan memory RAM PC berkapasitas 5 GB dengan chipset PC2-6400.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '0',
            'name' => 'Custom PC',
            'price' => '0',
            'vendor' => '-',
            'category' => '-',
            'description' => '-',
            'stock' => 0
        ]);
        Product::create([
            'compability' => '1',
            'name' => 'Processor Intel I5 11th Gen',
            'price' => '8000000',
            'image' => 'product-images/Intel I5 11th Gen.png',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Processor',
            'description' => 'The 11th Generation Intel Core i5-1135G7 is a typical 2020 mid-range laptop processor.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'GIGABYTE GEFORCE RTX 3060 8GB',
            'price' => '15000000',
            'image' => 'product-images/GIGABYTE GEFORCE RTX 3060 8GB.jpg',
            'vendor' => 'NVIDIA',
            'category' => 'VGA',
            'description' => 'The RTX 3060 lets you play the latest games using the power of Ampere, NVIDIAs 2nd generation RTX architecture.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'Cooler Master MasterBox 540',
            'price' => '1440000',
            'image' => 'product-images/Cooler Master MasterBox 540.png',
            'vendor' => 'Cooler Master',
            'category' => 'Case',
            'description' => 'A vivid, iridescent design spans the entire front panel of the MasterBox 540. Customizable ARGB strips radiate behind the transparent façade for a stunning display of light.',
            'stock' => 50
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'HYPERX FURY RGB DDR4 2X8GB',
            'price' => '15000000',
            'image' => 'product-images/HYPERX FURY RGB DDR4 2X8GB.jpg',
            'vendor' => 'Kingston Indonesia',
            'category' => 'RAM',
            'description' => 'HyperX Fury Beast KF432C16BBAK2/16 is a kit of two 1G x 64-bit (8GB) DDR4-3200 CL16 SDRAM (Synchronous DRAM) 1Rx8.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'Intel Core i5-9400F',
            'price' => '2300000',
            'image' => 'product-images/Intel Core i5-9400F.jpg',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Processor',
            'description' => 'The Core i5-9400F processor from Intel has a 2.9 GHz base clock speed and a 4.1 GHz maximum boost speed.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'Intel Core i5-10400F',
            'price' => '2400000',
            'image' => 'product-images/Intel Core i5-10400F.jpg',
            'vendor' => 'Intel Surya Indonesia',
            'category' => 'Processor',
            'description' => 'The Intel Core i5-10400F is a mid-range processor for desktops with six cores based on the Comet Lake architecture.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'MasterFan MF120 Prismatic',
            'price' => '935000',
            'image' => 'product-images/MasterFan MF120 Prismatic.png',
            'vendor' => 'Cooler Master Indonesia',
            'category' => 'Fan',
            'description' => 'It features a tri-loop Addressable RGB lighting with distinctive crystallization on both sides.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'MASTERLIQUID ML240L',
            'price' => '1141000',
            'image' => 'product-images/MASTERLIQUID ML240L.jpg',
            'vendor' => 'Cooler Master Indonesia',
            'category' => 'Fan',
            'description' => 'New Generation Dual Chamber Pump, Larger Radiator Surface Area, New SickleFlow 120 RGB, Reinforced Seal for Anti-leak Prevention.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'MWE Gold 850 - V2 Full Modular',
            'price' => '2007000',
            'image' => 'product-images/MWE Gold 850 - V2 Full Modular.jpg',
            'vendor' => 'Cooler Master Indonesia',
            'category' => 'PSU',
            'description' => 'The MWE Gold - V2 (Full Modular) is the next step in the evolution of Cooler Masters entry level 80 PLUS Gold power supply unit line.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'RAZER RAPTOR 27',
            'price' => '17000000',
            'image' => 'product-images/RAZER RAPTOR 27.png',
            'vendor' => 'Razer',
            'category' => 'Monitor',
            'description' => 'Razer Raptor is now faster than ever with up to 165Hz refresh rate and new THX® Certified visual clarity.',
            'stock' => 150
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'ROG MAXIMUS XI HERO',
            'price' => '6000000',
            'image' => 'product-images/ROG MAXIMUS XI HERO.jpg',
            'vendor' => 'Asus',
            'category' => 'Motherboard',
            'description' => 'Intel Z390 ATX Gaming motherboard with M.2 heatsink, Aura Sync RGB LED, DDR4 4400MHz, dual M.2, SATA 6Gb/s, and USB 3.1 Gen 2',
            'stock' => 150
        ]);

        Product::create([
            'compability' => '2',
            'name' => 'SEAGATE BARRACUDA 120 SSD 1TB',
            'price' => '2000000',
            'image' => 'product-images/SEAGATE BARRACUDA 120 SSD 1TB.jpg',
            'vendor' => 'Seagate',
            'category' => 'SSD',
            'description' => 'BarraCuda solid state drives are perfect for ultra thin and ultra small laptops, mini PCs, and desktop PCs that need next-level SSD speed for accelerated applications and multitasking.',
            'stock' => 150
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'RAZER TOMAHAWK GAMING CHASSIS',
            'price' => '3600000',
            'image' => 'product-images/RAZER TOMAHAWK GAMING CHASSIS.jpg',
            'vendor' => 'Razer',
            'category' => 'Case',
            'description' => 'Mid-tower ATX Gaming Chassis with Razer Chroma RGB, Dual-sided tempered glass swivel doors, Powered by Razer Chroma™ RGB, Ventilated top panel and dust filters',
            'stock' => 50
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'Hardisk Seagate 1TB SATA 35 PC',
            'price' => '475000',
            'image' => 'product-images/Hardisk_Seagate_1_TB_SATA_35_PC.jpg',
            'vendor' => 'Seagate',
            'category' => 'Hard Disk',
            'description' => 'HDD kuat tahan banting!!!',
            'stock' => 100
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'RAZER BASILISK V3',
            'price' => '1150000',
            'image' => 'product-images/RAZER BASILISK V3.jpg',
            'vendor' => 'Razer',
            'category' => 'Mouse',
            'description' => 'Highly customizable gaming mouse featuring 10+1 programmable buttons, an intelligent Razer™ HyperScroll tilt wheel, and a heavy dose of Razer Chroma™ RGB.',
            'stock' => 200
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'ROG Centurion',
            'price' => '4325000',
            'image' => 'product-images/ROG Centurion.jpg',
            'vendor' => 'Asus',
            'category' => 'Accessories',
            'description' => 'ROG Centurion true 7.1 gaming headset with 10 discrete drivers, digital microphone, Hi-Fi-grade headphone amplifier, and USB audio station',
            'stock' => 50
        ]);

        Product::create([
            'compability' => '1',
            'name' => 'RAZER ENKI - QUARTZ',
            'price' => '6400000',
            'image' => 'product-images/RAZER ENKI - QUARTZ.jpeg',
            'vendor' => 'Razer',
            'category' => 'Accessories',
            'description' => 'Through a combination of its unique 110° extended shoulder arches and 21” ultrawide seat base, the Razer Enki gaming chair ensures optimal weight distribution for long-lasting comfort during gaming marathons.',
            'stock' => 50
        ]);

        Admin::create([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => '12345',
            'admin_code' => 1
        ]);
    }
}
