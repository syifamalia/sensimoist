@extends('layouts.main')

@section('content')
<br><br>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6 my-5 d-flex align-items-center">
                <img src="/img/regist.png" alt="Register" class="img-fluid">
            </div>
            <div class="col-lg-5 offset-lg-1 my-5">
                <p class="login-register">Register</p>
                <form action="/daftar" method="POST" class="mt-5 col-lg-12" id="registForm">
                    @csrf
                    <div class="mb-4 pb-1">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama lengkap Anda" value="{{ old('name') }}" autofocus>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="mb-4 pb-1">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukan username Anda" value="{{ old('username') }}">
                        <div class="form-text">Pastikan username tidak menggunakan spasi.</div>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="mb-4 pb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan alamat email aktif Anda" value="{{ old('email') }}">
                        <div class="form-text">Pastikan alamat email yang Anda masukkan benar karena alamat email yang terdaftar tidak dapat diubah setelah disimpan.</div>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="mb-4 pb-1">
                          <label for="password" class="form-label">Password</label>
                          <div class="input-group">
                              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan password Anda">
                              <span class="input-group-text bg-white" id="toggle-password" onclick="togglePasswordVisibility()"><i class="bi bi-eye-slash"></i></span>
                              @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-text text-muted">Password Anda harus sepanjang 5-20 karakter.</div>
                      </div>
                      <div class="mb-4 pb-1">
                        <label for="dob" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" placeholder="Pilih tanggal lahir Anda" value="{{ old('dob') }}" min="1993-01-01" max="2005-12-31">
                        @error('dob')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-4 pb-1">
                        <label for="gender" class="form-label d-block">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="wanita" value="wanita" checked>
                            <label class="form-check-label" for="wanita">Wanita</label>
                        </div>
                        <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="pria" value="pria" onclick="genderModal()">
                              <label class="form-check-label" for="pria">Pria</label>
                        </div>
                      </div>
                      {{-- GENDER MODAL --}}
                      <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Oop! Maaf!</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex justify-content-center mb-3 pb-2">
                                    <img src="/img/sorry.png" alt="Sorry!" class="img-fluid" style="width: 250px">
                                </div>
                              <p class="sorry-text text-center mx-auto">Mohon maaf, aplikasi ini hanya ditujukan untuk Wanita, terima kasih!</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-logReg" data-bs-dismiss="modal">Baiklah</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- END MODAL --}}
                      <div class="mb-4 pb-1">
                        <label for="photo" class="form-label">Photo Profile</label>
                        <select name="image" id="profile-photo" class="form-select" onchange="previewImage()">
                            <option value="/img/pfp/default.jpg" disabled selected>Select an picture</option>
                            <option value="/img/pfp/beauty-girl-1.png" {{ old('image') == '/img/pfp/beauty-girl-1.png' ? 'selected' : '' }}>Beauty Girl 1</option>
                            <option value="/img/pfp/beauty-girl-2.png" {{ old('image') == '/img/pfp/beauty-girl-2.png' ? 'selected' : '' }}>Beauty Girl 2</option>
                            <option value="/img/pfp/beauty-girl-3.png" {{ old('image') == '/img/pfp/beauty-girl-3.png' ? 'selected' : '' }}>Beauty Girl 3</option>
                            <option value="/img/pfp/beauty-girl-4.png" {{ old('image') == '/img/pfp/beauty-girl-4.png' ? 'selected' : '' }}>Beauty Girl 4</option>
                            <option value="/img/pfp/beauty-girl-5.png" {{ old('image') == '/img/pfp/beauty-girl-5.png' ? 'selected' : '' }}>Beauty Girl 5</option>
                            <option value="/img/pfp/beauty-girl-6.png" {{ old('image') == '/img/pfp/beauty-girl-6.png' ? 'selected' : '' }}>Beauty Girl 6</option>
                            <option value="/img/pfp/beauty-girl-7.png" {{ old('image') == '/img/pfp/beauty-girl-7.png' ? 'selected' : '' }}>Beauty Girl 7</option>
                        </select>
                        <br><img id="preview" class="preview-image img-thumbnail" src="{{ $imagePath = old('image') ? old('image') : '/img/pfp/default.jpg'; }}" alt="Image Preview">
                      </div>
                    <button type="submit" class="btn btn-logReg col-12 mt-5 py-2">Register</button>
                </form>
            </div>
        </div>
    </div>
    <br><br>
@endsection