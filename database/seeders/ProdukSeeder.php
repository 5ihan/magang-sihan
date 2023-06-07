<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'nama'=> "Jarwo",
            'kategori_id' => 1,
            'contact_id' => 1,
            'harga' => 15000000,
            'foto' => 'Chopper1.jpeg',
            'type' => 'Chopper Skinny',
            'merk' => 'Scorpio',
            'km' => '3000',
            'cc' => '250',
            'warna' => 'Hijau',
            'deskripsi' => '- Surat Lengkap <br>
                            - No Mines <br>
                            - Pemakaian Saat Acara <br>
                            - Surat-Surat Lengkap <br>
                            - Pajak Hidup Sampe 2024'

        ]);

        Produk::create([
            'nama'=> "Milea",
            'kategori_id' => 2,
            'contact_id' => 1,
            'harga' => 13000000,
            'foto' => 'Chopper1.jpeg',
            'type' => 'Britsish BSA',
            'merk' => 'Tiger',
            'km' => '13000',
            'cc' => '200',
            'warna' => 'Merah',
            'deskripsi' => '- Surat Lengkap
                            - No Mines
                            - Pemakaian Harian
                            - Surat-Surat Lengkap
                            - Pajak Mati Tahun 2022'
        ]);

        Produk::create([
            'nama'=> "Koneng",
            'kategori_id' => 3,
            'contact_id' => 1,
            'harga' => 15000000,
            'foto' => 'Chopper1.jpeg',
            'type' => 'Cafe Racer',
            'merk' => 'Gl PRO',
            'km' => '17000',
            'cc' => '150',
            'warna' => 'Hijau',
            'deskripsi' => '- Surat Lengkap
                            - No Mines
                            - Pemakaian Harian
                            - Surat-Surat Lengkap
                            - Pajak Hidup Sampe 2025'
        ]);
    }
}
