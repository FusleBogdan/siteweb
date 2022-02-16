<?php


if (!isset($_SESSION['username'])) {
  session_start();
}

?>
<header>
    <a href="pagina1.php"><img src="poze/logo.png"  class="logo"></a>
    <div class="dropdown" onclick="apasaDropDown();"></div>
    <nav class="dropdown_" onclick="apasaDropDown();">
        <a href="pagina2.php">Home</a>
        <a href="shop1.php">Shop</a>
        <a href="desprenoi1.php">About us</a>
        <a href="#" onclick="togglePopup()">Account</a>
        <a href="#"><i  class="fas fa-cart-plus"></i></a>
    </nav>
</header>

<div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content_">
    <div class="close-btn" onclick="togglePopup()">×</div>
      <a href="#" class="baa"> <?php echo "<p>Username:&nbsp </p>" . $_SESSION['username']; ?> </a> <br>
      <a href="logout.php" class="daa"> Logout </a>
  </div>
</div>

<script>
function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}
function apasaDropDown(){
  var dropdown = document.querySelector(".dropdown");
  var dropdown_ = document.querySelector(".dropdown_");
  dropdown_.classList.toggle("active");
  dropdown.classList.toggle("active");
}
</script>
