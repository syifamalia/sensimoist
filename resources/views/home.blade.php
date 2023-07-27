@extends('layouts.main')

@section('content')
    {{-- HEADER --}}
    <br>
    <div class="container mt-5">
        <div class="row g-0">
            <div class="clearfix mb-4">
                <img src="img/header.png" alt="Heading Picture" class="img-fluid float-end pb-3">
                 <br><br>    
                <p class="header ms-5 col-lg-5 col-md-12 col-sm-12"> Temukan Pelembab Terbaik Untuk Kulit Sensitifmu Disini</p>
                 <p class="body-header ms-5 col-lg-5 col-md-12 col-sm-12">Ingin kulit sehat dan bersinar? Temukan pelembab terbaik untukmu dengan tes pemilihan pelembab khusus wanita berkulit sensitif disini!</p>
                 <a href="/test-pemilihan-pelembab" class="btn hbtn btn-main-program ms-5 mt-2">Lakukan Test</a>
             </div>
        </div>
    </div>
    {{-- SECTION 2 --}}
    <div class="mt-5">
        <div class="wrap-contents">
            <div class="container">
                <p class="headSection py-5 text-center">Mulailah Memilih Pelembab Anda</p>
                <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
                    <div class="col">
                      <div class="card h-100 border-0">
                        <img src="/img/Pict-1.png" class="imgSect2 mx-auto d-block" alt="Gunakan Pelembab">
                        <div class="card-body">
                          <h5 class="card-title cardTittleSect2 mx-auto">Mengapa Menggunakan Pelembab?</h5>
                          <p class="card-text cardTextSect2 mx-auto">Untuk mencegah berbagai masalah kulit yang dapat terjadi akibat kekurangan kelembaban.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 border-0">
                        <img src="/img/Pict-2.png" class="imgSect2 mx-auto d-block" alt="Kenali Pelembab Yang Cocok">
                        <div class="card-body">
                          <h5 class="card-title cardTittleSect2 mx-auto">Kenali Pelembab Yang Cocok Untuk Anda</h5>
                          <p class="card-text cardTextSect2 mx-auto">Tentukan pelembab yang cocok untuk Anda dari 5 alternatif yang tersedia berdasarkan kuesioner kami.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 border-0">
                        <img src="/img/Pict-3.png" class="imgSect2 mx-auto d-block" alt="Kulit Sehat dan Bersinar">
                        <div class="card-body">
                          <h5 class="card-title cardTittleSect2 mx-auto">Dapatkan Kulit<br>Sehat & Bersinar</h5>
                          <p class="card-text cardTextSect2 mx-auto">Kami akan merekomendasi pelembab yang cocok untuk kulitmu agar bisa mendapatkan kulit sehat dan bersinar.</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/img/bgSect2.png" class="img-fluid col-12">
    </div>
    {{-- SECTION 3 --}}<br><br><br><br>
    <div class="container mt-5 pb-5">
      <div class="row g-0 position-relative">
        <div class="col-md-7">
          <p class="tittleSect3 mt-3">Tips Dalam Memilih Pelembab</p>
          <p class="subTittleSect3">Berikut ini adalah tips dalam memilih pelembab wajah untuk wanita berkulit sensitif.</p>
          <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-c1" aria-expanded="false" aria-controls="flush-c1">
                    Bahan-bahan yang Digunakan
                  </button>
                </h2>
                <div id="flush-c1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Pastikan pelembab yang dipilih mengandung bahan-bahan yang cocok untuk kulit sensitif, seperti aloe vera, oatmeal, chamomile, atau lidah buaya. Hindari bahan yang dapat menyebabkan iritasi seperti pewangi atau alkohol.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-c2" aria-expanded="false" aria-controls="flush-c2">
                    Kandungan yang Menenangkan Kulit
                  </button>
                </h2>
                <div id="flush-c2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Perhatikan pelembab dengan kandungan yang memiliki sifat menenangkan, seperti ekstrak tanaman antiinflamasi atau bahan seperti panthenol dan allantoin, yang membantu mengurangi kemerahan dan iritasi pada kulit sensitif.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-c3" aria-expanded="false" aria-controls="flush-c3">
                    Tekstur yang Tepat
                  </button>
                </h2>
                <div id="flush-c3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Pilih pelembab dengan tekstur yang ringan dan mudah meresap, sehingga tidak memberikan beban berlebih pada kulit sensitif. Hindari pelembab yang terlalu berat atau berminyak, karena dapat menyumbat pori-pori dan memicu reaksi negatif pada kulit sensitif.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-c4" aria-expanded="false" aria-controls="flush-c4">
                    Dapat Memberikan Kelembapan yang Cukup
                  </button>
                </h2>
                <div id="flush-c4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Pastikan pelembab mampu memberikan kelembaban yang cukup untuk menjaga kulit sensitif tetap terhidrasi. Pilih produk dengan kandungan pelembap yang efektif seperti hyaluronic acid atau glycerin.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-c5" aria-expanded="false" aria-controls="flush-c5">
                    Pastikan Pelembab Telah Teruji Secara Dermatologi
                  </button>
                </h2>
                <div id="flush-c5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Selalu periksa label produk dan pastikan pelembab telah diuji secara dermatologi. Hal ini menjamin bahwa produk tersebut telah diuji dan aman digunakan pada kulit sensitif, serta mengurangi risiko alergi atau iritasi.</div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-1">
          <img src="/img/memilih pelembab.jpg" alt="Tips Dalam Memilih Pelembab" class="img-fluid rounded">
        </div>
      </div>
    </div>
    {{-- END --}}<br><br><br><br>
@endsection