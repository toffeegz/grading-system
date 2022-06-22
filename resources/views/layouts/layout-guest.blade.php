@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigations.nav-guest-component')
    <main>
        {{ $slot }}
    </main>
</div>
@endsection