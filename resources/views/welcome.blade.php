@extends("layouts.main")
@section("content")
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1610614819513-58e34989848b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80 " alt="..." class="d-block " style="width:100%" >
                <div class="carousel-caption d-none d-md-block">
                    <h3>SMART MENU</h3>
                    <p>“I STILL EAT A BURGER <br> AT A COUNTER WITH KETCHUP <br> DRIPPING DOWN MY FACE.”  </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1617347454431-f49d7ff5c3b1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=815&q=80 " alt="..." class="d-block" style="width:100%">
                <div class="carousel-caption d-none d-md-block">
                    <h3>TRANSPORTI FALAS</h3>
                    <p>Paguaj ne momentin qe merr porosine.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1625940951329-4e8d09f87692?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80 " alt="New York" class="d-block" style="width:100%">
                <div class="carousel-caption d-none d-md-block ">
                    <h3>SHERBYER ME SHUME DASHURI </h3>
                    <p>Shije perfekte dhe cilesi maksimale </p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container-fluid mt-3">

    </div>
@endsection
