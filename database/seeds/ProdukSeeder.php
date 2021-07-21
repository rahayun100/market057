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
            
            'nama_produk' => '',
            'stok' => '',
            'deskripsi' => '',
            'harga' => '',
            'id_kategori' => ''
        ]);
    }
}
