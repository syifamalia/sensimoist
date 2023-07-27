<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('account.register',[
            "title" => "Daftar Akun | SensiMoist",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|regex:/^\S*$/|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20',
            'dob' => 'required',
            'image' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        event(new Registered($user));

        return redirect('/masuk')->with('success', 'Pendaftaran berhasil! Silahkan lakukan verifikasi pada email Anda!');
    }
}
