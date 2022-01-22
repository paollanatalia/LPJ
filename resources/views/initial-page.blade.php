@extends('layouts.main')

@section('title', 'LPJ')

@section('content')

    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">{{ $user->name }}</h1>
            <h3 class="mb-5"><em>Área de Jogos</em></h3>
            <a class="btn btn-primary btn-xl" href="{{ route('dashboard') }}">Home</a>
            @role('admin')
                <a class="btn btn-primary btn-xl" href="/laratrust">Administração</a>
            @endrole
            <form action="{{ route('logout') }}" method="POST" class="mt-3">
                @csrf
                
                <a class="btn btn-primary btn-xl" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
            </form>
        </div>
    </header>
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Cartela</h3>
                <h2 class="mb-5">Jogos populares</h2>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="{{ route('game-01') }}">
                        <img class="img-fluid" src="assets/ludo.png" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="{{ route('game-02') }}">
                        <img class="img-fluid" src="assets/color-game.png" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="{{ route('game-03') }}">
                        <img class="img-fluid" src="assets/pet-game.png" alt="..." />
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="{{ route('game-04') }}">
                        <img class="img-fluid" src="assets/monkey-game.png" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/paollanatalia/LPJ"><i class="icon-social-github"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; LPJ 2022</p>
        </div>
    </footer>


@endsection