@extends('layouts.main')
@section('content')
<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
@endsection
