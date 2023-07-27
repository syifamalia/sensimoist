<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CalculatingController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {
    return view('home', [
        "title" => "SensiMoist"
    ]);
});

// TENTANG KAMI
Route::get('/tentang-kami', function () {
    return view('tentangKami', [
        "title" => "Tentang Kami | SensiMoist"
    ]);
});

// MASUK
Route::get('/masuk', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk', [LoginController::class, 'authenticate']);
Route::post('/keluar', [LoginController::class, 'signout']);

// DAFTAR AKUN
Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/daftar', [RegisterController::class, 'store']);

// EMAIL VERIFY
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    // Redirect ke halaman utama
    return back()->with('verified','Verifikasi Akun Berhasil!');
})->middleware(['auth', 'signed'])->name('verification.verify');

// RESEND EMAIL VERIFICATION
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('success', 'Verification link telah dikirim ulang! Silahkan cek email Anda');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// FORGOT PASSWORD
Route::get('/forgot-password', function () {
    return view('account.forgot-password', [
        "title" => "Lupa Password | SensiMoist"
    ]);
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('account.reset-password', [
        'title' => "Reset Password | SensiMoist",
        'token' => $token
    ]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// AKUN USER
Route::get('/hasil-rekomendasi', [AccountController::class, 'index'])->middleware('auth');
Route::put('/akun/ubah/{user}', [AccountController::class, 'update'])->middleware('auth');
Route::delete('/hasil-rekomendasi/reset/{user}', [AccountController::class, 'delete'])->middleware('auth');

// QUESTION TEST PEMILIHAN PELEMBAB
Route::get('/test-pemilihan-pelembab', [QuestionController::class, 'bagianSatu'])->middleware('auth');
Route::get('/test-pemilihan-pelembab-bagian-dua', [QuestionController::class, 'bagianDua'])->middleware('auth');

// KRITERIA
Route::post('/kriteria', [CriteriaController::class, 'store']);

// PERHITUNGAN
Route::post('/pertanyaan-perbandingan', [CalculatingController::class, 'comparisonResult']);
Route::get('/hitung-bobot-relative', [CriteriaController::class, 'hitungBobotRelative'])->middleware('auth');
Route::get('/hitung-vektor-s', [CalculatingController::class, 'hitungVectorS'])->middleware('auth');
Route::get('/hitung-vektor-v', [CalculatingController::class, 'hitungVectorV'])->middleware('auth');