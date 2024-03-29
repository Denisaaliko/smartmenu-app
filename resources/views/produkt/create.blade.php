@extends('produkt.base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Shto Produkt</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br/>
                @endif
                <form method="post" action="{{ route('produkt.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="emer">Emer:*</label>
                        <input type="text" class="form-control" name="Emer" required/>
                    </div>
                    <div class="form-group">
                        <label for="cmim">Çmim:*</label>
                        <input type="number" class="form-control" name="Çmim" required/>
                    </div>
                    <div class="form-group">
                        <label for="kalori">Kalori:*</label>
                        <input type="number" class="form-control" name="Kalori" required/>
                    </div>
                    <div class="form-group">
                        <label for="image">Imazh:*</label>
                        <input type="file" name="Imazh" class="form-control" placeholder="image">
                    </div>


                    <button type="submit" class="btn btn-primary">Ruaj </button>
                </form>
            </div>
        </div>
    </div>
@endsection
