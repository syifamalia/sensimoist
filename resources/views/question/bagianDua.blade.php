@extends('layouts.main')

@section('content')
<br><br><br>
<div class="container mt-5">
    <div class="row">
        <div class="bg-question col-lg-8 p-5">
            <p class="bagian">Test Bagian II</p>
            <p class="descBagian fst-italic mb-5 pb-3">Bagian ini untuk membuat perbandingan tiap alternatif dan kriteria</p>
            <form action="/pertanyaan-perbandingan" method="post">
                @csrf
                @foreach ($alternatives as $alt)
                    <small class="visually-hidden">{{ $alt->kode_alternatif }}</small>
                    @foreach ($criterias as $cr)
                        <small class="visually-hidden">{{ $cr->kode_kriteria }}</small>
                        @foreach ($comparison_questions->where('alternative_id', $alt->id)->where('criteria_id', $cr->id) as $cQ)
                            <div class="mb-5">
                                <label class="form-label-question">{{ $cQ->pertanyaan }}</label>
                                @foreach ([10, 20, 30, 40, 50] as $bobot)
                                    <div class="form-check form-check-inline vertical-radio">
                                        <input type="radio" name="bobot[{{ $alt->id }}][{{ $cQ->criteria_id }}]" value="{{ $bobot }}" id="bobot-{{ $cQ->id }}-{{ $bobot }}" required class="form-check-input">
                                        <label class="form-check-label" for="bobot-{{ $cQ->id }}-{{ $bobot }}">
                                            @if ($bobot == 10)
                                                Sangat Tidak Setuju
                                            @elseif ($bobot == 20)
                                                Tidak Setuju
                                            @elseif ($bobot == 30)
                                                Netral
                                            @elseif ($bobot == 40)
                                                Setuju
                                            @elseif ($bobot == 50)
                                                Sangat Setuju
                                            @endif
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endforeach
                @endforeach
                <button type="submit" class="btn btn-Question col-lg-3 col-sm-3 float-end mt-5 py-2">Submit</button>
            </form>
        </div>
        <div class="col-lg-3 offset-lg-1 d-flex align-items-center mt-5">
            <p class="bagianHead">TEST BAGIAN DUA</p>
        </div>
    </div>
</div>
<br><br><br><br><br>
@endsection