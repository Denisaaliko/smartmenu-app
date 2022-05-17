@extends('layouts.main')
@section('content')
    <div class="container">
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Porosi</h1>
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>PorosiID</td>
                    <td>Fastfood</td>
                    <td>Perdorues</td>
                    <td>Data</td>
                    <td>Adresa</td>
                    <td>Status</td>
                    <td>CmimTotal</td>
                    <td>Sasia</td>
                </tr>
                </thead>
                <tbody>
                @foreach($porosi as $porosi)
                    <tr>
                        <td>{{$porosi->PorosiID}}</td>
                        <td>{{$porosi->Emer}} </td>
                        <td>{{$porosi->name}}</td>
                        <td>{{$porosi->Data}} </td>
                        <td>{{$porosi->Adresa}}</td>
                        <td>{{$porosi->Status}}</td>
                        <td>{{$porosi->CmimTotal}} </td>
                        <td>{{$porosi->Sasia}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>

@endsection
