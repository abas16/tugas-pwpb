<?php
$a1 = "mahmud abas";
$a2 = 15;
$a3 = " hobby: berenang";
$a4 = 166;

$a8 = "ira aulia sari";
$a7 = 16;
$a6 = " hobby: berenang";
$a5 = 156;

$a9  = "natasya putri azzahra";
$a10 = 16;
$a11 = " hobby: main congklak";
$a12 = 151;

  $jumlah = $a4 + $a5;
  $bagi = $jumlah/3;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>tugas pwpb</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
  .navbar{
    background-color: #343a40;
  }
  .tuis{
      padding-top: 150px;
      text-align: center;
      margin-bottom: 100px;
  }
.t{
      padding-top: 10px;
      padding-left: 200px;
      color:#343a40;
  }
  .tek{
    padding-left: 300px;
    padding-top: 500px;
  }
  .v{
    margin-bottom: 100px;
  }
  .d{
    margin-top: 750px;
    text-align: center;
    background-color: #343a40;
    color: white;
  }

  </style>
</head>

<body>

  <!-- Navbar -->
  <div class="navbar">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" target="_blank">
        <strong>kelompok 1</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tugas1.php" target="_blank">tugas 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">tugas 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">tugas 3</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://github.com/abas16" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fab fa-github mr-2"></i> GitHub
            </a>
          </li>
        </ul>

      </div>

    </div>
    </div>
  </nav>
  <!-- Navbar -->

  <div class="tuis">
       <h1>❤selamat datang di tugas pertama❤</h1>

      
</div>


<!-- foto 2-->
<div style="float: right;">
<div class="col-md-6 col-xl-5">

          
            <div class="card card-cascade narrower">

              <div class="view view-cascade overlay">

                <img src="cd.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
         
              <div class="card-body card-body-cascade text-center">
           
              <h4 class="card-title"><strong><?php echo $a1  ?> </strong></h4>
                </div>
                <h5> <?php echo 'umur:'; echo $a2 ?> </h5>
                <h5> <?php echo $a3 ?> </h5>
                <h5> <?php echo'tinggi badan:'; echo $a4 ?> </h5>

                
              </div>
            </div>
          </div>
        </div>
</div>



<!-- foto 3-->

<div style="float: left;">

<div class="col-md-6 col-xl-5">

            <div class="card card-cascade narrower">

              <div class="view view-cascade overlay">
                <img src="bc.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="card-body card-body-cascade text-center">
              
              <h4 class="card-title"><strong><?php echo $a8  ?> </strong></h4>
                </div>
                <h5> <?php echo 'umur:'; echo $a7 ?> </h5>
                <h5> <?php echo $a6 ?> </h5>
                <h5> <?php echo'tinggi badan:'; echo $a5?> </h5>

              </div>
            </div>
          </div>
        </div>
</div>


<!-- foto 1-->
<div style="float: right;">
<div class="col-md-6 col-xl-5">

          
            <div class="card card-cascade narrower">

              <div class="view view-cascade overlay">

                <img src="ab.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
         
              <div class="card-body card-body-cascade text-center">
           
              <h4 class="card-title"><strong><?php echo $a9 ?> </strong></h4>
                </div>
                <h5> <?php echo 'umur:'; echo $a10 ?> </h5>
                <h5> <?php echo $a11 ?> </h5>
                <h5> <?php echo'tinggi badan:'; echo $a12 ?> </h5>

                
              </div>
            </div>
          </div>
        </div>
</div>


 <div class = "tek">
 <button type="button" class="btn btn-primary"><h5><?php echo 'rata rata:'; echo $bagi  ?></h5> </button>
</div>  
 <!--Footer-->
   <footer class="page-footer text-center font-small wow fadeIn">

<div class="d">
    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-5">
      <a href="" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fab fa-github mb-8"></i>
      </a>

    </div>

    <div class="footer-copyright py-3">
    ©
      <a href="" target="_blank">  kelompok 1 pasti kece 2019 </a>
    </div>
  </div>

  </footer>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  </body>
  </html>
