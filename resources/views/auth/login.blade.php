@extends('layouts.app')

@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card" style="border-radius: 20px; box-shadow: 0px 10px 20px -3px #A18AFF;">
                        <div class="card-header p-3"
                            style="background-color: #6E56CF; color: #ffff; border-radius: 20px 20px 0px 0px; font-size: 18px;">
                            <strong>{{ __('LOGIN') }}</strong>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="">
                                @csrf

                                <div class="row mb-1">
                                    <label for="username"
                                        class="col col-form-label text-md-center"><strong>{{ __('USERNAME') }}</strong></label>
                                </div>
                                <div class="col mb-3">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-1">
                                    <label for="password"
                                        class="col col-form-label text-md-center"><strong>{{ __('PASSWORD') }}</strong></label>
                                </div>
                                <div class="col mb-4">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>

                                <div class="row">
                                    <div class="text-center">
                                        <button type="submit" class="btn"
                                            style="background-color: #6E56CF; color: #fff; width: 100%; height: 100%;">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </body>
@endsection
