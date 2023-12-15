<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;


class ProductSeeder extends Seeder
{
    public function run()
    {
        $huawei = Category::where('category_name', 'Huawei')->first();
        $tplink = Category::where('category_name', 'TP-Link')->first();
        $netgear = Category::where('category_name', 'Netgear')->first();
        $zte = Category::where('category_name', 'ZTE')->first();
        $dlink = Category::where('category_name', 'D-Link')->first();
        
        $products = [
            [
                'title' => 'Huawei E5787',
                'description' => 'Spesifikasi Umum:
                Maksimum Kecepatan Download: Hingga 300 Mbps.
                Maksimum Kecepatan Upload: Hingga 50 Mbps.
                Jumlah Pengguna yang Dapat Terhubung: Hingga 10 pengguna.
                Baterai: Kapasitas baterai yang besar untuk penggunaan jangka panjang.
                Layar: Layar sentuh untuk pengelolaan pengaturan dan status koneksi.
                Fitur Tambahan:
                Dukungan untuk koneksi 4G LTE.
                Antarmuka pengguna yang mudah digunakan.
                Port untuk pengisian daya eksternal.
                Desain portabel dan ringan.',
                'price' => 20000,
                'image' => 'storage/images/image1.png',
                'category' => $huawei->category_name,
                'quantity' => 12
            ],
            [
                'title' => 'TP-Link M7350',
                'description' => 'Spesifikasi Umum:
                Maksimum Kecepatan Download: Hingga 150 Mbps.
                Maksimum Kecepatan Upload: Hingga 50 Mbps.
                Jumlah Pengguna yang Dapat Terhubung: Hingga 10 pengguna.
                Baterai: Kapasitas baterai untuk penggunaan sepanjang hari.
                Layar: Layar OLED untuk menampilkan informasi koneksi.
                Fitur Tambahan:
                Dukungan untuk koneksi 4G LTE.
                Port microSD untuk penyimpanan eksternal.
                Desain portabel dan ringan.',
                'price' => 25000,
                'image' => 'storage/images/image2.png',
                'category' => $tplink->category_name,
                'quantity' => 12
            ],
            [
                'title' => 'Netgear Nighthawk M1',
                'description' => 'Spesifikasi Umum:
                Maksimum Kecepatan Download: Hingga 1 Gbps.
                Maksimum Kecepatan Upload: Hingga 150 Mbps.
                Jumlah Pengguna yang Dapat Terhubung: Hingga 20 pengguna.
                Baterai: Baterai daya tinggi untuk penggunaan yang intensif.
                Layar: Layar warna untuk navigasi dan informasi koneksi.
                Fitur Tambahan:
                Dukungan untuk koneksi 4G LTE.
                Antena eksternal untuk peningkatan sinyal.
                Port Ethernet untuk koneksi kabel.
                Fungsionalitas sebagai hotspot mobil.',
                'price' => 30000,
                'image' => 'storage/images/image3.png',
                'category' => $netgear->category_name,
                'quantity' => 12
            ],
            [
                'title' => 'ZTE MF920',
                'description' => 'Spesifikasi Umum:
                Maksimum Kecepatan Download: Hingga 150 Mbps.
                Maksimum Kecepatan Upload: Hingga 50 Mbps.
                Jumlah Pengguna yang Dapat Terhubung: Hingga 8 pengguna.
                Baterai: Baterai daya tinggi untuk penggunaan sepanjang hari.
                Layar: Layar untuk menampilkan informasi koneksi.
                Fitur Tambahan:
                Dukungan untuk koneksi 4G LTE.
                Port microSD untuk penyimpanan eksternal.
                Desain portabel dan ringan.',
                'price' => 20000,
                'image' => 'storage/images/image4.png',
                'category' => $zte->category_name,
                'quantity' => 12
            ],
            [
                'title' => 'D-Link DWR-932',
                'description' => 'Spesifikasi Umum:
                Maksimum Kecepatan Download: Hingga 150 Mbps.
                Maksimum Kecepatan Upload: Hingga 50 Mbps.
                Jumlah Pengguna yang Dapat Terhubung: Hingga 10 pengguna.
                Baterai: Baterai daya tinggi untuk penggunaan sepanjang hari.
                Layar: Layar untuk menampilkan informasi koneksi.
                Fitur Tambahan:
                Dukungan untuk koneksi 4G LTE.
                Port microSD untuk penyimpanan eksternal.
                Desain portabel dan ringan.',
                'price' => 30000,
                'image' => 'storage/images/image5.png',
                'category' => $dlink->category_name,
                'quantity' => 12
            ],
            // Add more products as needed
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
