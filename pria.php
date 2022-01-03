<?php 
  require('config/db.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rumah Batik Rhanie</title>
  <link rel="stylesheet" type="text/css" href="plugin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/main.css">
  <link rel="icon" type="image/gif/png" href="asset/img/logo3.png">
</head>
<body>

<?php include('component/nav.php'); ?>
<div class="container-fluid" id="isi" >
  

  <div class="row">
    <div class="col-xs-4 col-xs-offset-4" id="produk-laris">
      <h3 style="font-family: Blacksword; font-size:2.2em;"><strong>Produk Laki-Laki</strong></h3>
    </div>
  </div>
  
  <!-- Laman Produk-->
  
  <div class="container" id="produk">
    <div class="tab-content">
    <img style = "margin-left: 8.5vw;" src="asset/img/cowok4.jpg">
    <img style src="asset/img/cowok2.jpg">
    <img style src="asset/img/cowok3.jpg">
    <img style src="asset/img/cowok6.jpg">
    <br>
    <br>
    <img style  = "margin-left: 24.7vw;" src="asset/img/cwk5.jpg">
    <img style src="asset/img/cwk1.jpg">
            </div>

    
  </div>
  <!-- kontent end of produkumum -->
</div>



<?php include('component/footer.php'); ?>


<script type="text/javascript" src="plugin/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="plugin/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>