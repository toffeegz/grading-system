{{-- 
    DOUBLE CHECK THE FILE PLEASE
    THIS WONT WORK UNLESS THIS FILE IS A BLADE FILE
--}}
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="{{ asset('js/init-alpine.js') }}"></script>

<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }
    [x-cloak] { display: none !important; }
</style>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

{{-- ALWAYS USE ME --}}
@yield('page-style')

