@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6 my-5">
                <img src="/img/login.png" alt="Login" class="img-fluid">
            </div>
            <div class="col-lg-5 offset-lg-1 my-5">
                <p class="login-register mt-5 pt-5">Login</p>
                {{-- SESSION --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" style="margin-bottom: -35px" role="alert">
                        {{ session('success') }}
                        {{-- {!! session('success') !!} --}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" style="margin-bottom: -35px" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- END SESSION --}}
                <form action="/masuk" method="POST" class="mt-5">
                    @csrf
                    <div class="mb-4">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukan username Anda" autofocus value="{{ old('username') }}">
                      @error('username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan password Anda">
                        <span class="input-group-text bg-white" id="toggle-password" onclick="togglePasswordVisibility()"><i class="bi bi-eye-slash"></i></span>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <a href="/forgot-password" class="lupa-password">Forgot Password?</a>
                    <button type="submit" class="btn btn-logReg col-12 mt-3 mb-4 py-2">Login</button>
                </form>
                <a href="/daftar" class="btn btn-daftar col-12 py-2">Register Account</a>
            </div>
        </div>
    </div>
@endsection