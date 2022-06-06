{{-- 
    DOUBLE CHECK THE FILE PLEASE
    THIS WONT WORK UNLESS THIS FILE IS A BLADE FILE
--}}
<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<style>
    body {
        font-family: 'Nunito', sans-serif;
        
    }
    [x-cloak] { display: none !important; }
</style>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

{{-- ALWAYS USE ME --}}
@yield('page-style')

