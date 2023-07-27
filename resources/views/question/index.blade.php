@extends('layouts.main')

@section('content')
<br><br><br>
<div class="container mt-5">
    @if ($hasData)
    <div class="row">
        <div class="col-lg-5">
            <img src="/img/oh-no.png" alt="Oh No" class="img-fluid">
        </div>
        <div class="col-lg-5 offset-md-1 align-self-center">
            <p class="oh-no-head">Oops!</p>
            <p class="oh-no mt-4">Kamu sudah melakukan testnya loh!</p>
            <p class="oh-no">Jika kamu mau melakukan test ulang, kamu harus mereset data kamu dulu.</p>
            <p class="oh-no">Yuk reset datamu dulu di halaman <a href="/hasil-rekomendasi">hasil rekomendasi</a>!</p>
            <p class="oh-no">Terima kasih!</p>
        </div>
    </div>
    @else
        <div class="row">
            <div class="bg-question col-lg-8 p-5">
                <p class="bagian">Test Bagian I</p>
                <p class="descBagian fst-italic mb-5 pb-3">Bagian ini untuk menentukan kriteria yang sesuai dengan pelembab Anda</p>
                <form action="/kriteria" method="post">
                    @csrf
                    @foreach ($criterias as $criteria)
                    <div class="mb-5">
                        <label class="form-label-question">{{ $criteria->pertanyaan_kriteria }}</label>
                        @foreach ([10, 20, 30, 40, 50] as $bobot)
                        <div class="form-check form-check-inline vertical-radio">
                            <input class="form-check-input" type="radio" name="bobot[{{ $criteria->id }}]" value="{{ $bobot }}" id="bobot-{{ $criteria->id }}-{{ $bobot }}" required>
                            <label class="form-check-label" for="bobot-{{ $criteria->id }}-{{ $bobot }}">
                                @if ($bobot == 10)
                                    Tidak Penting
                                @elseif ($bobot == 20)
                                    Kurang Penting
                                @elseif ($bobot == 30)
                                    Cukup Penting
                                @elseif ($bobot == 40)
                                    Penting
                                @elseif ($bobot == 50)
                                    Sangat Penting
                                @endif
                            </label>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-Question col-lg-3 col-sm-3 float-end mt-5 py-2">Selanjutnya</button>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1 d-flex align-items-center mt-5">
                <p class="bagianHead">TEST BAGIAN SATU</p>
            </div>
        </div>
    @endif
</div>
<br><br><br><br><br>
@endsection