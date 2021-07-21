<?php

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
        //
        DB::table('produks')->insert([
            
            'nama_produk' => 'LAPTOP ASUS',
            'stok' => '10',
            'deskripsi' => 'BARU BELI',
            'harga' => '1000',
            'id_kategori' => '3'
        ]);
    }
}
