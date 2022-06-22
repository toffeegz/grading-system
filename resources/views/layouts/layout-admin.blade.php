@extends('layouts.app')
@section('content')
<div class="flex h-screen bg-white " :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('layouts.navigations.sidebar-component')
    <div class="w-0 md:w-64">
    </div>
    <main class="flex flex-col flex-1 w-full">
        @include('layouts.navigations.nav-admin-component')
        {{ $slot }}
    </main>
</div>
@endsection
