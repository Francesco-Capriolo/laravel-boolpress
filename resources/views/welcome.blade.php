<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guest Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- link collegamento al sass/scss --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    {{-- Funzionalità richieste (front-office in Vue):
        Creare almeno due pagine con VueRouter@3
        Impaginare in maniera visibile (in pagina, non semplicemente in console) i dati recuperati da API in almeno una delle due pagine implementate.
        Implementare una forma, anche primitiva, di navigazione tra le due pagine.
        Aiutiamoci con la documentazione di vue-router:
        https://v3.router.vuejs.org/guide/--}}
    <body>
        <section id="guest-home-wrapper">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('home') }}">Home</a>
                            {{-- <a href="{{ route('admin.posts.index') }}">Posts</a>
                            <a href="{{ url('/home') }}">Category</a> --}}
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </section>

        <div id="root">
            <App/>
        </div>

        <script src="{{asset('js/front.js')}}"></script>
    </body>
</html>
