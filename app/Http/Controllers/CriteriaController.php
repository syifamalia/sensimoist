<?php

namespace App\Http\Controllers;

use App\Models\CriterionWeight;
use App\Models\RelativeWeight;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function store(Request $request)
    {
        $user_id = auth()->id();
        
        foreach ($request->input('bobot') as $criteria_id => $bobot) {
            CriterionWeight::updateOrCreate(
                ['user_id' => $user_id, 'criteria_id' => $criteria_id],
                ['bobot' => $bobot]
            );
        }

        return redirect('/test-pemilihan-pelembab-bagian-dua');
    }

    public function hitungBobotRelative()
    {
        $user_id = auth()->id();
        $bobot_kriteria = CriterionWeight::where('user_id', $user_id)->get();

        $total_bobot_awal = $bobot_kriteria->sum('bobot');

        foreach ($bobot_kriteria as $bk) {
            $bobot_relative = $bk->bobot / $total_bobot_awal;

            $data = [
                'user_id' => $user_id,
                'criteria_id' => $bk->criteria_id,
                'bobot_relatif' => $bobot_relative,
            ];

            RelativeWeight::create($data);
        }

        return redirect('/hitung-vektor-s');
    }
}
