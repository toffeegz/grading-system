<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('layouts.partials.styles')
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        @yield('content')

        @livewireScripts
        @include('layouts.partials.scripts')

    </body>
</html>