<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/krangeles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb-pro.css') }}" rel="stylesheet">
</head>
<body>
@include('partials.top-nav')
@include('modals.login')
    <main class="py-4">
        @yield('content')
    </main>
@include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script>
        $('.carousel').carousel()
    </script>
</body>
</html>
