<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{__('frontend/frontend.invoice_system')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawsome/all.min.css')}}}" >
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if(config('app.locale') == 'ar')
        <link href="{{ asset('frontend/css/bsrtl.css') }}" rel="stylesheet">
        @endif
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 {{__('frontend/frontend.invoice_system')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item px-2"><a class="btn btn-primary" href="{{route('frontend_change_locale','ar')}}">ع</a></li>
                        <li class="nav-item"><a class="btn btn-secondary" href="{{route('frontend_change_locale','en')}}">E</a></li>

                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('frontend/js/fontawsome/all.min.js')}}"></script>
    @yield('script')
</body>
</html>
