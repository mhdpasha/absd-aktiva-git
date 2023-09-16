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

        // Request
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
        // Rejected
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
        $dataInventaris = [
            "01 - Komputer",
            "01 - Server",
            "01 - Notebook",
            "01 - Handphone",
            "01 - Tablet",
            "01 - Laptop",
            "02 - Printer",
            "02 - Scanner",
            "02 - UPS",
            "02 - Telephone",
            "02 - Modem",
            "02 - CD Raw",
            "02 - Fax",
            "02 - External Memory",
            "02 - Barcode Portable",
            "02 - HT",
            "02 - Mikrotik",
            "03 - Mesin Ketik",
            "03 - Mesin Absensi",
            "03 - Mesin Hitung Uang",
            "03 - Alat Sensor Uang",
            "03 - Mesin Label",
            "04 - Air Conditioner",
            "04 - Kipas Angin",
            "04 - Air Purifier",
            "05 - Televisi",
            "05 - VCD",
            "05 - Tape/Radio",
            "05 - Infocus",
            "05 - OHP",
            "05 - Kamera",
            "05 - CCTV",
            "05 - TOA",
            "05 - Ampli",
            "05 - SoundSystem",
            "05 - Drone",
            "05 - Alat Webinar",
            "05 - Web Cam",
            "06 - Alat Jilid",
            "06 - Tangga",
            "06 - Penghancur Kertas",
            "06 - Lampu Meja",
            "06 - Thermometer",
            "07 - Kulkas",
            "07 - Dispenser",
            "07 - Kompor Gas",
            "07 - Coffie Maker",
            "08 - Pompa Air",
            "08 - Vacum Cleaner",
            "08 - Tenda",
            "08 - Genset",
            "08 - Mesin Cuci",
            "08 - Tabung Pemadam",
            "09 - BOR",
            "09 - Gerinda",
            "10 - Perangkat Balon",
            "10 - Pohon Natal",
            "11 - Lainnya"
        ];

        foreach ($dataInventaris as $item) {
            $parts = explode(" - ", $item);
            $kodeAset = $parts[0];
            $jenisAset = $parts[1];

            Item::create([
                'kodeAset' => $kodeAset,
                'jenisAset' => $jenisAset,
                'isFurniture' => 0,
            ]);
        }

        // Itemcode Furniture
        $dataFurniture = [
            "01 - Meja",
            "01 - ID Tower",
            "02 - Kursi",
            "03 - Sofa",
            "03 - Meja Lobby",
            "03 - Meja Counter",
            "03 - Meja Kabinet",
            "04 - Almari",
            "04 - Filing Carbinet",
            "04 - Brangkas",
            "04 - Locker",
            "04 - Rak Spare Part",
            "04 - Credenza",
            "05 - Elevator",
            "06 - Sign Board",
            "06 - Papan Tulis",
            "06 - Bookshelf",
            "06 - Tirai",
            "06 - Backdrop",
            "07 - Rumput Sintetis",
            "07 - Interior Backdrop",
        ];

        foreach ($dataFurniture as $item) {
            $parts = explode(" - ", $item);
            $kodeAset = $parts[0];
            $jenisAset = $parts[1];

            Item::create([
                'kodeAset' => $kodeAset,
                'jenisAset' => $jenisAset,
                'isFurniture' => 1,
            ]);
        }


    }
}
