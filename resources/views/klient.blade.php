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
        <div class="container">
            <h4 class="text-center mt-4">Kerko</h3>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Kerko Produkt"
                                                       id="search">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row" id="produktet">
            @foreach($produkt as $produkt)
                <div class="col-12 col-md-6 col-lg-3 mt-5 hide" id="{{ $produkt->Emer }}">
                    <div class="card h-100 p-2 bg-light border-0">
                        <img src="/img/{{$produkt->Imazh}}" class="card-img-top mt-3 img-fluid prod" alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bolder mt-3">{{$produkt->Emer}}</h4>
                            <p class="card-text fw-bold mt-3 fs-3">{{$produkt->Çmim}}LEK</p>
                            <p class="card-title fw-bolder mt-3">{{$produkt->fEmer}}</p>
                            <p class="card-text fw-bold mt-3 fs-3">Adresa: '{{$produkt->Vendndodhje}}'</p>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $(function(){ // this will be called when the DOM is ready
        $('#search').keyup(function() {
            search();
        });
    });
    search();

    function search() {
        var keyword = $('#search').val();
        console.log(keyword);
        $.post('{{ route("search") }}',
            {
                keyword: keyword
            },
            function (data) {
                table_post_row(data);
                console.log(data);
            });
    }

    // table row with ajax
    function table_post_row(res) {
        $('.hide').hide();
        for (let i = 0; i < res.produkt.length; i++) {
            $('#' + res.produkt[i].Emer).show();
        }
    }
</script>
