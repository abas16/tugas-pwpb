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
  
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
 
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
  .n{
    text-align: center;
  }
.tek{
      
       padding-top: 530px ;
       padding-left: 100px;
       margin: 0px;
 
}
  </style>
</head>

<body>
  
 
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" target="_blank">
<h4><strong>kelompok1</strong></h4>
      </a>

     
      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Tugas 1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Tugas 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Tugas 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" target="_blank">Tugas 4</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
         
          <li class="nav-item">
            <a href="" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fab fa-github mr-2"></i>PWPB Tugas
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

    
  
    





    
  <!-- bagian video -->
  <div class="view">

    <video  playsinline autoplay
      muted loop>
      <source src="vd.mp4" type="video/mp4">
    </video>

    <!-- tex video-->
   < <div class="mask rgba-black-light d-flex justify-content-center align-items-center"> 
      <div class="text-center white-text mx-5 wow fadeIn">

        <h1 class="diplay-4 mb-4s">
          WELCOME TO GROUP  1
        </h1>

   <p class="border border-light my-4"></p>
     </div>
      </div>
      </div>
    



      <div class="n">
  <h1><a> BIODATA</a></h1>
</div>


<!--foto satu-->
<div class="fot">
<div style="float: left;">
 <div class="col-md-6 col-xl-5">

            <div class="card card-cascade narrower">

            
              <div class="view view-cascade overlay">
                <img src="ab.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
                    
                    <div class="card-body card-body-cascade text-center">
              
                <h4 class="card-title"><strong><?php echo $a9  ?> </strong></h4>
                </div>
                <h5> <?php echo 'umur:'; echo $a10 ?> </h5>
                <h5> <?php echo $a11 ?> </h5>
                <h5> <?php echo'tinggi badan:'; echo $a12 ?> </h5>

            
              </div>
            </div>
          </div>
        </div>
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

 <div class = "tek">
 <button type="button" class="btn btn-primary"><h5><?php echo 'rata rata:'; echo $bagi  ?></h5> </button>
</div>    


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
    

  </script>


</body>

</html>
