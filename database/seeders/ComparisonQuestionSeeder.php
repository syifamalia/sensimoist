<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComparisonQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ALTERNATIF 1
        DB::table('comparison_questions')->insert([
            'alternative_id' => '1',
            'criteria_id' => '1',
            'pertanyaan' => 'Untuk sebuah pelembab wajah dengan harga Rp 36.000 dalam ukuran 100ml menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '1',
            'criteria_id' => '2',
            'pertanyaan' => 'Saya mempertimbangkan bentuk kemasan botol dengan tutup flip-top dalam memilih produk pelembab wajah.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '1',
            'criteria_id' => '3',
            'pertanyaan' => 'Kandungan Hyaluronic Acid yang terdapat dalam produk Hada Labo Gokujyun Ultimate Moisturizing Lotion menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '1',
            'criteria_id' => '4',
            'pertanyaan' => 'Hada Labo Gokujyun Ultimate Moisturizing Lotion dapat membantu menjaga kelembapan kulit sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '1',
            'criteria_id' => '5',
            'pertanyaan' => 'Hada Labo Gokujyun Ultimate Moisturizing Lotion memiliki tekstur yang ringan, tidak lengket dan mudah menyerap ke dalam kulit sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);

        // ALTERNATIF 2
        DB::table('comparison_questions')->insert([
            'alternative_id' => '2',
            'criteria_id' => '1',
            'pertanyaan' => 'Untuk sebuah pelembab wajah dengan harga Rp 55.000 dan berat produk 6gr menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '2',
            'criteria_id' => '2',
            'pertanyaan' => 'Saya mempertimbangkan bentuk kemasan pot cream atau jar berukuran 6gr dalam memilih produk pelembab wajah.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '2',
            'criteria_id' => '3',
            'pertanyaan' => 'Kandungan Ceramide, Hyaluronic Acid, Centella Asiatica & Marine-Collagen yang terdapat dalam produk Skintific 5x Ceramide Barrier Repair Moisturize Gel menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '2',
            'criteria_id' => '4',
            'pertanyaan' => 'Skintific 5x Ceramide Barrier Repair Moisturize Gel dapat memperbaiki, melindungi dan memperkuat skin barrier serta melembabkan dan menghidrasi kulit. sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '2',
            'criteria_id' => '5',
            'pertanyaan' => 'Skintific 5x Ceramide Barrier Repair Moisturize Gel memiliki tekstur gel yang lembut dan ringan sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);

        // ALTERNATIF 3
        DB::table('comparison_questions')->insert([
            'alternative_id' => '3',
            'criteria_id' => '1',
            'pertanyaan' => 'Untuk sebuah pelembab wajah dengan harga Rp 129.000 dalam ukuran 50gr menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '3',
            'criteria_id' => '2',
            'pertanyaan' => 'Saya mempertimbangkan bentuk kemasan tube dalam memilih produk pelembab wajah.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '3',
            'criteria_id' => '3',
            'pertanyaan' => 'Kandungan Hyaluronate dan Niacinamide yang terdapat dalam produk Safi Dermasafe Soothe & Hydrate Day Moisturizer menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '3',
            'criteria_id' => '4',
            'pertanyaan' => 'Safi Dermasafe Soothe & Hydrate Day Moisturizer dapat menjaga kelembapan wajah 24 jam untuk kulit bebas iritasi dan membuat wajah cerah alami sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '3',
            'criteria_id' => '5',
            'pertanyaan' => 'Safi Dermasafe Soothe & Hydrate Day Moisturizer memiliki tekstur gel ringan sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);

        // ALTERNATIF 4
        DB::table('comparison_questions')->insert([
            'alternative_id' => '4',
            'criteria_id' => '1',
            'pertanyaan' => 'Untuk sebuah pelembab wajah dengan harga Rp 259.000 dalam ukuran 100gr menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '4',
            'criteria_id' => '2',
            'pertanyaan' => 'Saya mempertimbangkan bentuk kemasan tube berukuran 100gr dalam memilih produk pelembab wajah.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '4',
            'criteria_id' => '3',
            'pertanyaan' => 'Kandungan Panthenol dan Niacinamide yang terdapat dalam produk Cetaphil Moisturizing Cream menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '4',
            'criteria_id' => '4',
            'pertanyaan' => 'Cetaphil Moisturizing Cream dapat memberikan hidrasi yang intens dan bertahan lama hingga 48 jam serta melembapkan dan memperbaiki skin barrier dengan intens sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '4',
            'criteria_id' => '5',
            'pertanyaan' => 'Cetaphil Moisturizing Cream memiliki tekstur yang kental, lembut, halus, dan mudah diaplikasikan sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);

        // ALTERNATIF 5
        DB::table('comparison_questions')->insert([
            'alternative_id' => '5',
            'criteria_id' => '1',
            'pertanyaan' => 'Untuk sebuah pelembab wajah dengan harga Rp 270.000 dalam ukuran 15ml menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '5',
            'criteria_id' => '2',
            'pertanyaan' => 'Saya mempertimbangkan bentuk kemasan glass jars dalam memilih produk pelembab wajah.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '5',
            'criteria_id' => '3',
            'pertanyaan' => 'Kandungan Hyaluronic Acid dan Activated Aloe Water yang terdapat dalam produk CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator menjadi pertimbangan saya dalam memilih produk pelembab wajah ini.',
        ]);

        DB::table('comparison_questions')->insert([
            'alternative_id' => '5',
            'criteria_id' => '4',
            'pertanyaan' => 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator mengandung teknologi auto-replenishing yang dapat mengunci kelembapan pada kulit selama 100 jam, serta membantu menjaga kelembapan dan menenangkan kulit sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);
        
        DB::table('comparison_questions')->insert([
            'alternative_id' => '5',
            'criteria_id' => '5',
            'pertanyaan' => 'CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator memiliki tekstur yang ringan dan berbentuk gel sehingga mempengaruhi saya dalam memilih produk pelembab wajah ini.',
        ]);
    }
}
