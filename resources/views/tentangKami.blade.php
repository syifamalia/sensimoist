@extends('layouts.main')

@section('content')
<br>
    <div class="container mt-5">
        <div class="row">
            <p class="headTentangKami mb-3 pb-2">Tentang Kami</p>
            <div class="col-lg-3 d-flex align-items-center">
                <img src="/img/BigLogo.png" alt="SensiMoist" class="img-fluid rounded">
            </div>
            <div class="col-lg-7 offset-md-1 tentangKami mt-3">
                Selamat datang di SensiMoist, aplikasi sistem pendukung keputusan yang dirancang khusus untuk <b>membantu wanita dengan tipe kulit wajah sensitif dalam memilih pelembab yang sesuai</b>. Kami menyadari bahwa kulit sensitif membutuhkan perhatian ekstra dan pemilihan produk yang tepat untuk menjaga keseimbangan kelembaban dan kesehatan kulit Anda.
                <br><br>
                SensiMoist menggunakan metode <i>weighted product</i> dengan <b>5 alternatif</b> dan <b>5 kriteria</b> untuk membantu Anda menentukan pelembab yang paling cocok. Kriteria yang kami gunakan meliputi Harga, Bentuk Kemasan, Kandungan Produk, Kepentingan Produk, dan Tekstur Produk. Dengan mempertimbangkan faktor-faktor ini, SensiMoist akan memberikan rekomendasi pelembab yang sesuai dengan kebutuhan dan preferensi kulit sensitif Anda.
                <br><br>
                Kami juga memahami bahwa setiap individu memiliki kebutuhan dan preferensi yang berbeda-beda. Oleh karena itu, SensiMoist memungkinkan Anda untuk memilih kriteria yang paling penting bagi Anda. Dengan memprioritaskan kriteria Anda sendiri, SensiMoist akan memberikan hasil yang lebih personal dan sesuai dengan preferensi kulit sensitif Anda.
                <br><br>
                Terima kasih telah menggunakan SensiMoist, dan kami berharap Anda menemukan pelembab yang sempurna untuk kulit wajah sensitif Anda!
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 pt-5">
            <div class="col">
                <div class="card headCard">
                    <div class="row g-0">
                      <div class="col-lg-4">
                        <p class="headTentangKamiCard">5</p>
                      </div>
                      <div class="col-lg-8 align-self-center">
                        <div class="card-body">
                          <h5 class="card-title subTentangKami">Alternatif Pelembab yang Digunakan</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cardAlternatif">
                    <div class="row g-0">
                      <div class="col-lg-4">
                        <img src="/img/alternatif1.jpg" class="img-fluid rounded-start imgAlternatif" alt="Alternatif 1">
                      </div>
                      <div class="col-lg-8 align-self-center">
                        <div class="card-body">
                          <h5 class="card-title">Hada Labo Gokujyun Ultimate Moisturizing Lotion</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cardAlternatif">
                    <div class="row g-0">
                      <div class="col-lg-4">
                        <img src="/img/alternatif2.jpg" class="img-fluid rounded-start imgAlternatif" alt="Alternatif 2">
                      </div>
                      <div class="col-lg-8 align-self-center">
                        <div class="card-body">
                          <h5 class="card-title">Skintific 5x Ceramide Barrier Repair Moisturize Gel</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cardAlternatif">
                    <div class="row g-0">
                      <div class="col-lg-4">
                        <img src="/img/alternatif3.jpg" class="img-fluid rounded-start imgAlternatif" alt="Alternatif 3">
                      </div>
                      <div class="col-lg-8 align-self-center">
                        <div class="card-body">
                          <h5 class="card-title">Safi Dermasafe Soothe & Hydrate Day Moisturizer</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cardAlternatif">
                    <div class="row g-0">
                      <div class="col-lg-4">
                        <img src="/img/alternatif4.png" class="img-fluid rounded-start imgAlternatif" alt="Alternatif 4">
                      </div>
                      <div class="col-lg-8 align-self-center">
                        <div class="card-body">
                          <h5 class="card-title">Cetaphil Moisturizing Cream</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cardAlternatif">
                    <div class="row g-0">
                      <div class="col-lg-4">
                        <img src="/img/alternatif5.jpg" class="img-fluid rounded-start imgAlternatif" alt="Alternatif 5">
                      </div>
                      <div class="col-lg-8 align-self-center">
                        <div class="card-body">
                          <h5 class="card-title">CLINIQUE Moisture Surge 100H Auto-Replenishing Hydrator</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
@endsection