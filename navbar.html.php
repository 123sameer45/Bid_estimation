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
    /* Styles for the select tag with class */
.custom-select {
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
  appearance: none;
  width: 100%;
}

/* Styles for the option tags with class */
.custom-option {
  background-color: #fff; /* Background color */
  color: #333; /* Text color */
  padding: 5px 10px;
}

/* Styles for the option tags when hovered */
.custom-option:hover {
  background-color: #f0f0f0; /* Background color on hover */
}

/* Styles for the option tags when selected */
.custom-option:checked {
  background-color: #719ece; /* Background color of the selected option */
  color: #fff; /* Text color of the selected option */
}

</style>
<body>

  <ul class="horizontal">
    <li class=" horizontal_li" ><a class="active horizontal_li" href="http://localhost/erp/GrowMark-1.0.0/index.html">Home</a></li>
    <li class=" horizontal_li" ><a href="" ><?php  if(isset($_SESSION['username'])){ echo $_SESSION['username'] ; } else { echo "Tester" ; } ?></a></li>
    <li class=" horizontal_li" ><a href="" ><?php  if(isset($_SESSION['access'])){ echo $_SESSION['access'] ; } else { echo "Tester" ; } ?></a></li>
    <?php  if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin') { ?>
    <li class=" horizontal_li" ><a href="http://localhost/erp/allpersons.html.php" >Admin Panel</a></li> 
    <?php }  ?>
    <li class=" horizontal_li" > <a href="logout.html.php" class="menu-link">logout</a></li>
  </ul>

<ul class="vertical">

 <li class="vertical_li">
  <select class="custom-select auth" >
  <option value="1" class="custom-option">Project 1</option>
  <option value="2" class="custom-option">Project 2</option>
  <option value="3" class="custom-option">Project 3</option>
</select>

 </li>
 <?php  if(isset($_SESSION['access']) && $_SESSION['access'] == 'admin' ){ ?>
  <li class="menu-item vertical_li"><a href="jobinfo.html.php" class="menu-link active">Job Info</a></li>
                <li class="menu-item vertical_li"><a href="round.html.php" class="menu-link">Round</a></li>
                <li class="menu-item vertical_li"><a href="rectangular.html.php" class="menu-link">Rectangular</a></li>
                <li class="menu-item vertical_li"><a href="circle.html.php" class="menu-link">Circle</a></li>
                <li class="menu-item vertical_li"><a href="aluminium.html.php" class="menu-link">Aluminium</a></li>
                <li class="menu-item vertical_li"><a href="stainless_steel.html.php" class="menu-link">Stainless Steel</a></li>
                <li class="menu-item vertical_li"><a href="black_iron.html.php" class="menu-link">Black Iron</a></li>
                <li class="menu-item vertical_li"><a href="take_off_summary.html.php" class="menu-link">Take off Summary</a></li>
                <li class="menu-item vertical_li"><a href="estimate.html.php" class="menu-link">Estimate Sheet</a></li>
                <li class="menu-item vertical_li"><a href="man_hours.html.php" class="menu-link">Man Hours</a></li>
                <li class="menu-item vertical_li"><a href="liner.html.php" class="menu-link">Liner</a></li>
                <li class="menu-item vertical_li"><a href="revision_history.html.php" class="menu-link">Revision History</a></li>
                <li class="menu-item vertical_li"><a href="casco.html.php" class="menu-link">Casco</a></li>
                <li class="menu-item vertical_li"><a href="svs.html.php" class="menu-link">SVS</a></li>
                <li class="menu-item vertical_li"><a href="budget.html.php" class="menu-link">Budget</a></li>
                <li class="menu-item vertical_li"><a href="price_increase.html.php" class="menu-link">Price Increases</a></li>
              <br />
            <?php   } else if ( isset($_SESSION['access']) && $_SESSION['access'] == 'manager' )  { ?>
               <li class="menu-item vertical_li"><a href="revision_history.html.php" class="menu-link">Revision History</a></li>
               <li class="menu-item vertical_li"><a href="casco.html.php" class="menu-link">Casco</a></li>
               <li class="menu-item vertical_li"><a href="svs.html.php" class="menu-link">SVS</a></li>
               <li class="menu-item vertical_li"><a href="budget.html.php" class="menu-link">Budget</a></li>
               <li class="menu-item vertical_li"><a href="price_increase.html.php" class="menu-link">Price Increases</a></li>
          <?php   } else if ( isset($_SESSION['access']) && $_SESSION['access'] == 'engr' )  { ?>
            <li class="menu-item vertical_li"><a href="jobinfo.html.php" class="menu-link active">Job Info</a></li>
                <li class="menu-item vertical_li"><a href="round.html.php" class="menu-link">Round</a></li>
                <li class="menu-item vertical_li"><a href="rectangular.html.php" class="menu-link">Rectangular</a></li>
                <li class="menu-item vertical_li"><a href="circle.html.php" class="menu-link">Circle</a></li>
                <li class="menu-item vertical_li"><a href="aluminium.html.php" class="menu-link">Aluminium</a></li>
                <li class="menu-item vertical_li"><a href="stainless_steel.html.php" class="menu-link">Stainless Steel</a></li>
                <li class="menu-item vertical_li"><a href="black_iron.html.php" class="menu-link">Black Iron</a></li>
                <li class="menu-item vertical_li"><a href="take_off_summary.html.php" class="menu-link">Take off Summary</a></li>
                <li class="menu-item vertical_li"><a href="estimate.html.php" class="menu-link">Estimate</a></li>
                <li class="menu-item vertical_li"><a href="man_hours.html.php" class="menu-link">Man Hours</a></li>
                <li class="menu-item vertical_li"><a href="liner.html.php" class="menu-link">Liner</a></li>
            
            
          <?php  } else { ?> <li class="menu-item vertical_li"><a href="http://localhost/erp/GrowMark-1.0.0/index.html" class="menu-link active">Empty</a></li> <?php  } ?>
</ul>

</body>
</html>

