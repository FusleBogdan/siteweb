<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>Site web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
   integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="css/pagina1.css">
    <script src="js/dropdown.js"></script>
  </head>
  <body>
    <?php

    include 'header1.php';
    ?>
    <section class="home" id="home">

        <div class="content">
            <h1> Colectia noua </h1>
            <a href="shop1.php" class="btn">SHOP NOW!</a>
        </div>

    </section>


    <section class="about" id="about">

        <h1 class="heading"> <span> Despre </span> noi </h1>

        <div class="row">

            <div class="video-container">
                <video src="poze/rolex.mp4" loop autoplay muted></video>
                <h3>ROLEX</h3>
            </div>

            <div class="content">
                <h3>De ce sa ne alegi?</h3>
                <p>Rolex oferă o gamă largă de modele, de la ceasuri profesionale la ceasuri clasice, care se potrivesc oricărei încheieturi. Explorați colecția Rolex selectând modelele, materialele, cadranele și brățările preferate pentru a găsi ceasul care a fost creat pentru dumneavoastră.</p>
                <a href="desprenoi1.php" class="btn">Learn more</a>
            </div>

        </div>

    </section>

    <section class="icons-container">
        <div class="icons">
            <img src="poze/icon-1.png" alt="">
            <div class="info">
                <h3>Transport gratuit</h3>
                <span>Pentru toate comenziile</span>
            </div>
        </div>

        <div class="icons">
            <img src="poze/icon-2.png" alt="">
            <div class="info">
                <h3>Garantia banilor</h3>
                <span>Returnarea banilor in  30 de zile</span>
            </div>
        </div>

        <div class="icons">
            <img src="poze/icon-3.png" alt="">
            <div class="info">
                <h3>Oferte & cadouri</h3>
                <span>Pentru toate comenziile</span>
            </div>
        </div>
    </section>

    <section class="products" id="products">

        <h1 class="heading"> Ultimele <span>produse</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="poze/ceas3.png" alt="">
                </div>
                <div class="content">
                    <h3>SKY DWELLER</h3>
                    <div class="price"> $12,000 </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="poze/ceas4.png" alt="">
                </div>
                <div class="content">
                    <h3>DATEJUST</h3>
                    <div class="price"> $18,000 </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="poze/ceas6.png" alt="">
                </div>
                <div class="content">
                    <h3>GMT MASTER II</h3>
                    <div class="price"> $7000 </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="poze/ceas1.png" alt="">
                </div>
                <div class="content">
                    <h3>PEARLMASTER</h3>
                    <div class="price"> $10,000 </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="poze/ceas9.png" alt="">
                </div>
                <div class="content">
                    <h3>CELLINI</h3>
                    <div class="price"> $2500 </div>
                </div>
            </div>

        </div>

    </section>

    <section class="icons-container">

    </section>

    <section class="footer">

        <div class="box-container">

          <div class="box">
              <h3>Legal</h3>
              <a href="#">Termeni si Conditii</a>
              <a href="#">Politica de retur</a>
              <a href="#">Politica de Confidentialitate</a>
          </div>

            <div class="box">
                <h3>Scurtaturi</h3>
                <a href="pagina1.php">Home</a>
                <a href="Despre_noi.php">About us</a>
                <a href="shop.php">Shop</a>
                <a href="login.php">Account</a>
            </div>

            <div class="box">
                <h3>Contact</h3>
                <a href="#">Telefon: 0748853217</a>
                <a href="#">Email: bogdan.fusle2@gmail.com</a>
                <a href="#">Jud. Timisoara</a>
                <img src="poze/payment.png" alt="">
            </div>

        </div>
    </section>
  </body>
  </html>
