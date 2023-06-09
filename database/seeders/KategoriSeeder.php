<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            'Chopper',
            'British',
            'CafeRacer'
        ];

        foreach($kategori as $jenis) {
            Kategori::create([
                'kategori' => $jenis
        ]);
        }
    }
}
