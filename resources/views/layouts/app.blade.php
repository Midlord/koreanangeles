<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korean Angeles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/krangeles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb-pro.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.top-nav')
    @include('modals.login')

        <main class="py-4">
            <div class="container wrapper">
                @yield('content')
            </div>
        </main>

    @include('partials.footer')


<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEu6-Ik5V0hLMjpgKcM42QgfDb0W30O40&callback=initMap">
</script>
<script>
    $('.carousel').carousel();


</script>
</body>
</html>
