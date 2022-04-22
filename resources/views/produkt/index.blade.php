@extends('produkt.base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Produkt</h1>
            <div>
                <a href="{{ route('produkt.create')}}" class="btn btn-primary mb-3">Shto Produkt</a>
            </div>
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ProduktID</td>
                    <td>Emer</td>
                    <td>Çmim</td>
                    <td>Kalori</td>
                    <td>Imazh</td>
                    <td>Perditesuar</td>
                    <td colspan=2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($produkt as $produkt)
                    <tr>
                        <td>{{$produkt->ProduktID}}</td>
                        <td>{{$produkt->Emer}} </td>
                        <td>{{$produkt->Çmim}}</td>
                        <td>{{$produkt->Kalori}}</td>
                        <td><img src="/img/{{$produkt->Imazh}}" width="50"></td>
                        <td>{{$produkt->updated_at}}</td>
                        <td>
                            <a href="{{ route('produkt.edit',$produkt->ProduktID)}}" class="btn btn-primary">Ndrysho</a>
                        </td>
                        <td>
                            <form action="{{ route('produkt.destroy', $produkt->ProduktID)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Fshi</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
