<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternatives')->insert([
            'kode_alternatif' => 'A1',
            'nama_alternatif' => 'Hada Labo Gokujyun Ultimate Moisturizing Lotion',
            'keterangan_produk' => 'Hada Labo Gokujyun Ultimate Moisturizing Lotion adalah produk perawatan kulit yang terkenal dari Jepang yang dikenal karena sifat hidrasinya yang intens. Lotion ini mengandung kombinasi unik hyaluronic acid yang melembapkan kulit secara mendalam dan membantu menjaga kelembaban, sehingga menghasilkan kulit yang kenyal dan lembut. Lotion Hada Labo memiliki tekstur ringan dan cair yang cepat menyerap ke dalam kulit tanpa meninggalkan residu berminyak. Lotion Hada Labo cocok untuk semua jenis kulit, termasuk kulit sensitif, dan membantu meningkatkan kelembaban skin barrier, menjadikan kulit halus, lembap, dan segar. Harga pelembab ini adalah Rp 36.000 untuk ukuran 100ml.',
        ]);

        DB::table('alternatives')->insert([
            'kode_alternatif' => 'A2',
            'nama_alternatif' => 'Skintific 5x Ceramide Barrier Repair Moisturize Gel',
            'keterangan_produk' => 'Skintific 5x Ceramide Barrier Repair Moisturize Gel adalah pelembap khusus yang fokus pada perbaikan dan penguatan kelembaban skin barrier alami kulit. Produk ini mengandung konsentrasi tinggi ceramide, yang merupakan lipid penting yang ditemukan pada kulit yang membantu menjaga kelembaban dan melindungi dari iritan eksternal. Pelembap berbasis gel ini memiliki tekstur ringan dan menyegarkan yang cepat diserap ke dalam kulit, menjadikannya lembap dan kenyal tanpa meninggalkan residu lengket. Produk ini cocok untuk semua jenis kulit, termasuk kulit sensitif, dan membantu meningkatkan elastisitas kulit serta menjaga keseimbangan kelembaban yang sehat. Harga pelembab ini adalah Rp 55.000 untuk ukuran 6gr.',
        ]);
        
        DB::table('alternatives')->insert([
            'kode_alternatif' => 'A3',
            'nama_alternatif' => 'Safi Dermasafe Soothe & Hydrate Day Moisturizer',
            'keterangan_produk' => 'Safi Dermasafe Soothe & Hydrate Day Moisturizer adalah pelembap ringan yang dirancang untuk menenangkan dan melembapkan kulit. Pelembap ini diformulasikan dengan campuran bahan alami seperti lidah buaya, chamomile, dan Vitamin E, yang bekerja sama untuk menenangkan dan memberi nutrisi pada kulit sensitif. Pelembap ini memiliki tekstur ringan dan tidak berminyak yang mudah diserap, memberikan kelembapan tahan lama tanpa menyumbat pori-pori. Pelembap Safi Dermasafe juga mengandung SPF 30 untuk melindungi kulit dari sinar UV berbahaya. Pelembap Safi Dermasafe cocok digunakan setiap hari dan membantu menjaga kulit tetap sehat dan lembap. Harga pelembab ini adalah Rp 129.000 untuk ukuran 50gr.',
        ]);

        DB::table('alternatives')->insert([
            'kode_alternatif' => 'A4',
            'nama_alternatif' => 'Cetaphil Moisturizing Cream',
            'keterangan_produk' => 'Cetaphil Moisturizing Cream adalah produk terpercaya yang direkomendasikan oleh dokter kulit untuk kulit kering dan sensitif. Krim ini diformulasikan dengan campuran emolien dan humektan yang efektif melembapkan dan mengembalikan penghalang kelembaban alami kulit. Krim ini memiliki tekstur kaya dan creamy yang memberikan hidrasi intens dan membantu menenangkan serta melembutkan kulit yang kering dan kasar. Formula non-berminyak ini bebas pewangi dan cocok untuk semua jenis kulit, termasuk kulit sensitif. Cetaphil Moisturizing Cream dapat digunakan di wajah dan tubuh, memberikan kelembapan tahan lama dan menjadikan kulit terasa halus dan terhidrasi. Harga pelembab ini adalah Rp 259.000 untuk ukuran 100gr.',
        ]);
        
        DB::table('alternatives')->insert([
            'kode_alternatif' => 'A5',
            'nama_alternatif' => 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator',
            'keterangan_produk' => 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator adalah gel-cream yang memberikan kelembapan instan dan tahan lama pada kulit. Produk ini diformulasikan dengan Teknologi Auto-Replenishing yang membantu kulit menciptakan sumber air internalnya sendiri, memberikan hidrasi sepanjang hari. Pelembap ini bebas minyak dan memiliki tekstur ringan, sehingga cocok untuk semua jenis kulit, termasuk kulit sensitif. Ia memberikan hidrasi yang menyegarkan, menjadikan kulit kenyal, halus, dan segar. CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator dapat digunakan sebagai pelembap sehari-hari atau sebagai masker hidrasi untuk memberikan kelembapan ekstra. Harga pelembab ini adalah Rp 270.000 untuk ukuran 15ml.',
        ]);
    }
}
