@extends('produkt.base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Perditeso produkt</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('produkt.update', $produkt->ProduktID) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="emer">Emer:*</label>
                    <input type="text" class="form-control" name="Emer" value="{{ $produkt->Emer }}"/>
                </div>
                <div class="form-group">
                    <label for="cmim">Çmim:*</label>
                    <input type="number" class="form-control" name="Çmim" value="{{ $produkt->Çmim }}"/>
                </div>
                <div class="form-group">
                    <label for="kalori">Kalori:*</label>
                    <input type="number" class="form-control" name="Kalori" value="{{ $produkt->Kalori }}"/>
                </div>
                <div class="form-group">
                    <label for="imazh">Imazh:*</label>
                    <input type="file" name="Imazh" class="form-control" placeholder="image">
                </div>
                <button type="submit" class="btn btn-primary">Perditeso</button>
            </form>
        </div>
    </div>
@endsection
