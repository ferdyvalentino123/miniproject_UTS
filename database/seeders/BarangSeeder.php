<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
            'namabarang' => 'Gitar',
            'hargabarang' => '6000000',
            'deskripsibarang' => 'Alat Musik',
            'satuan_id' => '1'
            ],
            ]);
    }
}
