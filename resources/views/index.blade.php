@extends('layouts.main')

@section('title', 'LPJ')

@section('content')

    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">LPJ</h1>
            <h3 class="mb-5"><em>Comunidade de Jogos</em></h3>
            <a class="btn btn-primary btn-xl" href="{{ route('login') }}">Login</a>
            <a class="btn btn-primary btn-xl" href="{{ route('register') }}">Registre-se</a>
        </div>
    </header>
    
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2 class="mb-3">LPJ - virtual children's learning center</h2>
                    <p class="lead mb-5">
                        O nosso projeto é uma espécie de "gamer center” virtual, que vai unir jogos online de diferentes nichos temáticos, com o objetivo de trabalhar o raciocínio lógico das crianças e ao mesmo tempo, promover a diversão desse público. Com isso, o projeto disponibilizará jogos que impulsionam o raciocínio, por exemplo: jogos da memória, jogo da velha; e que estão conectados a situações do cotidiano de cada criança, aproximando o conteúdo adquirido a situações diárias, com o intuito de incentivar a aprendizagem.
                    </p>
                    <a class="btn btn-dark btn-xl" href="{{ route('register') }}">Comece já!</a>
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
