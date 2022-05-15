@extends("layouts.main")
@section("content")

    <div class="container my-5 pt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="my-5 text-center">
            <h3 class="text-uppercase fw-light">Produkte </h3>
            <h2 class="fs-1">Shije dhe cilesi</h2>
        </div>
        <div class="row">
            @foreach($produkt as $produkt)
                <div class="col-12 col-md-6 col-lg-3 mt-5">
                    <div class="card h-100 p-2 bg-light border-0">
                        <img src="/img/{{$produkt->Imazh}}" class="card-img-top mt-3 img-fluid prod" alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bolder mt-3">{{$produkt->Emer}}</h4>
                            <p class="card-text fw-bold mt-3 fs-3">{{$produkt->Çmim}}LEK</p>
                            <div class="mt-3">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
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
                                <button class="btn btn-outline-info" type="submit">BLI TANI</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
