<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTMENU</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,700&display=swap"
        rel="stylesheet">
    <!-- icon -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<!--<div class="position-relative">
    <div class="position-absolute">
        <nav class="navbar position-fixed w-100 navbar-expand-lg back navbar-light bg-transparent ">-->
<!-- Nis navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img
            src="https://images.unsplash.com/photo-1530554764233-e79e16c91d08?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80 "
            alt="Logo" style="width:50px;" class="rounded-pill">
        <a class="navbar-brand" href="/">SMARTMENU

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">KREU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/klient">MENU</a>
                </li>
                <li class="nav-item">
                    @if(auth()->user())
                        <form action="/logout" method="post">
                            @csrf
                            <button class="nav-link" type="submit">LOG OUT</button>
                        </form>
                    @else
                        <a class="nav-link" href="/login">LOG IN</a>
                    @endif
                </li>
                @if(!auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="/register">REGJISTROHU</a>
                    </li>
                @endif

            </ul>


        </div>
    </div>
</nav>
@yield("content")
<!--footer-->
<footer class="bg-light py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 ps-5 ">
                <h3 class="fs-3 fw-bold text-dark"><a href="" class="text-decoration-none text-dark">SMARTMENU</a>
                </h3>
                <p>Mund te mos keni mjaftueshem kohe per te drekuar apo darkuar ne fast food-et e preferuara apo per ta
                    pergatitur ushqimin ne shtepi cdo dite te javes. Mund te jeni ne shtepi, pune, shkolle, park . Ne ju
                    ofrojme lehtesia qe mund te porositni online pa asnje tarife shtese, ushqimin e shpejt dhe te
                    preferuar vetem me disa hapa te thjeshte pavaresisht nga vendodhja.
                    Nje nga prioritet, sic cdo njeri qe dashuron ushqimet e shpejta, eshte shpejtesia e ushqimit dhe
                    servirja e ngrohte e tij . SMARTMENU ju garanton shpejtesi, besueshmeri dhe cilesi maksimale. </p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center align-content-center
            ">
                <div>
                    <h3 class="ps-5">KOMPANIA</h3>
                    <ul class="list-unstyled ps-5 lh-lg">
                        <li><a href="" class="text-decoration-none text-dark">Rreth nesh </a></li>
                        <li><a href="" class="text-decoration-none text-dark">Sherbimet </a></li>
                        <li><a href="" class="text-decoration-none text-dark">Menu</a></li>
                        <li><a href="/register" class="text-decoration-none text-dark">REGJISTROHU</a></li>
                        <li><a href="/login" class="text-decoration-none text-dark">LOG IN</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 ps-5 d-flex justify-content-center align-content-center">
                <div>
                    <h3 class="ps-5">PRODUKTE</h3>
                    <ul class="list-unstyled ps-5 lh-lg">
                        <li><a href="" class="text-decoration-none text-dark">BURGER</a></li>
                        <li><a href="" class="text-decoration-none text-dark">PASTA</a></li>
                        <li><a href="" class="text-decoration-none text-dark">PICA</a></li>
                        <li><a href="" class="text-decoration-none text-dark">SALLATE</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center align-content-center ">
                <div>
                    <h3 class="ps-5">ORARI</h3>
                    <ul class="list-unstyled ps-5 lh-lg">
                        <li><a href="" class="text-decoration-none text-dark">HENE-PREMTE 9:00-11:00 </a></li>
                        <li><a href="" class="text-decoration-none text-dark">FUNDJAVA 10:00 DERI 12:00</a></li>
                        <li><a href="" class="text-decoration-none text-dark">KONTAKTI +355692233344</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="js/like.js"></script>
</body>

</html>
