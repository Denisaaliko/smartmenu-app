<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produkte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Produkte</h1>
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>FastfoodID</td>
                    <td>ProduktID</td>
                    <td>Emer</td>
                    <td>Çmim</td>
                    <td>Kalori</td>
                    <td>Imazh</td>
                    <td colspan=2>Veprime</td>
                </tr>
                </thead>
                <tbody>
                @foreach($produkt as $produkt)
                    <tr>
                        <td>{{$produkt->fastfoodID}}</td>
                        <td>{{$produkt->ProduktID}}</td>
                        <td>{{$produkt->Emer}} </td>
                        <td>{{$produkt->Çmim}}</td>
                        <td>{{$produkt->Kalori}}</td>
                        <td><img src="/img/{{$produkt->Imazh}}" width="50"></td>

                        <td>
                            <form action="{{route('create.porosi')}}" method="post">
                                @csrf
                                <input type="hidden" id="userid" name="user" value="{{ auth()->user()->id }}"><br>
                                <input type="hidden" id="fastfoodid" name="fastfood" value="{{$produkt->fastfoodID}}">
                                <input type="hidden" id="produktid" name="produkt" value="{{$produkt->ProduktID}}">
                                <input type="hidden" id="produktemer" name="emer" value="{{$produkt->Emer}}">
                                <input type="hidden" id="produktcmim" name="cmim" value="{{$produkt->Çmim}}">
                                <input type="hidden" id="produktkalori" name="kalori" value="{{$produkt->Kalori}}">
                                <label for="address">Shto Adresen</label><br>
                                <input type="text" id="address" name="address"><br>
                                <label for="sasi">Shto Sasi</label><br>
                                <input type="number" id="sasi" name="sasi"><br>
                                <button class="btn btn-danger" type="submit">Bej Porosi</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>

</body>
</html>
