<?php

namespace App\Http\Controllers;

use App\Models\Comparison;
use App\Models\CriterionWeight;
use App\Models\RelativeWeight;
use App\Models\User;
use App\Models\VectorS;
use App\Models\VectorV;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Age
        $dob = $user->dob;
        $dobObj = new DateTime($dob);
        $dateNow = new DateTime();
        $age = $dobObj->diff($dateNow)->y;
        // Hasil Test
        $mostRecommendMoist = VectorV::where('user_id', $user->id)->orderByDesc('vektor_v')->first();
        $mostRecommendMoistName = $mostRecommendMoist ? $mostRecommendMoist->alternative->nama_alternatif : null;
        $hasilTest = VectorV::where('user_id', $user->id)->orderByDesc('vektor_v')->get();

        // Return
        return view('account.index', [
            'title' => $user->name . ' | SensiMoist',
            'user' => $user,
            'age' => $age,
            'mostRecommendMoistName' => $mostRecommendMoistName,
            'hasilTest' => $hasilTest
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'dob' => 'required',
            'image' => 'required'
        ];
        
        
        if ($request->username != $user->username) {
            $rules['username'] = 'required|regex:/^\S*$/|unique:users';
        }
        
        
        if ($request->password) {
            $rules['password'] = 'min:5|max:20';
        }
        
        $validatedData = $request->validate($rules);

        if ($request->password) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        User::where('id', $user->id)->update($validatedData);

        return redirect()->back()->with('updated', 'Profile Anda Berhasil diperbarui!');
    }

    public function delete(User $user)
    {
        // Menghapus data dari tabel pertama
        CriterionWeight::where('user_id', $user->id)->delete();

        // Menghapus data dari tabel kedua
        RelativeWeight::where('user_id', $user->id)->delete();

        // Menghapus data dari tabel ketiga
        Comparison::where('user_id', $user->id)->delete();

        // Menghapus data dari tabel keempat
        VectorS::where('user_id', $user->id)->delete();

        // Menghapus data dari tabel kelima
        VectorV::where('user_id', $user->id)->delete();


        return redirect('/hasil-rekomendasi')->with('deleted', 'Data Berhasil Direset!');
    }
}
