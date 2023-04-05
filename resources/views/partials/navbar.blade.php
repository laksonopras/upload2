<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <img src="{{ url('asset/logo-gits.png') }}" style="width: 50px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-5 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="ourContact">Kontak kami</a>
                </li>
                <li class="nav-item  d-flex align-items-center" >
                    @auth
                    <div class="dropdown ms-5">
                        <div class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                          </a> --}}
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/product">data</a></li>
                          <li><a class="dropdown-item" href="/edit">{{ Auth::user()->name }}</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="/logout">  keluar</a></li>
                        </ul>
                      </div>
                    @endauth
                    @guest    
                    <a class="nav-link active" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    @endguest
                </li>
            </ul>
            <div class="d-flex">
                
                
            </div>
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">LOGIN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/login" method="POST">
                @csrf
                <div class="modal-body px-5 py-3">
                    <h6 class="text-center">Selain karyawan dilarang masuk!</h6>
                    <input type="email" class="form-control my-3 @error('email') is-invalid @enderror" id="inputEmail" placeholder="email" name="email" required>
                        @error('email')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    <input type="password" class="form-control my-3 @error('password') is-invalid @enderror" id="inputPassword" placeholder="password" name="password" required>
                        @error('password')
                            <div id="passwordHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    <div class="form-check">
                        <label class="form-check-label" for="notRobotCheck">I'm not robot</label>
                        <input class="form-check-input" type="checkbox" id="notRobotCheck" required>
                        <div class="invalid-feedback">
                            Pastikan Anda BUKAN robot!
                        </div>
                    </div>
                    <p class="mt-3">Belum punya akun? <a href="/register">daftar di sini!</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>
