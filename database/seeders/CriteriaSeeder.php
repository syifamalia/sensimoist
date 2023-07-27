<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            'kode_kriteria' => 'C1',
            'nama_kriteria' => 'Harga',
            'cost_benefit' => 'cost',
            'pertanyaan_kriteria' => 'Mahal murah harga produk tersebut menjadi pertimbangan saya dalam memilih pelembab wajah.',
        ]);

        DB::table('criterias')->insert([
            'kode_kriteria' => 'C2',
            'nama_kriteria' => 'Bentuk Kemasan',
            'cost_benefit' => 'benefit',
            'pertanyaan_kriteria' => 'Saya mempertimbangkan bentuk kemasan dalam memilih produk pelembab wajah.',
        ]);
        
        DB::table('criterias')->insert([
            'kode_kriteria' => 'C3',
            'nama_kriteria' => 'Kandungan Produk',
            'cost_benefit' => 'benefit',
            'pertanyaan_kriteria' => 'Adanya kandungan Hyaluronic Acid atau Hyaluronate atau Ceramide atau Niacinamide atau Panthenol dalam produk mempengaruhi saya dalam memilih produk pelembab wajah.',
        ]);

        DB::table('criterias')->insert([
            'kode_kriteria' => 'C4',
            'nama_kriteria' => 'Kepentingan Produk',
            'cost_benefit' => 'benefit',
            'pertanyaan_kriteria' => 'Kepentingan yang terdapat dalam produk mempengaruhi saya dalam memilih produk pelembab wajah saya.',
        ]);
        
        DB::table('criterias')->insert([
            'kode_kriteria' => 'C5',
            'nama_kriteria' => 'Tekstur Produk',
            'cost_benefit' => 'benefit',
            'pertanyaan_kriteria' => 'Saya mempertimbangkan tekstur produk dalam memilih produk pelembab wajah.',
        ]);
    }
}
