@extends('layouts.main')

@section('content')
<img src="/img/banner-sensimoist.png" alt="Banner SensiMoist" class="img-fluid img-banner col-lg-12 col-sm-12">
<img src="{{ $user->image }}" class="avatar">
<div class="container text-center">
    <p class="namaUser mt-5">{{ $user->name }}</p>
    <p class="umur fst-italic">{{ $age }} tahun</p>
    @if ($mostRecommendMoistName)
    <p class="recomendMoistSmall mt-4">Kami merekomendasikan pelembab:</p>
    <p class="recomendMoist">{{ $mostRecommendMoistName }}</p>
    @endif
    {{-- SESSION --}}
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-5 col-lg-3 mx-auto text-start" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    @if (session()->has('deleted'))
    <div class="alert alert-danger alert-dismissible fade show mt-5 col-lg-3 mx-auto text-start" role="alert">
        {{ session('deleted') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- END SESSION --}}
    <p class="tittleHasil mt-5 pt-4">Hasil Rekomendasi Pelembab</p>
    <div class="mt-4 col-lg-6 col-sm-12 mx-auto">
      @if ($user->email_verified_at === null)
          @if ($hasilTest->count() === 0)
              <img class="img-fluid px-3 px-sm-4 mt-5" style="width: 400px;" src="/img/oops.png" alt="Not Found">
              <p class="text-oops mt-3 col-lg-7 col-sm-12"><b>Oops!</b> Kamu harus melakukan <b>verifikasi email</b> terlebih dahulu dan <b>mengikuti test-nya</b> dulu untuk dapat mengetahui pelembab mana yang cocok untuk kulit kamu.</p>
              <p class="text-oops mt-3">Yuk ikuti test-nya <a href="/test-pemilihan-pelembab">disini</a>!</p>
              <p class="text-oops mt-3 col-lg-7 col-sm-12">Harap periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email, klik button di bawah untuk mengirim ulang.</p>
              <form action="{{ route('verification.send') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-edit px-5 py-3 mt-3">Kirim Ulang Email Verifikasi</button>
              </form>
          @else
              <img class="img-fluid px-3 px-sm-4 mt-5" style="width: 400px;" src="/img/oops.png" alt="Not Found">
              <p class="text-oops mt-3 col-lg-7 col-sm-12"><b>Oops!</b> Kamu harus melakukan <b>verifikasi email</b> terlebih dahulu.</p>
              <p class="text-oops mt-3 col-lg-7 col-sm-12">Harap periksa email Anda untuk tautan verifikasi. Jika Anda tidak menerima email, klik button di bawah untuk mengirim ulang.</p>
              <form action="{{ route('verification.send') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-edit px-5 py-3 mt-3">Kirim Ulang Email Verifikasi</button>
              </form>
          @endif
      @elseif ($hasilTest->count() === 0)
          <img class="img-fluid px-3 px-sm-4 mt-5" style="width: 400px;" src="/img/oops.png" alt="Not Found">
          <p class="text-oops mt-3 col-lg-7 col-sm-12"><b>Oops!</b> Kamu harus mengikuti test-nya dulu untuk dapat mengetahui pelembab mana yang cocok untuk kulit kamu.</p>
          <p class="text-oops mt-3">Yuk ikuti test-nya <a href="/test-pemilihan-pelembab">disini</a>!</p>
      @else
          <div class="accordion accordion-flush text-start" id="accordionFlushExample">
            @foreach ($hasilTest as $hasil)
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $hasil->alternative_id }}" aria-expanded="false" aria-controls="{{ $hasil->alternative_id }}">
                    {{ $hasil->alternative->nama_alternatif }}
                  </button>
                </h2>
                <div id="{{ $hasil->alternative_id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">{{ $hasil->alternative->keterangan_produk }}</div>
                </div>
              </div>
            @endforeach
          </div>
      @endif
      <div class="mt-5 pt-3">
          {{-- DELETE --}}
          <form action="/hasil-rekomendasi/reset/{{ $user->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-reset px-5 py-3">Reset Data</button>
          </form>
      </div>
    </div>
</div>
<br><br><br><br><br>
@endsection