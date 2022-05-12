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
                <td>FastfoodID</td>
                <td>PerdoruesID</td>
                <td>Data</td>
                <td>Adresa</td>
                <td>Statusi</td>
                <td colspan=2>Veprime</td>
            </tr>
            </thead>
            <tbody>
            @foreach($porosi as $porosi)
                <tr>
                    <td>{{$porosi->PorosiID}}</td>
                    <td>{{$porosi->PerdoruesID}}</td>
                    <td>{{$porosi->fastfoodID}} </td>
                    <td>{{$porosi->Adresa}}</td>
                    <td>{{$porosi->Status}}</td>

                    <td>
                        <form action="{{route('update.porosi',$porosi->PorosiID)}}" method="post">
                            @csrf
                            <input type="hidden" id="userid" name="user" value="{{ auth()->user()->id }}"><br>
                            <input type="hidden" id="fastfoodid" name="fastfood" value="{{$porosi->fastfoodID}}">
                            <input type="hidden" id="porosiid" name="porosi" value="{{$porosi->PorosiID}}">
                            <input type="hidden" id="adress" name="address" value="{{$porosi->Adresa}}">
                            <input type="hidden" id="data" name="data" value="{{$porosi->Data}}">
                            <input type="hidden" id="sasia" name="sasi" value="{{$porosi->Sasi}}">
                            <input type="hidden" id="statusi" name="statusi" value="{{$porosi->Status}}">
                            <label for="statusi">Statusi</label>
                            <select name="statusi" id="statusi">
                                <option value="derguar">Derguar</option>
                                <option value="anulluar">Anulluar</option>
                                <option value="unis">U nis</option>
                            </select>
                            <button class="btn btn-danger" type="submit">Ndrysho</button>

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
