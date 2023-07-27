@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6 my-5">
                <img src="/img/login.png" alt="Login" class="img-fluid">
            </div>
            <div class="col-lg-5 offset-lg-1 my-5">
                <p class="login-register mt-5 pt-5">Reset Password</p>
                {{-- SESSION --}}
                @if (session()->has('status'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" style="margin-bottom: -35px" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @if (session()->has('email'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" style="margin-bottom: -35px" role="alert">
                        {{ session('email') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- END SESSION --}}
                <form action="/forgot-password" method="POST" class="mt-5">
                    @csrf
                    <div class="mb-4">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email Anda" autofocus value="{{ old('email') }}">
                      @error('email')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-logReg col-12 mb-4 py-2">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection