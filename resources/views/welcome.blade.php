<html>
<head>
    <title>Smart Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <style>
        body, html {height: 100%}
        body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
        .menu {display: none}
        .bgimg {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80 ");
            min-height: 90%;
        }
    </style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="#" class="w3-bar-item w3-button">HOME</a>
        <a href="#what's new" class="w3-bar-item w3-button">What's New</a>
        <a href="#our restaurants" class="w3-bar-item w3-button">Our Restaurants</a>
        <a href="#menu" class="w3-bar-item w3-button">MENU</a>
        <a href="#about" class="w3-bar-item w3-button">ABOUT Us</a>
        <a href="#contact" class="w3-bar-item w3-button">CONTACT</a>
        <a href="/login" class="w3-bar-item w3-button">Log In</a>
        <a href="/register" class="w3-bar-item w3-button">Register</a>

    </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-padding">
        <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
    </div>
    <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font:300px;>“I STILL EAT A BURGER <br>AT A COUNTER WITH KETCHUP<br> DRIPPING DOWN MY FACE.” <br> Scarlett Johansson </span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font: size 100px;"><b>thin<br>CRUST PIZZA</b></span>
        <p><a href="#menu" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
    </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
    <div class="w3-content">

        <h1 class="w3-center w3-jumbo" style="margin-bottom:64px"> MENU</h1>
        <div class="w3-row w3-center w3-border w3-border-dark-grey">
            <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
                <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pizza</div>
            </a>
            <a href="javascript:void(0)" onclick="openMenu(event, 'Burgers');">
                <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Burgers</div>
            </a>
            <a href="javascript:void(0)" onclick="openMenu(event, 'Salad');">
                <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Salad</div>
            </a>
        </div>

        <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
            <h1><b>Margherita</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$12.50</span></h1>
            <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
            <hr>

            <h1><b>Formaggio</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$15.50</span></h1>
            <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
            <hr>

            <h1><b>Chicken</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$17.00</span></h1>
            <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
            <hr>

            <h1><b>Pineapple'o'clock</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$16.50</span></h1>
            <p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
            <hr>

            <h1><b>Meat Town</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">$20.00</span></h1>
            <p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
            <hr>

            <h1><b>Parma</b> <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">$21.50</span></h1>
            <p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
        </div>

        <div id="Burgers" class="w3-container menu w3-padding-32 w3-white">
            <h1><b>Chicken </b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
            <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
            <hr>

            <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
            <p class="w3-text-grey">Ravioli filled with cheese</p>
            <hr>

            <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
            <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
            <hr>

            <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
            <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
        </div>


        <div id="Salad" class="w3-container menu w3-padding-32 w3-white">
            <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
            <p class="w3-text-grey">Ask the waiter</p>
            <hr>

            <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
            <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
            <hr>

            <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$9.50</span></h1>
            <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
            <hr>

            <h1><b>Tomozzarella</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
            <p class="w3-text-grey">Tomatoes and mozzarella</p>
        </div><br>

    </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
    <div class="w3-content">
        <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
        <p>Historia e websitet nisi nga 5 studente te cilat kishin nje dashuri te vecante per ushqimet e shpejta.
            Ju mund te mos keni mjaftueshem kohe per te drekuar apo darkuar ne  fast food-et e preferuara apo per ta pergatitur ushqimin ne shtepi cdo dit te javes. Mund te jeni ne shtepi, pune, shkolle, park etj.
            Pikerisht kjo eshte cfare menduam kur na erdhi ne mendje per te krijuar website-in, lehtesia qe mund ti ofrohet dikujt te porosis online pa asnje tarif shtese, ushqimin e shpejt dhe  te preferuar vetem me disa hapa te thjesht pavaresisht nga vendodhja.
            Nje nga prioritet, sic do njeri qe dashuron ushqimet e shpejta, eshte shpejtesia e ushqimit dhe servirja e ngroht e tij.Website yne ju garanton shpejtesi, besueshmeri dhe cilesi maksimale. </p>
        <img src="https://images.unsplash.com/photo-1610614819513-58e34989848b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80 " style="width:50%" class="w3-margin-top w3-margin-bottom" alt="Porosi Online">
        <h1><b>Opening Hours</b></h1>

        <div class="w3-row">
            <div class="w3-col s6">
                <p>Every Day 9:00 AM-12:00 PM</p>

            </div>
        </div>

    </div>
</div>

<!-- Image of location/map -->
<img src="https://images.unsplash.com/photo-1571407970349-bc81e7e96d47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80 " class="w3-image w3-greyscale" style="width 100%" id="myMap">

<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
    <div class="w3-content">
        <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
        <p>You can call us at 05050515-122330</p>
        <p><a href="https://www.instagram.com/ ">Visit Instagram </a></p>
        <p><a href="https://www.facebook.com/ ">Visit Facebook</a></p>
        <!--<p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
        <p class="w3-xxlarge"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
          <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
          <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
          <p><button class="w3-button w3-light-grey w3-block" type="submit">SEND MESSAGE</button></p> -->
        </form>
    </div>
</div>

<!-- Footer -->


<script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-red";
    }
    document.getElementById("myLink").click();
</script>

</body>
</html>
