<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\ItemRequest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        ItemRequest::create([
            'category' => 'I - Inventaris Kantor',
            'itemcode' => '01 - Komputer',
            'name' => 'Mac PC',
            'user' => 'Muhammad Rifaldi',
            'description' => 'Untuk hedon',
            'isFurniture' => 0,
            'isHistory' => 1,
            'status' => 0,
            'date' => '2023-09-14'
        ]);

        ItemRequest::create([
            'category' => 'I - Inventaris Kantor',
            'itemcode' => '01 - Komputer',
            'name' => 'PC Dell Latitude',
            'user' => 'Muhamad Hanafi',
            'description' => 'Untuk keperluan office',
            'isFurniture' => 0,
            'isHistory' => 0,
            'status' => 1,
            'date' => '2023-09-12'
        ]);



        // Itemcode Inventaris
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'Komputer',
            'isFurniture' => 0
        ]);
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'Server',
            'isFurniture' => 0
        ]);
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'Notebook',
            'isFurniture' => 0
        ]);
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'Handphone',
            'isFurniture' => 0
        ]);
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'Tablet',
            'isFurniture' => 0
        ]);
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'Laptop',
            'isFurniture' => 0
        ]);
        Item::create([
            'kodeAset' => '02',
            'jenisAset' => 'Printer',
            'isFurniture' => 0
        ]);


        // Itemcode Furniture
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'Meja',
            'isFurniture' => 1
        ]);
        Item::create([
            'kodeAset' => '01',
            'jenisAset' => 'ID Tower',
            'isFurniture' => 1
        ]);
        Item::create([
            'kodeAset' => '02',
            'jenisAset' => 'Kursi',
            'isFurniture' => 1
        ]);
        Item::create([
            'kodeAset' => '03',
            'jenisAset' => 'Sofa',
            'isFurniture' => 1
        ]);


    }
}
