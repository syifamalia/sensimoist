<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
      <a class="navbar-brand" href="/">
          <img src="/img/logoNavbar.png" alt="Logo Navbar" class="logoNavbar">
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navtxt nav-link fw-bold {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="navtxt nav-link fw-bold {{ Request::is('tentang-kami') ? 'active' : '' }}" aria-current="page" href="/tentang-kami">Tentang Kami</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="navtxt nav-link fw-bold {{ Request::is('test-pemilihan-pelembab*') ? 'active' : '' }}" href="/test-pemilihan-pelembab">Test Pemilihan Pelembab</a>
        </li>
        <li class="nav-item">
          <a class="navtxt nav-link fw-bold {{ Request::is('hasil-rekomendasi*') ? 'active' : '' }}" href="/hasil-rekomendasi">Hasil Rekomendasi</a>
        </li>
      </ul>
        <ul class="navbar-nav d-inline-block">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
              @if (auth()->user()->image)
                  <img src="{{ auth()->user()->image }}" class="rounded-circle" width="45px" height="45px" style="margin-left: 5px">
              @else
                  <img src="/img/pfp/default.jpg"  width="40px" height="45px" style="margin-left: 5px">
              @endif
              
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#{{ auth()->user()->id }}"><i class="fa fa-user"></i> Edit Akun</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/keluar" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      @else
        <div class="d-flex">
          <a href="/daftar"><button class="btn btn-sign-up ms-4 shadow-sm px-5 py-2" type="submit">Sign Up</button></a>
          <a href="/masuk"><button class="btn btn-login ms-2 shadow-sm px-4" type="submit">Login</button></a>
        </div>
      @endauth
    </div>
  </div>
  @auth
  <!-- Modal -->
  <div class="modal fade" id="{{ auth()->user()->id }}" tabindex="-1" aria-labelledby="{{ auth()->user()->name }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-start">
        <div class="modal-header">
          <h5 class="modal-title" id="{{ auth()->user()->name }}">Edit Akun {{ auth()->user()->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/akun/ubah/{{ auth()->user()->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama lengkap Anda" value="{{ old('name', auth()->user()->name) }}" autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukan username Anda tanpa menggunakan spasi" value="{{ old('username', auth()->user()->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-4">
                <label for="dob" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" placeholder="Pilih tanggal lahir Anda" value="{{ old('dob', auth()->user()->dob) }}" max="2005-12-31">
                @error('dob')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-4">
                <label for="photo" class="form-label">Photo Profile</label>
                <select name="image" id="profile-photo" class="form-select" onchange="previewImage()">
                  <option value="/img/pfp/beauty-girl-1.png" {{ old('image', auth()->user()->image) == '/img/pfp/beauty-girl-1.png' ? 'selected' : '' }}>Beauty Girl 1</option>
                  <option value="/img/pfp/beauty-girl-2.png" {{ old('image', auth()->user()->image) == '/img/pfp/beauty-girl-2.png' ? 'selected' : '' }}>Beauty Girl 2</option>
                  <option value="/img/pfp/beauty-girl-3.png" {{ old('image', auth()->user()->image) == '/img/pfp/beauty-girl-3.png' ? 'selected' : '' }}>Beauty Girl 3</option>
                  <option value="/img/pfp/beauty-girl-4.png" {{ old('image', auth()->user()->image) == '/img/pfp/beauty-girl-4.png' ? 'selected' : '' }}>Beauty Girl 4</option>
                  <option value="/img/pfp/beauty-girl-5.png" {{ old('image', auth()->user()->image) == '/img/pfp/beauty-girl-5.png' ? 'selected' : '' }}>Beauty Girl 5</option>
                  <option value="/img/pfp/beauty-girl-6.png" {{ old('image', auth()->user()->image) == '/img/pfp/beauty-girl-6.png' ? 'selected' : '' }}>Beauty Girl 6</option>
                  <option value="/img/pfp/beauty-girl-7.png" {{ old('image', auth()->user()->image) == '/img/pfp/beauty-girl-7.png' ? 'selected' : '' }}>Beauty Girl 7</option>
                </select>
                <br><img id="preview" class="preview-image img-thumbnail" src="{{ $imagePath = old('image', auth()->user()->image) ? old('image', auth()->user()->image) : '/img/pfp/default.jpg'; }}" alt="Image Preview">
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Ubah Password</label>
                <div class="input-group mb-4">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukan password baru apabila ingin mengubah password">
                    <span class="input-group-text bg-white" id="toggle-password" onclick="togglePasswordVisibility()"><i class="bi bi-eye-slash"></i></span>
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-edit py-2 px-3">Ubah Data</button>
            </div>
          </form>
      </div>
    </div>
  </div>
  @endauth
</nav>