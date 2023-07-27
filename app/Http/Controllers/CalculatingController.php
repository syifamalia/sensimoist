<?php

namespace App\Http\Controllers;

use App\Models\Comparison;
use App\Models\VectorS;
use App\Models\VectorV;
use App\Models\Alternative;
use App\Models\Criteria;
use App\Models\RelativeWeight;
use Illuminate\Http\Request;

class CalculatingController extends Controller
{
    public function comparisonResult(Request $request)
    {
        $user_id = auth()->id();
        foreach ($request->input('bobot') as $alternative_id => $criterias) {
            foreach ($criterias as $kriteria_id => $bobot) {
                Comparison::updateOrCreate(
                    ['user_id' => $user_id, 'alternative_id' => $alternative_id, 'criteria_id' => $kriteria_id],
                    ['bobot' => $bobot]
                );
            }
        }

        return redirect('/hitung-bobot-relative');
    }

    public function hitungVectorS()
    {
        $user_id = auth()->user()->id;

        $alternative = Alternative::all();
        $kriteria = Criteria::all();
        $bobotRelatif = RelativeWeight::where('user_id', $user_id)->get();
        $perbandingan = Comparison::where('user_id', $user_id)->get();

        $vektorS = [];

        foreach ($alternative as $alt) {
            $s = 1;

            foreach ($kriteria as $krit) {
                $bobot = $bobotRelatif->where('criteria_id', $krit->id)->first()->{'bobot_relatif'};

                $perbandingan_alternative = $perbandingan->where('alternative_id', $alt->id)->where('criteria_id', $krit->id)->first()->{'bobot'};

                if($krit->{'cost_benefit'} == 'cost'){
                    $s *= pow($perbandingan_alternative, -$bobot);
                } else {
                    $s *= pow($perbandingan_alternative, $bobot);
                }
            }

            $vektorS[$alt->id] = $s;
        }

        foreach ($vektorS as $key => $value) {
            $vektor = new VectorS();
            $vektor->user_id = $user_id;
            $vektor->alternative_id = $key;
            $vektor->vektor_s = $value;
            $vektor->save();
        }

        return redirect('/hitung-vektor-v');
    }

    public function hitungVectorV()
    {
        $user_id = auth()->id();
        $vektorS = VectorS::where('user_id', $user_id)->get();

        $total_vektor_s = $vektorS->sum('vektor_s');

        foreach ($vektorS as $vS) {
            $vektorV = $vS->vektor_s / $total_vektor_s;

            $data = [
                'user_id' => $user_id,
                'alternative_id' => $vS->alternative_id,
                'vektor_v' => $vektorV,
            ];

            VectorV::create($data);
        }

        return redirect('/hasil-rekomendasi');
    }
}
