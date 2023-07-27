<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\ComparisonQuestion;
use App\Models\Criteria;
use App\Models\CriterionWeight;
use App\Models\VectorV;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function bagianSatu()
    {
        $user = Auth::user();
        $vektorV = VectorV::where('user_id', $user->id)->exists();
        $criteria = CriterionWeight::where('user_id', $user->id)->exists();
        $hasData = $vektorV && $criteria;
        return view('question.index', [
            'title' => 'Test Pemilihan Pelembab | SensiMoist',
            'hasData' => $hasData,
            'criterias' => Criteria::all(),
        ]);
    }
    
    public function bagianDua()
    {
        return view('question.bagianDua', [
            'title' => 'Test Bagian 2 | SensiMoist',
            'comparison_questions' => ComparisonQuestion::all(),
            'alternatives' => Alternative::all(),
            'criterias' => Criteria::all(),
        ]);
    }
}
