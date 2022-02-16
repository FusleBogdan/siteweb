<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Ddevice-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css1.css">
    <script src="js/dropdown.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>Shop</title>
</head>

<body>

  <?php
  include('headers1.php');
  ?>

  <div class="container">

       <h1 class="heading">....................</h1>
     <input type="text" placeholder="search" id="search-box">

     <div class="image-container">

        <div class="image" data-title="Pearlmaster">
          <a href="#"><img src="poze/ceas1.png" alt=""></a>
           <h3>Rolex Pearlmaster</h3>
           <h2 class="h2">$10,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Yacht Master">
           <a href="#"><img src="poze/ceas2.png" alt=""></a>
           <h3>Rolex Yacht Master </h3>
           <h2 class="h2">$15,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Sky Dweller">
           <a href="#"><img src="poze/ceas3.png" alt=""></a>
           <h3>Rolex Sky Dweller</h3>
           <h2 class="h2">$12,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="DateJust">
           <a href="#"><img src="poze/ceas4.png" alt=""></a>
           <h3>Rolex DateJust</h3>
           <h2 class="h2">$18,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Day Date">
           <a href="#"><img src="poze/ceas5.png" alt=""></a>
           <h3>Rolex Day Date</h3>
           <h2 class="h2">$19,500</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="GMT">
           <a href="#"><img src="poze/ceas6.png" alt=""></a>
           <h3>Rolex GMT Master II</h3>
           <h2 class="h2">$7500</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Submariner">
           <a href="#"><img src="poze/ceas7.png" alt=""></a>
           <h3>Rolex Submariner</h3>
           <h2 class="h2">$25,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Milgauss">
           <a href="#"><img src="poze/ceas8.png" alt=""></a>
           <h3>Rolex Milgauss</h3>
           <h2 class="h2">$30,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Cellini">
           <a href="#"><img src="poze/ceas9.png" alt=""></a>
           <h3>Rolex Cellini</h3>
           <h2 class="h2">$11,500</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Air King">
           <a href="#"><img src="poze/ceas10.png" alt=""></a>
           <h3>Rolex Air King</h3>
           <h2 class="h2">$15,500</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Oyster">
           <a href="#"><img src="poze/ceas11.png" alt=""></a>
           <h3>Rolex Oyster Perpetual</h3>
           <h2 class="h2">$12,250</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="DateJust">
           <a href="#"><img src="poze/ceas12.png" alt=""></a>
           <h3>Rolex Lady DateJust </h3>
           <h2 class="h2">$16,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Cellini">
           <a href="#"><img src="poze/ceas13.png" alt=""></a>
           <h3>Rolex Cellini Date</h3>
           <h2 class="h2">$14,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Air King">
           <a href="#"><img src="poze/ceas14.png" alt=""></a>
           <h3>Rolex Air King</h3>
           <h2 class="h2">$22,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Oyster">
           <a href="#"><img src="poze/ceas15.png" alt=""></a>
           <h3>Rolex Oyster Perpetual</h3>
           <h2 class="h2">$12,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="DateJust">
           <a href="#"><img src="poze/ceas16.png" alt=""></a>
           <h3>Rolex Lady DateJust</h3>
           <h2 class="h2">$19,750</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Air King">
           <a href="#"><img src="poze/ceas17.png" alt=""></a>
           <h3>Rolex Air King II</h3>
           <h2 class="h2">$11,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

        <div class="image" data-title="Submariner">
           <a href="#"><img src="poze/ceas18.png" alt=""></a>
           <h3>Rolex Submariner Blue II</h3>
           <h2 class="h2">$25,000</h2>
           <a href="#"><button class="bn632-hover bn22">Buy now</button></a>
        </div>

     </div>

  </div>
  <script>

  let searchBox = document.querySelector('#search-box');
  let images = document.querySelectorAll('.container .image-container .image');

  searchBox.oninput = () =>{
     images.forEach(hide => hide.style.display = 'none');
     let value = searchBox.value;
     images.forEach(filter =>{
        let title = filter.getAttribute('data-title');
        if(value == title){
           filter.style.display = 'block';
        }
        if(searchBox.value == ''){
           filter.style.display = 'block';
        }
     });
  };


  </script>
</body>

</html>
