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

        {{-- students panel --}}
        @if(auth()->user()->hasRole('student'))
            <div class="flex h-screen bg-white" :class="{ 'overflow-hidden': isSideMenuOpen }">
                <main class="flex flex-col flex-1 w-full">
                    @include('layouts.navigations.nav-guest-student')
                    <div class="mt-20">
                        {{ $slot }}
                    </div>
                </main>
            </div>

        {{-- administrator and instructor panel --}}
        @elseif(auth()->user()->hasRole('administrator') || auth()->user()->hasRole('instructor'))
        <div class="flex h-screen bg-white " :class="{ 'overflow-hidden': isSideMenuOpen }">
            @include('layouts.navigations.sidebar')
            <div class="w-0 md:w-64">
            </div>
            <main class="flex flex-col flex-1 w-full">
                @include('layouts.navigations.nav-admin-instructor')
                {{ $slot }}
            </main>
        </div>
        @else 
        
        @endif
        

        @livewireScripts
        @include('layouts.partials.scripts')

    </body>
</html>