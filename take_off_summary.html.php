<<<<<<< HEAD
<?php require  "navbar.html.php"; 

if(isset($_REQUEST['tossubmit'])){

    $tosb8 = floatval(isset($_SESSION['rounde2']) ? $_SESSION['rounde2'] : '');
    $tosc8 = floatval(isset($_SESSION['roundn2']) ? $_SESSION['roundn2'] : '');

    $tosd8 = floatval(isset($_SESSION['rectf3']) ? $_SESSION['rectf3'] : '');
    $tose8 = floatval(isset($_SESSION['rectp3']) ? $_SESSION['rectp3'] : '');
    $tosf8 = floatval(isset($_SESSION['rectp4']) ? $_SESSION['rectp4'] : '');
    $tosg8 = floatval(isset($_SESSION['rectz3']) ? $_SESSION['rectz3'] : '');
    $tosh8 = floatval(isset($_SESSION['rectz4']) ? $_SESSION['rectz4'] : '');
    $tosi8 = floatval(isset($_SESSION['rectaj4']) ? $_SESSION['rectaj4'] : '');
    $tosj8 = floatval(isset($_SESSION['rectaj4']) ? $_SESSION['rectaj4'] : '');

    $tosk8 = floatval(isset($_SESSION['circlef2']) ? $_SESSION['circlef2'] : '');
    $tosl8 = floatval(isset($_SESSION['circlem2']) ? $_SESSION['circlem2'] : '');

    $tosm8 = floatval(isset($_SESSION['ssau3']) ? $_SESSION['ssau3'] : '');
    $tosn8 = floatval(isset($_SESSION['ssau4']) ? $_SESSION['ssau4'] : '');
    
    $toso8 = floatval(isset($_SESSION['blacki3']) ? $_SESSION['blacki3'] : '');
    $tosp8 = floatval(isset($_SESSION['blacki4']) ? $_SESSION['blacki4'] : '');

    $tosa7 = floatval($_REQUEST['tosa7']) / 100;
    $tosb5 = $tosb8  +   floatval($_REQUEST['tosb9'])  ;
    $tosb7 = ($tosb5 * $tosa7)+ $tosb5;
    $tosc5 = $tosc8  +   floatval($_REQUEST['tosc9'])  ;
    $tosc7 = ($tosc5 * $tosa7)+ $tosc5;
    $tosf5 = $tosf8  +   floatval($_REQUEST['tosf9'])  ;
    $tosh5 = $tosh8  +   floatval($_REQUEST['tosh9'])  ;
    $tosi5 = $tosi8  +   floatval($_REQUEST['tosi9'])  ;
    $tosj5 = $tosj8  +   floatval($_REQUEST['tosj9'])  ;
    $tosd5 = $tosd8 + floatval($_REQUEST['tosd9']);
    $tose5 = $tose8 + floatval($_REQUEST['tose9']);
    $tosg5 = $tosg8 + floatval($_REQUEST['tosg9']);
    $tosd6 = array_sum([$tosd5, $tose5, $tosg5]);
    $tosd7 = ($tosd6 * $tosa7)+ $tosd6;
    $tosf7 = ($tosf5 * $tosa7)+ $tosf5;
    $tosh7 = ($tosh5 * $tosa7)+ $tosh5;
    $tosj7 = ($tosj5 * $tosa7)+ $tosj5;
    $tosk5 = floatval(isset($_SESSION['circlef2']) ? $_SESSION['circlef2'] : '');
    $tosk7 = ($tosk5 * $tosa7)+ $tosk5;
    $tosl5 = floatval(isset($_SESSION['circlem2']) ? $_SESSION['circlem2'] : '');
    $tosl7 = ($tosl5 * $tosa7)+ $tosl5;
    $tosm5 = $tosm8  +   floatval($_REQUEST['tosm9'])  ;
    $tosm7 = ($tosm5 * $tosa7)+ $tosm5;
    $tosn5 = $tosn8  +   floatval($_REQUEST['tosn9'])  ;
    $tosn7 = ($tosn5 * $tosa7)+ $tosn5;
    $toso5 = $toso8  +   floatval($_REQUEST['toso9'])  ;
    $toso7 = ($toso5 * $tosa7)+ $toso5;
    $tosp5 = $tosp8  +   floatval($_REQUEST['tosp9'])  ;
    $tosp7 = ($tosp5 * $tosa7)+ $tosp5;

    $tost5 = floatval(isset($_SESSION['recta7']) ? $_SESSION['recta7'] : '');
    $tosv5 = $tost5 / 30;

    $tosv6ceil = (floatval($_REQUEST['tosv3']) + floatval($_REQUEST['tosv4']))  + $tosv5;
    $tosv6 = ceil($tosv6ceil);

    $tosr5 = array_sum([isset($_SESSION['rounds2']) ? $_SESSION['rounds2'] : '' ,
                        isset($_SESSION['recte7']) ? $_SESSION['recte7'] : '' ,
                        isset($_SESSION['recto7']) ? $_SESSION['recto7'] : '' ,
                        isset($_SESSION['rectai7']) ? $_SESSION['rectai7'] : '' ,
                        isset($_SESSION['circleq2']) ? $_SESSION['circleq2'] : '' ,
                        isset($_SESSION['alume8']) ? $_SESSION['alume8'] : '' ,
                        isset($_SESSION['ssat7']) ? $_SESSION['ssat7'] : '' ,
                        isset($_SESSION['blacke7']) ? $_SESSION['blacke7'] : '' ]);

    $toss5 = floatval(isset($_SESSION['recty7']) ? $_SESSION['recty7'] : '-');
    $tost5 = floatval(isset($_SESSION['recta7']) ? $_SESSION['recta7'] : '-');


    $tosb2 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-' ;
}

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take off summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

</style>
<body>
    <div class="section">
    <form action="" method="POST">
        <!-- <h1>DUCT TAKE OFF SUMMARY</h1> -->
        <table class="table1" border="1">
        <tr style="position:sticky;top:0;background-color:white;">
                <td></td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>F</td>
                <td>G</td>
                <td>H</td>
                <td>I</td>
                <td>J</td>
                <td>K</td>
                <td>L</td>
                <td>M</td>
                <td>N</td>
                <td>O</td>
                <td>P</td>
                <td>Q</td>
                <td>R</td>
                <td>S</td>
                <td>T</td>
                <td>U</td>
                <td>V</td>
            </tr>
            <tr>
                <td colspan="23"><b>DUCT TAKE OFF SUMMARY</b></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">2</td>
                <td>JOB:</td>
                <td><input type="text" name="tosb2" class="custom-input" readonly value="<?php if(isset($tosb2)){ echo $tosb2 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Date:</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">3</td>
                <td>SHEET #</td>
                <td colspan="2">ROUND DUCT</td>
                <td>NO LINE</td>
                <td colspan="2">(1") LINED RECT</td>
                <td colspan="2">(2") LINED RECT Outdoor</td>
                <td colspan="2">(2") LINED RECT Indoor</td>
                <td colspan="2">CIRCLE LINED</td>
                <td colspan="2">STNL STEEL (FUME)</td>
                <td colspan="2">BLACK STEEL (GREASE)</td>
                <td></td>
                <td>Total</td>
                <td>Total</td>
                <td>Total</td>
                <td># Change Direction</td>
                <td><input type="text" name="tosv3" value="<?php  if(isset($_REQUEST['tosv3'])){ echo $_REQUEST['tosv3'] ; } else { echo 0 ;} ?>" ></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">4</td>
                <td>BLDG.</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td>LBS.</td>
                <td>LBS.</td>
                <td>SQ. FT.</td>
                <td>LBS.</td>
                <td>SQ. FT.</td>
                <td>LBS.</td>
                <td>SQ. FT.</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td></td>
                <td>LF</td>
                <td>ROOF LF</td>
                <td>Seismic</td>
                <td>Seismic Turns</td>
                <td><input type="text" name="tosv4" value="<?php if(isset($_REQUEST['tosv4'])){ echo $_REQUEST['tosv4'] ;}else { echo 0 ;} ?>" ></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">5</td>
                <td>TOTAL</td>
                <td><input type="text" name="tosb5" readonly value="<?php if(isset($tosb5)){ echo $tosb5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosc5" readonly value="<?php if(isset($tosc5)){ echo $tosc5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosd5" readonly value="<?php if(isset($tosd5)){ echo $tosd5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tose5" readonly value="<?php if(isset($tose5)){ echo $tose5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosf5" readonly value="<?php if(isset($tosf5)){ echo $tosf5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosg5" readonly value="<?php if(isset($tosg5)){ echo $tosg5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosh5" readonly value="<?php if(isset($tosh5)){ echo $tosh5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosi5" readonly value="<?php if(isset($tosi5)){ echo $tosi5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosj5" readonly value="<?php if(isset($tosj5)){ echo $tosj5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosk5" readonly value="<?php if(isset($tosk5)){ echo $tosk5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosl5" readonly value="<?php if(isset($tosl5)){ echo $tosl5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosm5" readonly value="<?php if(isset($tosm5)){ echo $tosm5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosn5" readonly value="<?php if(isset($tosn5)){ echo $tosn5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="toso5" readonly value="<?php if(isset($toso5)){ echo $toso5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosp5" readonly value="<?php if(isset($tosp5)){ echo $tosp5 ;} else { echo 0 ;} ?>"></td>
                <td></td>
                <td><input type="text" name="tosr5" readonly value="<?php if(isset($tosr5)){ echo $tosr5 ;  } else { echo 0 ;}  ?>"></td>
                <td><input type="text" name="toss5" readonly value="<?php if(isset($toss5)){ echo $toss5 ;  } else { echo 0 ;}  ?>"></td>
                <td><input type="text" name="tost5" readonly value="<?php if(isset($tost5)){ echo $tost5 ;  } else { echo 0 ;}  ?>"></td>
                <td></td>
                <td><input type="text" name="tosv5" readonly value="<?php  if(isset($tosv5)){ echo $tosv5 ;}else { echo 0 ;} ?>"></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">6</td>
                <td></td>
                <td colspan="2">Rectangular LBS Total>>>>>></td>
                <td><input type="text"cname="tosd6" readonly value="<?php if(isset($tosd6)){ echo $tosd6;} else { echo 0 ;}  ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Result</td>
                <td><input type="text" name="tosv6" readonly value="<?php  if(isset($tosv6)){ echo $tosv6;}else { echo 0 ;} ?>"></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">7</td>
                <td><input type="text"  name="tosa7"  value="<?php  if(isset($_REQUEST['tosa7'])){ echo $_REQUEST['tosa7'];} ?>"></td>
                <td><input type="text"  name="tosb7" readonly value="<?php  if(isset($tosb7)){ echo $tosb7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosc7" readonly value="<?php  if(isset($tosc7)){ echo $tosc7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosd7" readonly value="<?php  if(isset($tosd7)){ echo $tosd7;} else{ echo 0 ;} ?>"></td>
                <td ></td>
                <td><input type="text"  name="tosf7" readonly value="<?php  if(isset($tosf7)){ echo $tosf7;} else{ echo 0 ;} ?>"></td>
                <td ></td>
                <td><input type="text"  name="tosh7" readonly value="<?php  if(isset($tosh7)){ echo $tosh7;} else{ echo 0 ;} ?>"></td>
                <td ></td>
                <td><input type="text"  name="tosj7" readonly value="<?php  if(isset($tosj7)){ echo $tosj7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosk7" readonly value="<?php  if(isset($tosk7)){ echo $tosk7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosl7" readonly value="<?php  if(isset($tosl7)){ echo $tosl7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosm7" readonly value="<?php  if(isset($tosm7)){ echo $tosm7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosn7" readonly value="<?php  if(isset($tosn7)){ echo $tosn7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="toso7" readonly value="<?php  if(isset($toso7)){ echo $toso7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosp7" readonly value="<?php  if(isset($tosp7)){ echo $tosp7;} else{ echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position: sticky; left:0;  background-color: white;">8</td>
                <td><input type="text" name="tosa8" value="<?php  if(isset($_REQUEST['tosa8'])){ echo $_REQUEST['tosa8'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosb8" readonly value="<?php  if(isset($tosb8)){ echo $tosb8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosc8" readonly value="<?php  if(isset($tosc8)){ echo $tosc8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosd8" readonly value="<?php  if(isset($tosd8)){ echo $tosd8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tose8" readonly value="<?php  if(isset($tose8)){ echo $tose8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosf8" readonly value="<?php  if(isset($tosf8)){ echo $tosf8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosg8" readonly value="<?php  if(isset($tosg8)){ echo $tosg8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosh8" readonly value="<?php  if(isset($tosh8)){ echo $tosh8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosi8" readonly value="<?php  if(isset($tosi8)){ echo $tosi8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosj8" readonly value="<?php  if(isset($tosj8)){ echo $tosj8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosk8" readonly value="<?php  if(isset($tosk8)){ echo $tosk8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosl8" readonly value="<?php  if(isset($tosl8)){ echo $tosl8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosm8" readonly value="<?php  if(isset($tosm8)){ echo $tosm8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosn8" readonly value="<?php  if(isset($tosn8)){ echo $tosn8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="toso8" readonly value="<?php  if(isset($toso8)){ echo $toso8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosp8" readonly value="<?php  if(isset($tosp8)){ echo $tosp8;} else{ echo 0;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position: sticky; left:0;  background-color: white;">9</td>
                <td><input type="text" name="tosa9" value="<?php  if(isset($_REQUEST['tosa9'])){ echo $_REQUEST['tosa9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosb9" value="<?php  if(isset($_REQUEST['tosb9'])){ echo $_REQUEST['tosb9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosc9" value="<?php  if(isset($_REQUEST['tosc9'])){ echo $_REQUEST['tosc9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosd9" value="<?php  if(isset($_REQUEST['tosd9'])){ echo $_REQUEST['tosd9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tose9" value="<?php  if(isset($_REQUEST['tose9'])){ echo $_REQUEST['tose9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosf9" value="<?php  if(isset($_REQUEST['tosf9'])){ echo $_REQUEST['tosf9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosg9" value="<?php  if(isset($_REQUEST['tosg9'])){ echo $_REQUEST['tosg9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosh9" value="<?php  if(isset($_REQUEST['tosh9'])){ echo $_REQUEST['tosh9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosi9" value="<?php  if(isset($_REQUEST['tosi9'])){ echo $_REQUEST['tosi9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosj9" value="<?php  if(isset($_REQUEST['tosj9'])){ echo $_REQUEST['tosj9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosk9" value="<?php  if(isset($_REQUEST['tosk9'])){ echo $_REQUEST['tosk9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosl9" value="<?php  if(isset($_REQUEST['tosl9'])){ echo $_REQUEST['tosl9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosm9" value="<?php  if(isset($_REQUEST['tosm9'])){ echo $_REQUEST['tosm9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosn9" value="<?php  if(isset($_REQUEST['tosn9'])){ echo $_REQUEST['tosn9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="toso9" value="<?php  if(isset($_REQUEST['toso9'])){ echo $_REQUEST['toso9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosp9" value="<?php  if(isset($_REQUEST['tosp9'])){ echo $_REQUEST['tosp9'];} else{ echo 0;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table> 
       <input type="submit" name="tossubmit" class="tossubmit" value="Refresh">
       </form>
    </div>
</body>

=======
<?php require  "navbar.html.php"; 

if(isset($_REQUEST['tossubmit'])){

    $tosb8 = floatval(isset($_SESSION['rounde2']) ? $_SESSION['rounde2'] : '');
    $tosc8 = floatval(isset($_SESSION['roundn2']) ? $_SESSION['roundn2'] : '');

    $tosd8 = floatval(isset($_SESSION['rectf3']) ? $_SESSION['rectf3'] : '');
    $tose8 = floatval(isset($_SESSION['rectp3']) ? $_SESSION['rectp3'] : '');
    $tosf8 = floatval(isset($_SESSION['rectp4']) ? $_SESSION['rectp4'] : '');
    $tosg8 = floatval(isset($_SESSION['rectz3']) ? $_SESSION['rectz3'] : '');
    $tosh8 = floatval(isset($_SESSION['rectz4']) ? $_SESSION['rectz4'] : '');
    $tosi8 = floatval(isset($_SESSION['rectaj4']) ? $_SESSION['rectaj4'] : '');
    $tosj8 = floatval(isset($_SESSION['rectaj4']) ? $_SESSION['rectaj4'] : '');

    $tosk8 = floatval(isset($_SESSION['circlef2']) ? $_SESSION['circlef2'] : '');
    $tosl8 = floatval(isset($_SESSION['circlem2']) ? $_SESSION['circlem2'] : '');

    $tosm8 = floatval(isset($_SESSION['ssau3']) ? $_SESSION['ssau3'] : '');
    $tosn8 = floatval(isset($_SESSION['ssau4']) ? $_SESSION['ssau4'] : '');
    
    $toso8 = floatval(isset($_SESSION['blacki3']) ? $_SESSION['blacki3'] : '');
    $tosp8 = floatval(isset($_SESSION['blacki4']) ? $_SESSION['blacki4'] : '');

    $tosa7 = floatval($_REQUEST['tosa7']) / 100;
    $tosb5 = $tosb8  +   floatval($_REQUEST['tosb9'])  ;
    $tosb7 = ($tosb5 * $tosa7)+ $tosb5;
    $tosc5 = $tosc8  +   floatval($_REQUEST['tosc9'])  ;
    $tosc7 = ($tosc5 * $tosa7)+ $tosc5;
    $tosf5 = $tosf8  +   floatval($_REQUEST['tosf9'])  ;
    $tosh5 = $tosh8  +   floatval($_REQUEST['tosh9'])  ;
    $tosi5 = $tosi8  +   floatval($_REQUEST['tosi9'])  ;
    $tosj5 = $tosj8  +   floatval($_REQUEST['tosj9'])  ;
    $tosd5 = $tosd8 + floatval($_REQUEST['tosd9']);
    $tose5 = $tose8 + floatval($_REQUEST['tose9']);
    $tosg5 = $tosg8 + floatval($_REQUEST['tosg9']);
    $tosd6 = array_sum([$tosd5, $tose5, $tosg5]);
    $tosd7 = ($tosd6 * $tosa7)+ $tosd6;
    $tosf7 = ($tosf5 * $tosa7)+ $tosf5;
    $tosh7 = ($tosh5 * $tosa7)+ $tosh5;
    $tosj7 = ($tosj5 * $tosa7)+ $tosj5;
    $tosk5 = floatval(isset($_SESSION['circlef2']) ? $_SESSION['circlef2'] : '');
    $tosk7 = ($tosk5 * $tosa7)+ $tosk5;
    $tosl5 = floatval(isset($_SESSION['circlem2']) ? $_SESSION['circlem2'] : '');
    $tosl7 = ($tosl5 * $tosa7)+ $tosl5;
    $tosm5 = $tosm8  +   floatval($_REQUEST['tosm9'])  ;
    $tosm7 = ($tosm5 * $tosa7)+ $tosm5;
    $tosn5 = $tosn8  +   floatval($_REQUEST['tosn9'])  ;
    $tosn7 = ($tosn5 * $tosa7)+ $tosn5;
    $toso5 = $toso8  +   floatval($_REQUEST['toso9'])  ;
    $toso7 = ($toso5 * $tosa7)+ $toso5;
    $tosp5 = $tosp8  +   floatval($_REQUEST['tosp9'])  ;
    $tosp7 = ($tosp5 * $tosa7)+ $tosp5;

    $tost5 = floatval(isset($_SESSION['recta7']) ? $_SESSION['recta7'] : '');
    $tosv5 = $tost5 / 30;

    $tosv6ceil = (floatval($_REQUEST['tosv3']) + floatval($_REQUEST['tosv4']))  + $tosv5;
    $tosv6 = ceil($tosv6ceil);

    $tosr5 = array_sum([isset($_SESSION['rounds2']) ? $_SESSION['rounds2'] : '' ,
                        isset($_SESSION['recte7']) ? $_SESSION['recte7'] : '' ,
                        isset($_SESSION['recto7']) ? $_SESSION['recto7'] : '' ,
                        isset($_SESSION['rectai7']) ? $_SESSION['rectai7'] : '' ,
                        isset($_SESSION['circleq2']) ? $_SESSION['circleq2'] : '' ,
                        isset($_SESSION['alume8']) ? $_SESSION['alume8'] : '' ,
                        isset($_SESSION['ssat7']) ? $_SESSION['ssat7'] : '' ,
                        isset($_SESSION['blacke7']) ? $_SESSION['blacke7'] : '' ]);

    $toss5 = floatval(isset($_SESSION['recty7']) ? $_SESSION['recty7'] : '-');
    $tost5 = floatval(isset($_SESSION['recta7']) ? $_SESSION['recta7'] : '-');


    $tosb2 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-' ;
}

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take off summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

</style>
<body>
    <div class="section">
    <form action="" method="POST">
        <!-- <h1>DUCT TAKE OFF SUMMARY</h1> -->
        <table class="table1" border="1">
        <tr style="position:sticky;top:0;background-color:white;">
                <td></td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
                <td>F</td>
                <td>G</td>
                <td>H</td>
                <td>I</td>
                <td>J</td>
                <td>K</td>
                <td>L</td>
                <td>M</td>
                <td>N</td>
                <td>O</td>
                <td>P</td>
                <td>Q</td>
                <td>R</td>
                <td>S</td>
                <td>T</td>
                <td>U</td>
                <td>V</td>
            </tr>
            <tr>
                <td colspan="23"><b>DUCT TAKE OFF SUMMARY</b></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">2</td>
                <td>JOB:</td>
                <td><input type="text" name="tosb2" class="custom-input" readonly value="<?php if(isset($tosb2)){ echo $tosb2 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Date:</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">3</td>
                <td>SHEET #</td>
                <td colspan="2">ROUND DUCT</td>
                <td>NO LINE</td>
                <td colspan="2">(1") LINED RECT</td>
                <td colspan="2">(2") LINED RECT Outdoor</td>
                <td colspan="2">(2") LINED RECT Indoor</td>
                <td colspan="2">CIRCLE LINED</td>
                <td colspan="2">STNL STEEL (FUME)</td>
                <td colspan="2">BLACK STEEL (GREASE)</td>
                <td></td>
                <td>Total</td>
                <td>Total</td>
                <td>Total</td>
                <td># Change Direction</td>
                <td><input type="text" name="tosv3" value="<?php  if(isset($_REQUEST['tosv3'])){ echo $_REQUEST['tosv3'] ; } else { echo 0 ;} ?>" ></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">4</td>
                <td>BLDG.</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td>LBS.</td>
                <td>LBS.</td>
                <td>SQ. FT.</td>
                <td>LBS.</td>
                <td>SQ. FT.</td>
                <td>LBS.</td>
                <td>SQ. FT.</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td>MATERIAL</td>
                <td>LABOR</td>
                <td></td>
                <td>LF</td>
                <td>ROOF LF</td>
                <td>Seismic</td>
                <td>Seismic Turns</td>
                <td><input type="text" name="tosv4" value="<?php if(isset($_REQUEST['tosv4'])){ echo $_REQUEST['tosv4'] ;}else { echo 0 ;} ?>" ></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">5</td>
                <td>TOTAL</td>
                <td><input type="text" name="tosb5" readonly value="<?php if(isset($tosb5)){ echo $tosb5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosc5" readonly value="<?php if(isset($tosc5)){ echo $tosc5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosd5" readonly value="<?php if(isset($tosd5)){ echo $tosd5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tose5" readonly value="<?php if(isset($tose5)){ echo $tose5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosf5" readonly value="<?php if(isset($tosf5)){ echo $tosf5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosg5" readonly value="<?php if(isset($tosg5)){ echo $tosg5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosh5" readonly value="<?php if(isset($tosh5)){ echo $tosh5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosi5" readonly value="<?php if(isset($tosi5)){ echo $tosi5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosj5" readonly value="<?php if(isset($tosj5)){ echo $tosj5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosk5" readonly value="<?php if(isset($tosk5)){ echo $tosk5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosl5" readonly value="<?php if(isset($tosl5)){ echo $tosl5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosm5" readonly value="<?php if(isset($tosm5)){ echo $tosm5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosn5" readonly value="<?php if(isset($tosn5)){ echo $tosn5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="toso5" readonly value="<?php if(isset($toso5)){ echo $toso5 ;} else { echo 0 ;} ?>"></td>
                <td><input type="text" name="tosp5" readonly value="<?php if(isset($tosp5)){ echo $tosp5 ;} else { echo 0 ;} ?>"></td>
                <td></td>
                <td><input type="text" name="tosr5" readonly value="<?php if(isset($tosr5)){ echo $tosr5 ;  } else { echo 0 ;}  ?>"></td>
                <td><input type="text" name="toss5" readonly value="<?php if(isset($toss5)){ echo $toss5 ;  } else { echo 0 ;}  ?>"></td>
                <td><input type="text" name="tost5" readonly value="<?php if(isset($tost5)){ echo $tost5 ;  } else { echo 0 ;}  ?>"></td>
                <td></td>
                <td><input type="text" name="tosv5" readonly value="<?php  if(isset($tosv5)){ echo $tosv5 ;}else { echo 0 ;} ?>"></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">6</td>
                <td></td>
                <td colspan="2">Rectangular LBS Total>>>>>></td>
                <td><input type="text"cname="tosd6" readonly value="<?php if(isset($tosd6)){ echo $tosd6;} else { echo 0 ;}  ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Result</td>
                <td><input type="text" name="tosv6" readonly value="<?php  if(isset($tosv6)){ echo $tosv6;}else { echo 0 ;} ?>"></td>
            </tr>
            <tr>
                <td style="position: sticky; left:0;  background-color: white;">7</td>
                <td><input type="text"  name="tosa7"  value="<?php  if(isset($_REQUEST['tosa7'])){ echo $_REQUEST['tosa7'];} ?>"></td>
                <td><input type="text"  name="tosb7" readonly value="<?php  if(isset($tosb7)){ echo $tosb7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosc7" readonly value="<?php  if(isset($tosc7)){ echo $tosc7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosd7" readonly value="<?php  if(isset($tosd7)){ echo $tosd7;} else{ echo 0 ;} ?>"></td>
                <td ></td>
                <td><input type="text"  name="tosf7" readonly value="<?php  if(isset($tosf7)){ echo $tosf7;} else{ echo 0 ;} ?>"></td>
                <td ></td>
                <td><input type="text"  name="tosh7" readonly value="<?php  if(isset($tosh7)){ echo $tosh7;} else{ echo 0 ;} ?>"></td>
                <td ></td>
                <td><input type="text"  name="tosj7" readonly value="<?php  if(isset($tosj7)){ echo $tosj7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosk7" readonly value="<?php  if(isset($tosk7)){ echo $tosk7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosl7" readonly value="<?php  if(isset($tosl7)){ echo $tosl7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosm7" readonly value="<?php  if(isset($tosm7)){ echo $tosm7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosn7" readonly value="<?php  if(isset($tosn7)){ echo $tosn7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="toso7" readonly value="<?php  if(isset($toso7)){ echo $toso7;} else{ echo 0 ;} ?>"></td>
                <td><input type="text"  name="tosp7" readonly value="<?php  if(isset($tosp7)){ echo $tosp7;} else{ echo 0 ;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position: sticky; left:0;  background-color: white;">8</td>
                <td><input type="text" name="tosa8" value="<?php  if(isset($_REQUEST['tosa8'])){ echo $_REQUEST['tosa8'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosb8" readonly value="<?php  if(isset($tosb8)){ echo $tosb8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosc8" readonly value="<?php  if(isset($tosc8)){ echo $tosc8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosd8" readonly value="<?php  if(isset($tosd8)){ echo $tosd8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tose8" readonly value="<?php  if(isset($tose8)){ echo $tose8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosf8" readonly value="<?php  if(isset($tosf8)){ echo $tosf8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosg8" readonly value="<?php  if(isset($tosg8)){ echo $tosg8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosh8" readonly value="<?php  if(isset($tosh8)){ echo $tosh8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosi8" readonly value="<?php  if(isset($tosi8)){ echo $tosi8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosj8" readonly value="<?php  if(isset($tosj8)){ echo $tosj8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosk8" readonly value="<?php  if(isset($tosk8)){ echo $tosk8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosl8" readonly value="<?php  if(isset($tosl8)){ echo $tosl8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosm8" readonly value="<?php  if(isset($tosm8)){ echo $tosm8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosn8" readonly value="<?php  if(isset($tosn8)){ echo $tosn8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="toso8" readonly value="<?php  if(isset($toso8)){ echo $toso8;} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosp8" readonly value="<?php  if(isset($tosp8)){ echo $tosp8;} else{ echo 0;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <td style="position: sticky; left:0;  background-color: white;">9</td>
                <td><input type="text" name="tosa9" value="<?php  if(isset($_REQUEST['tosa9'])){ echo $_REQUEST['tosa9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosb9" value="<?php  if(isset($_REQUEST['tosb9'])){ echo $_REQUEST['tosb9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosc9" value="<?php  if(isset($_REQUEST['tosc9'])){ echo $_REQUEST['tosc9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosd9" value="<?php  if(isset($_REQUEST['tosd9'])){ echo $_REQUEST['tosd9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tose9" value="<?php  if(isset($_REQUEST['tose9'])){ echo $_REQUEST['tose9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosf9" value="<?php  if(isset($_REQUEST['tosf9'])){ echo $_REQUEST['tosf9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosg9" value="<?php  if(isset($_REQUEST['tosg9'])){ echo $_REQUEST['tosg9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosh9" value="<?php  if(isset($_REQUEST['tosh9'])){ echo $_REQUEST['tosh9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosi9" value="<?php  if(isset($_REQUEST['tosi9'])){ echo $_REQUEST['tosi9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosj9" value="<?php  if(isset($_REQUEST['tosj9'])){ echo $_REQUEST['tosj9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosk9" value="<?php  if(isset($_REQUEST['tosk9'])){ echo $_REQUEST['tosk9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosl9" value="<?php  if(isset($_REQUEST['tosl9'])){ echo $_REQUEST['tosl9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosm9" value="<?php  if(isset($_REQUEST['tosm9'])){ echo $_REQUEST['tosm9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosn9" value="<?php  if(isset($_REQUEST['tosn9'])){ echo $_REQUEST['tosn9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="toso9" value="<?php  if(isset($_REQUEST['toso9'])){ echo $_REQUEST['toso9'];} else{ echo 0;} ?>"></td>
                <td><input type="text" name="tosp9" value="<?php  if(isset($_REQUEST['tosp9'])){ echo $_REQUEST['tosp9'];} else{ echo 0;} ?>"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table> 
       <input type="submit" name="tossubmit" class="tossubmit" value="Refresh">
       </form>
    </div>
</body>

>>>>>>> afd24e9 (Sameer)
</html>