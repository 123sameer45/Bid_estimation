<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="navbar.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>


</style>
<body>


  <ul class="horizontal" style="background : #48494B !important;z-index:1;">
  <li class=" horizontal_li" > <a style="color : white !important" class="sheets">Sheets</a></li>
  <li style="color : white !important" class=" horizontal_li bid_class"> Bid Estimator</li>
    <li class=" horizontal_li" style="margin-left:20%;"><a style="color : white !important" class="active " href="http://localhost/erp/GrowMark-1.0.0/index.html">Home</a></li>
    <li class=" horizontal_li" ><a style="color : white !important" href="" ><?php  if(isset($_SESSION['username'])){ echo $_SESSION['username'] ; } else { echo "Tester" ; } ?></a></li>
    <li class=" horizontal_li" ><a style="color : white !important" href="" ><?php  if(isset($_SESSION['access'])){ echo $_SESSION['access'] ; } else { echo "Tester" ; } ?></a></li>
    <?php  if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin') { ?>
    <li class=" horizontal_li" ><a style="color : white !important" href="http://localhost/erp/allpersons.html.php" >Admin Panel</a></li> 
    <?php } if(isset($_SESSION['access'])) {?>
    <li class=" horizontal_li" > <a style="color : white !important" href="logout.html.php" class="menu-link">logout</a></li>

    <?php  } ?>
  </ul>

<ul class="vertical" style="background-color: #48494B !important; ">

 <?php  if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin' ){ ?>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="jobinfo.html.php" class="menu-link ">Job Info</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="round.html.php" class="menu-link">Round</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="rectangular.html.php" class="menu-link">Rectangular</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="circle.html.php" class="menu-link">Circle</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="aluminium.html.php" class="menu-link">Aluminium</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="stainless_steel.html.php" class="menu-link">Stainless Steel</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="black_iron.html.php" class="menu-link">Black Iron</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="take_off_summary.html.php" class="menu-link">Take off Summary</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="estimate.html.php" class="menu-link">Estimate Sheet</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="man_hours.html.php" class="menu-link">Man Hours</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="liner.html.php" class="menu-link">Liner</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="revision_history.html.php" class="menu-link">Revision History</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="casco.html.php" class="menu-link">Casco</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="svs.html.php" class="menu-link">SVS</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="budget.html.php" class="menu-link">Budget</a></li>
  <li class="menu-item vertical_li"><a style="color : #fff !important;" href="price_increase.html.php" class="menu-link">Price Increases</a></li>
  <br/>
  
<?php   } else if ( isset($_SESSION['access']) && $_SESSION['access'] == 'user' )  { ?>
  <li class="menu-item vertical_li"><a href="jobinfo.html.php" class="menu-link active">Job Info</a></li>
  <li class="menu-item vertical_li"><a href="round.html.php" class="menu-link">Round</a></li>
  <li class="menu-item vertical_li"><a href="rectangular.html.php" class="menu-link">Rectangular</a></li>
  <li class="menu-item vertical_li"><a href="circle.html.php" class="menu-link">Circle</a></li>
  <li class="menu-item vertical_li"><a href="aluminium.html.php" class="menu-link">Aluminium</a></li>
  <li class="menu-item vertical_li"><a href="stainless_steel.html.php" class="menu-link">Stainless Steel</a></li>
  <li class="menu-item vertical_li"><a href="black_iron.html.php" class="menu-link">Black Iron</a></li>
  <li class="menu-item vertical_li"><a href="take_off_summary.html.php" class="menu-link">Take off Summary</a></li>
  <li class="menu-item vertical_li"><a href="casco.html.php" class="menu-link">Casco</a></li>
  <li class="menu-item vertical_li"><a href="svs.html.php" class="menu-link">SVS</a></li>
  <li class="menu-item vertical_li"><a href="price_increase.html.php" class="menu-link">Price Increases</a></li>
        
<?php  } else { ?> <li class="menu-item vertical_li"><a href="http://localhost/erp/GrowMark-1.0.0/index.html" class="menu-link active">Empty</a></li> <?php  } ?>
</ul>

</body>
</html>
<script>
 
    $(document).ready(function(){
      $(".sheets").click(function(){
        $(".vertical").animate({width: 'toggle'});
      });

     

    });

</script>
