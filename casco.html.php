<td></td>
<?php require  "navbar.html.php" ;

if(isset($_POST['cascosubmit'])){



$cascoc6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascoc4']);
$cascod6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascod4']);
$cascoe6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascoe4']);
$cascof6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascof4']);
$cascog6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascog4']);
$cascoh6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascoh4']);
$cascoi6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascoi4']);
$cascoj6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascoj4']);
$cascok6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascok4']);
$cascol6 = floatval($_REQUEST['cascob6']) * floatval($_REQUEST['cascol4']);


$cascoc8 = round(((floatval($_REQUEST['cascoc7']) / $cascoc6) * 100), 2) ;
$cascod8 = round(((floatval($_REQUEST['cascod7']) / $cascod6) * 100), 2) ;
$cascoe8 = round(((floatval($_REQUEST['cascoe7']) / $cascoe6) * 100), 2) ;
$cascof8 = round(((floatval($_REQUEST['cascof7']) / $cascof6) * 100), 2) ;
$cascog8 = round(((floatval($_REQUEST['cascog7']) / $cascog6) * 100), 2) ;
$cascoh8 = round(((floatval($_REQUEST['cascoh7']) / $cascoh6) * 100), 2) ;
$cascoi8 = round(((floatval($_REQUEST['cascoi7']) / $cascoi6) * 100), 2) ;
$cascoj8 = round(((floatval($_REQUEST['cascoj7']) / $cascoj6) * 100), 2) ;



$cascoc10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascoc4']) ;
$cascod10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascod4']) ;
$cascoe10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascoe4']) ;
$cascof10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascof4']) ;
$cascog10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascog4']) ;
$cascoh10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascoh4']) ;
$cascoi10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascoi4']) ;
$cascoj10 = floatval($_REQUEST['cascob10']) * floatval($_REQUEST['cascoj4']) ;

$cascoc12 = round(((floatval($_REQUEST['cascoc11']) / $cascoc10) * 100), 2) ;
$cascod12 = round(((floatval($_REQUEST['cascod11']) / $cascod10) * 100), 2) ;
$cascoe12 = round(((floatval($_REQUEST['cascoe11']) / $cascoe10) * 100), 2) ;
$cascof12 = round(((floatval($_REQUEST['cascof11']) / $cascof10) * 100), 2) ;
$cascog12 = round(((floatval($_REQUEST['cascog11']) / $cascog10) * 100), 2) ;
$cascoh12 = round(((floatval($_REQUEST['cascoh11']) / $cascoh10) * 100), 2) ;
$cascoi12 = round(((floatval($_REQUEST['cascoi11']) / $cascoi10) * 100), 2) ;
$cascoj12 = round(((floatval($_REQUEST['cascoj11']) / $cascoj10) * 100), 2) ;



$cascob17 = round(((floatval($_REQUEST['cascob16']) / floatval($_REQUEST['cascob15'])) * 100), 2) ;
$cascoc17 = round(((floatval($_REQUEST['cascoc16']) / floatval($_REQUEST['cascoc15'])) * 100), 2) ;
$cascod17 = round(((floatval($_REQUEST['cascod16']) / floatval($_REQUEST['cascod15'])) * 100), 2) ;
$cascoe17 = round(((floatval($_REQUEST['cascoe16']) / floatval($_REQUEST['cascoe15'])) * 100), 2) ;
$cascof17 = round(((floatval($_REQUEST['cascof16']) / floatval($_REQUEST['cascof15'])) * 100), 2) ;
$cascog17 = round(((floatval($_REQUEST['cascog16']) / floatval($_REQUEST['cascog15'])) * 100), 2) ;
$cascoh17 = round(((floatval($_REQUEST['cascoh16']) / floatval($_REQUEST['cascoh15'])) * 100), 2) ;
$cascoi17 = round(((floatval($_REQUEST['cascoi16']) / floatval($_REQUEST['cascoi15'])) * 100), 2) ;
$cascoj17 = round(((floatval($_REQUEST['cascoj16']) / floatval($_REQUEST['cascoj15'])) * 100), 2) ;
$cascok17 = round(((floatval($_REQUEST['cascok16']) / floatval($_REQUEST['cascok15'])) * 100), 2) ;
$cascol17 = round(((floatval($_REQUEST['cascol16']) / floatval($_REQUEST['cascol15'])) * 100), 2) ;




$cascoc22 = round(((floatval($_REQUEST['cascoc21']) / floatval($_REQUEST['cascoc11'])) * 100), 2) ;
$cascod22 = round(((floatval($_REQUEST['cascod21']) / floatval($_REQUEST['cascod11'])) * 100), 2) ;
$cascoe22 = round(((floatval($_REQUEST['cascoe21']) / floatval($_REQUEST['cascoe11'])) * 100), 2) ;
$cascof22 = round(((floatval($_REQUEST['cascof21']) / floatval($_REQUEST['cascof11'])) * 100), 2) ;
$cascog22 = round(((floatval($_REQUEST['cascog21']) / floatval($_REQUEST['cascog11'])) * 100), 2) ;
$cascoh22 = round(((floatval($_REQUEST['cascoh21']) / floatval($_REQUEST['cascoh11'])) * 100), 2) ;
$cascoi22 = round(((floatval($_REQUEST['cascoi21']) / floatval($_REQUEST['cascoi11'])) * 100), 2) ;
$cascoj22 = round(((floatval($_REQUEST['cascoj21']) / floatval($_REQUEST['cascoj11'])) * 100), 2) ;
$cascok22 = round(((floatval($_REQUEST['cascok21']) / floatval($_REQUEST['cascok11'])) * 100), 2) ;
$cascol22 = round(((floatval($_REQUEST['cascol21']) / floatval($_REQUEST['cascol11'])) * 100), 2) ;
$cascon22array = [$cascoc22 + $cascod22 + $cascoe22 + $cascof22 + $cascog22 ,
                 $cascoh22 + $cascoi22 + $cascoj22 + $cascok22 + $cascol22] ;
$cascon22 = array_sum($cascon22array) / 10 ;



$cascoc23 = round(((floatval($_REQUEST['cascob21']) / floatval($_REQUEST['cascoc20'])) * 100), 2) ;
$cascod23 = round(((floatval($_REQUEST['cascoc21']) / floatval($_REQUEST['cascod20'])) * 100), 2) ;
$cascoe23 = round(((floatval($_REQUEST['cascod21']) / floatval($_REQUEST['cascoe20'])) * 100), 2) ;
$cascof23 = round(((floatval($_REQUEST['cascoe21']) / floatval($_REQUEST['cascof20'])) * 100), 2) ;
$cascog23 = round(((floatval($_REQUEST['cascof21']) / floatval($_REQUEST['cascog20'])) * 100), 2) ;
$cascoh23 = round(((floatval($_REQUEST['cascog21']) / floatval($_REQUEST['cascoh20'])) * 100), 2) ;
$cascoi23 = round(((floatval($_REQUEST['cascoh21']) / floatval($_REQUEST['cascoi20'])) * 100), 2) ;
$cascoj23 = round(((floatval($_REQUEST['cascoi21']) / floatval($_REQUEST['cascoj20'])) * 100), 2) ;
$cascok23 = round(((floatval($_REQUEST['cascoj21']) / floatval($_REQUEST['cascok20'])) * 100), 2) ;
$cascol23 = round(((floatval($_REQUEST['cascok21']) / floatval($_REQUEST['cascol20'])) * 100), 2) ;


$cascoc26 = round((floatval($_REQUEST['cascoc26'])), 2);
$cascod26 = round((floatval($_REQUEST['cascod26'])), 2);
$cascoe26 = round((floatval($_REQUEST['cascoe26'])), 2);
$cascof26 = round((floatval($_REQUEST['cascof26'])), 2);
$cascog26 = round((floatval($_REQUEST['cascog26'])), 2);
$cascoh26 = round((floatval($_REQUEST['cascoh26'])), 2);
$cascoi26 = round((floatval($_REQUEST['cascoi26'])), 2);
$cascoj26 = round((floatval($_REQUEST['cascoj26'])), 2);
$cascok26 = round((floatval($_REQUEST['cascok26'])), 2);
$cascol26 = round((floatval($_REQUEST['cascol26'])), 2);

$cascoc28 = $cascoc26 * floatval($_REQUEST['cascoc11']) ;
$cascod28 = $cascod26 * floatval($_REQUEST['cascod11']) ;
$cascoe28 = $cascoe26 * floatval($_REQUEST['cascoe11']) ;
$cascof28 = $cascof26 * floatval($_REQUEST['cascof11']) ;
$cascog28 = $cascog26 * floatval($_REQUEST['cascog11']) ;
$cascoh28 = $cascoh26 * floatval($_REQUEST['cascoh11']) ;
$cascoi28 = $cascoi26 * floatval($_REQUEST['cascoi11']) ;
$cascoj28 = $cascoj26 * floatval($_REQUEST['cascoj11']) ;
$cascok28 = $cascok26 * floatval($_REQUEST['cascok11']) ;
$cascol28 = $cascol26 * floatval($_REQUEST['cascol11']) ;




$cascoc34 = round((floatval($_REQUEST['cascoc33']) * floatval($_REQUEST['cascoc32']) * floatval($_REQUEST['cascoc31']) * floatval($_REQUEST['cascoc30'])), 2) ;
$cascod34 = round((floatval($_REQUEST['cascod33']) * floatval($_REQUEST['cascod32']) * floatval($_REQUEST['cascod31']) * floatval($_REQUEST['cascod30'])), 2) ;
$cascoe34 = round((floatval($_REQUEST['cascoe33']) * floatval($_REQUEST['cascoe32']) * floatval($_REQUEST['cascoe31']) * floatval($_REQUEST['cascoe30'])), 2) ;
$cascof34 = round((floatval($_REQUEST['cascof33']) * floatval($_REQUEST['cascof32']) * floatval($_REQUEST['cascof31']) * floatval($_REQUEST['cascof30'])), 2) ;
$cascog34 = round((floatval($_REQUEST['cascog33']) * floatval($_REQUEST['cascog32']) * floatval($_REQUEST['cascog31']) * floatval($_REQUEST['cascog30'])), 2) ;
$cascoh34 = round((floatval($_REQUEST['cascoh33']) * floatval($_REQUEST['cascoh32']) * floatval($_REQUEST['cascoh31']) * floatval($_REQUEST['cascoh30'])), 2) ;
$cascoi34 = round((floatval($_REQUEST['cascoi33']) * floatval($_REQUEST['cascoi32']) * floatval($_REQUEST['cascoi31']) * floatval($_REQUEST['cascoi30'])), 2) ;
$cascoj34 = round((floatval($_REQUEST['cascoj33']) * floatval($_REQUEST['cascoj32']) * floatval($_REQUEST['cascoj31']) * floatval($_REQUEST['cascoj30'])), 2) ;
$cascok34 = round((floatval($_REQUEST['cascok33']) * floatval($_REQUEST['cascok32']) * floatval($_REQUEST['cascok31']) * floatval($_REQUEST['cascok30'])), 2) ;
$cascol34 = round((floatval($_REQUEST['cascol33']) * floatval($_REQUEST['cascol32']) * floatval($_REQUEST['cascol31']) * floatval($_REQUEST['cascol30'])), 2) ;




$cascoc36 = round(($cascoc28 / $cascoc34), 2) ;
$cascod36 = round(($cascod28 / $cascod34), 2) ;
$cascoe36 = round(($cascoe28 / $cascoe34), 2) ;
$cascof36 = round(($cascof28 / $cascof34), 2) ;
$cascog36 = round(($cascog28 / $cascog34), 2) ;
$cascoh36 = round(($cascoh28 / $cascoh34), 2) ;
$cascoi36 = round(($cascoi28 / $cascoi34), 2) ;
$cascoj36 = round(($cascoj28 / $cascoj34), 2) ;
$cascok36 = round(($cascok28 / $cascok34), 2) ;
$cascol36 = round(($cascol28 / $cascol34), 2) ;

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casco</title>
    <link rel="stylesheet" href="style.css">    
</head>
<style>
    .cascosubmit  {
        padding: 10px 20px;
        display: inline-block;
        margin: auto;
        border-radius: 50px !important;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset;
        background: linear-gradient(-45deg,#037ffc ,#0b11bf );
        color: white;
        text-align: center;
        line-height: normal;
        font-family: 'Raleway', sans-serif;
        font-size: 1em;
        font-weight: bold;
        text-decoration: none;
        text-shadow: 0 1px 0 rgba(255,255,255,.8);
        vertical-align: middle;
        outline: none;
        position: fixed;
        bottom: 10px;
        right: 10px;
        }
</style>
<body>
    <div class="section">
        <form action="" method="POST">
    <table class="table1" border="1" >
        <tr style="position: sticky; top:0%; background-color: white; ">
            <td style="position: sticky; left:0%; background-color: white; "></td>
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
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">1</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">2</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">3</td>
            <td>Round/Spiral</td>
            <td></td>
            <td>8"</td>
            <td>10"</td>
            <td>12"</td>
            <td>14"</td>
            <td>16"</td>
            <td>18"</td>
            <td>20"</td>
            <td>22"</td>
            <td>24"</td>
            <td>26"</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">4</td>
            <td>Casco old pricing</td>
            <td></td>
            <td><input type="text" name="cascoc4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc4'])){ echo $_REQUEST['cascoc4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascod4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod4'])){ echo $_REQUEST['cascod4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoe4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe4'])){ echo $_REQUEST['cascoe4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascof4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof4'])){ echo $_REQUEST['cascof4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascog4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog4'])){ echo $_REQUEST['cascog4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoh4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh4'])){ echo $_REQUEST['cascoh4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoi4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi4'])){ echo $_REQUEST['cascoi4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoj4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj4'])){ echo $_REQUEST['cascoj4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascok4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok4'])){ echo $_REQUEST['cascok4'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascol4" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol4'])){ echo $_REQUEST['cascol4'];} else{ echo 1 ;} ?>"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">5</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">6</td>
            <td>None Coated Mult</td>
            <td><input type="number" name="cascob6" class="quantity" step="any" required value="<?php if (isset($_REQUEST['cascob6'])){ echo $_REQUEST['cascob6'] ;} ?>"></td>
            <td><input type="text" name="cascoc6" id="" readonly value="<?php if (isset($cascoc6)) {echo $cascoc6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascod6" id="" readonly value="<?php if (isset($cascod6)) {echo $cascod6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascoe6" id="" readonly value="<?php if (isset($cascoe6)) {echo $cascoe6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascof6" id="" readonly value="<?php if (isset($cascof6)) {echo $cascof6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascog6" id="" readonly value="<?php if (isset($cascog6)) {echo $cascog6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascoh6" id="" readonly value="<?php if (isset($cascoh6)) {echo $cascoh6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascoi6" id="" readonly value="<?php if (isset($cascoi6)) {echo $cascoi6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascoj6" id="" readonly value="<?php if (isset($cascoj6)) {echo $cascoj6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascok6" id="" readonly value="<?php if (isset($cascok6)) {echo $cascok6;} else {echo 0;} ?>"></td>
            <td><input type="text" name="cascol6" id="" readonly value="<?php if (isset($cascol6)) {echo $cascol6;} else {echo 0;} ?>"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">7</td>
            <td>New none Coated Price</td>
            <td></td>
            <td><input type="text" name="cascoc7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc7'])){ echo $_REQUEST['cascoc7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascod7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod7'])){ echo $_REQUEST['cascod7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoe7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe7'])){ echo $_REQUEST['cascoe7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascof7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof7'])){ echo $_REQUEST['cascof7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascog7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog7'])){ echo $_REQUEST['cascog7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoh7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh7'])){ echo $_REQUEST['cascoh7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoi7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi7'])){ echo $_REQUEST['cascoi7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascoj7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj7'])){ echo $_REQUEST['cascoj7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascok7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok7'])){ echo $_REQUEST['cascok7'];} else{ echo 1 ;} ?>"></td>
            <td><input type="text" name="cascol7" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol7'])){ echo $_REQUEST['cascol7'];} else{ echo 1 ;} ?>"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">8</td>
        <td>New Multiplier %</td>
        <td></td>
        <td><input type="text" name="cascoc8" id="" readonly value="<?php if (isset($cascoc8)){ echo floatval($cascoc8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascod8" id="" readonly value="<?php if (isset($cascod8)){ echo floatval($cascod8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoe8" id="" readonly value="<?php if (isset($cascoe8)){ echo floatval($cascoe8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascof8" id="" readonly value="<?php if (isset($cascof8)){ echo floatval($cascof8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascog8" id="" readonly value="<?php if (isset($cascog8)){ echo floatval($cascog8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoh8" id="" readonly value="<?php if (isset($cascoh8)){ echo floatval($cascoh8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoi8" id="" readonly value="<?php if (isset($cascoi8)){ echo floatval($cascoi8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoj8" id="" readonly value="<?php if (isset($cascoj8)){ echo floatval($cascoj8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascok8" id="" readonly value="<?php if (isset($cascok8)){ echo floatval($cascok8);} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascol8" id="" readonly value="<?php if (isset($cascol8)){ echo floatval($cascol8);} else{ echo 0 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">9</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">10</td>
        <td>Coated Mult</td>
        <td><input type="number" name="cascob10" class="quantity" step="any" required value="<?php if (isset($_REQUEST['cascob10'])){ echo $_REQUEST['cascob10'];} ?>"></td>
        <td><input type="text" name="cascoc10" id="" readonly value="<?php if (isset($cascoc10) && $cascoc10 != 0){ echo $cascoc10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascod10" id="" readonly value="<?php if (isset($cascod10) && $cascod10 != 0){ echo $cascod10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascoe10" id="" readonly value="<?php if (isset($cascoe10) && $cascoe10 != 0){ echo $cascoe10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascof10" id="" readonly value="<?php if (isset($cascof10) && $cascof10 != 0){ echo $cascof10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascog10" id="" readonly value="<?php if (isset($cascog10) && $cascog10 != 0){ echo $cascog10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascoh10" id="" readonly value="<?php if (isset($cascoh10) && $cascoh10 != 0){ echo $cascoh10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascoi10" id="" readonly value="<?php if (isset($cascoi10) && $cascoi10 != 0){ echo $cascoi10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascoj10" id="" readonly value="<?php if (isset($cascoj10) && $cascoj10 != 0){ echo $cascoj10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascok10" id="" readonly value="<?php if (isset($cascok10) && $cascok10 != 0){ echo $cascok10 ;} else{ echo 1 ;} ?>"></td>
        <td><input type="text" name="cascol10" id="" readonly value="<?php if (isset($cascol10) && $cascol10 != 0){ echo $cascol10 ;} else{ echo 1 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">11</td>
        <td>New coated Price</td>
        <td></td>
        <td><input type="text" name="cascoc11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc11'])){ echo $_REQUEST['cascoc11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascod11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod11'])){ echo $_REQUEST['cascod11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascoe11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe11'])){ echo $_REQUEST['cascoe11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascof11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof11'])){ echo $_REQUEST['cascof11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascog11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog11'])){ echo $_REQUEST['cascog11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascoh11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh11'])){ echo $_REQUEST['cascoh11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascoi11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi11'])){ echo $_REQUEST['cascoi11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascoj11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj11'])){ echo $_REQUEST['cascoj11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascok11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok11'])){ echo $_REQUEST['cascok11'] ;} else { echo 1 ;}?>"></td>
        <td><input type="text" name="cascol11" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol11'])){ echo $_REQUEST['cascol11'] ;} else { echo 1 ;}?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">12</td>
        <td>New Multiplier %</td>
        <td></td>
        <td><input type="text" name="cascoc12" id="" readonly value="<?php if (isset($cascoc12)){ echo $cascoc12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascod12" id="" readonly value="<?php if (isset($cascod12)){ echo $cascod12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoe12" id="" readonly value="<?php if (isset($cascoe12)){ echo $cascoe12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascof12" id="" readonly value="<?php if (isset($cascof12)){ echo $cascof12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascog12" id="" readonly value="<?php if (isset($cascog12)){ echo $cascog12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoh12" id="" readonly value="<?php if (isset($cascoh12)){ echo $cascoh12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoi12" id="" readonly value="<?php if (isset($cascoi12)){ echo $cascoi12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoj12" id="" readonly value="<?php if (isset($cascoj12)){ echo $cascoj12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascok12" id="" readonly value="<?php if (isset($cascok12)){ echo $cascok12 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascol12" id="" readonly value="<?php if (isset($cascol12)){ echo $cascol12 ;} else{ echo 0 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">13</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">14</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">15</td>
            <td>PDI</td>
            <td><input type="number" name="cascob15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascob15'])){ echo $_REQUEST['cascob15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoc15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc15'])){ echo $_REQUEST['cascoc15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascod15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod15'])){ echo $_REQUEST['cascod15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoe15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe15'])){ echo $_REQUEST['cascoe15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascof15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof15'])){ echo $_REQUEST['cascof15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascog15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog15'])){ echo $_REQUEST['cascog15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoh15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh15'])){ echo $_REQUEST['cascoh15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoi15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi15'])){ echo $_REQUEST['cascoi15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoj15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj15'])){ echo $_REQUEST['cascoj15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascok15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok15'])){ echo $_REQUEST['cascok15'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascol15" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol15'])){ echo $_REQUEST['cascol15'] ;} else{ echo 1 ;}?>"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">16</td>
            <td>West Tech</td>
            <td><input type="number" name="cascob16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascob16'])){ echo $_REQUEST['cascob16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoc16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc16'])){ echo $_REQUEST['cascoc16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascod16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod16'])){ echo $_REQUEST['cascod16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoe16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe16'])){ echo $_REQUEST['cascoe16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascof16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof16'])){ echo $_REQUEST['cascof16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascog16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog16'])){ echo $_REQUEST['cascog16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoh16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh16'])){ echo $_REQUEST['cascoh16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoi16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi16'])){ echo $_REQUEST['cascoi16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascoj16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj16'])){ echo $_REQUEST['cascoj16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascok16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok16'])){ echo $_REQUEST['cascok16'] ;} else{ echo 1 ;}?>"></td>
            <td><input type="number" name="cascol16" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol16'])){ echo $_REQUEST['cascol16'] ;} else{ echo 1 ;}?>"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">17</td>
            <td>%</td>
            <td><input type="text" name="cascob17" id="" readonly value="<?php if (isset($cascob17)){ echo $cascob17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascoc17" id="" readonly value="<?php if (isset($cascoc17)){ echo $cascoc17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascod17" id="" readonly value="<?php if (isset($cascod17)){ echo $cascod17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascoe17" id="" readonly value="<?php if (isset($cascoe17)){ echo $cascoe17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascof17" id="" readonly value="<?php if (isset($cascof17)){ echo $cascof17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascog17" id="" readonly value="<?php if (isset($cascog17)){ echo $cascog17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascoh17" id="" readonly value="<?php if (isset($cascoh17)){ echo $cascoh17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascoi17" id="" readonly value="<?php if (isset($cascoi17)){ echo $cascoi17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascoj17" id="" readonly value="<?php if (isset($cascoj17)){ echo $cascoj17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascok17" id="" readonly value="<?php if (isset($cascok17)){ echo $cascok17 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="cascol17" id="" readonly value="<?php if (isset($cascol17)){ echo $cascol17 ;} else{ echo 0 ;} ?>"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">18</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="position: sticky; left:0%; background-color: white; ">19</td>
            <td>Circle Lined</td>
            <td>6"</td>
            <td>8"</td>
            <td>10"</td>
            <td>12"</td>
            <td>14"</td>
            <td>16"</td>
            <td>18"</td>
            <td>20"</td>
            <td>22"</td>
            <td>24"</td>
            <td>26"</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">20</td>
        <td>PDI</td>
        <td></td>
        <td><input type="number" name="cascoc20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc20'])){ echo $_REQUEST['cascoc20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascod20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod20'])){ echo $_REQUEST['cascod20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoe20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe20'])){ echo $_REQUEST['cascoe20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascof20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof20'])){ echo $_REQUEST['cascof20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascog20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog20'])){ echo $_REQUEST['cascog20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoh20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh20'])){ echo $_REQUEST['cascoh20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoi20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi20'])){ echo $_REQUEST['cascoi20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoj20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj20'])){ echo $_REQUEST['cascoj20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascok20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok20'])){ echo $_REQUEST['cascok20'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascol20" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol20'])){ echo $_REQUEST['cascol20'] ;} else{ echo 1 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">21</td>
        <td>West Tech Current Sheet</td>
        <td><input type="number" name="cascob21" class="quantity" step="any" required value="<?php if(isset($_REQUEST['cascob21'])){ echo $_REQUEST['cascob21'] ;} ?>"></td>
        <td><input type="number" name="cascoc21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc21'])){ echo $_REQUEST['cascoc21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascod21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod21'])){ echo $_REQUEST['cascod21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoe21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe21'])){ echo $_REQUEST['cascoe21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascof21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof21'])){ echo $_REQUEST['cascof21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascog21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog21'])){ echo $_REQUEST['cascog21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoh21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh21'])){ echo $_REQUEST['cascoh21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoi21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi21'])){ echo $_REQUEST['cascoi21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoj21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj21'])){ echo $_REQUEST['cascoj21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascok21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok21'])){ echo $_REQUEST['cascok21'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascol21" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol21'])){ echo $_REQUEST['cascol21'] ;} else{ echo 1 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">22</td>
        <td>Where we are at now %</td>
        <td></td>
        <td><input type="text" name="cascoc22" id="" readonly value="<?php if (isset($cascoc22)){ echo $cascoc22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascod22" id="" readonly value="<?php if (isset($cascod22)){ echo $cascod22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoe22" id="" readonly value="<?php if (isset($cascoe22)){ echo $cascoe22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascof22" id="" readonly value="<?php if (isset($cascof22)){ echo $cascof22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascog22" id="" readonly value="<?php if (isset($cascog22)){ echo $cascog22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoh22" id="" readonly value="<?php if (isset($cascoh22)){ echo $cascoh22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoi22" id="" readonly value="<?php if (isset($cascoi22)){ echo $cascoi22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoj22" id="" readonly value="<?php if (isset($cascoj22)){ echo $cascoj22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascok22" id="" readonly value="<?php if (isset($cascok22)){ echo $cascok22 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascol22" id="" readonly value="<?php if (isset($cascol22)){ echo $cascol22 ;} else{ echo 0 ;} ?>"></td>
        <td></td>
        <td><input type="text" name="cascon22" id="" value="<?php if (isset($cascon22)){ echo $cascon22 ;} else{ echo 0 ;} ?>"></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">23</td>
        <td>% with PDI</td>
        <td></td>
        <td><input type="text" name="cascoc23" id="" readonly value="<?php if (isset($cascoc23)){ echo $cascoc23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascod23" id="" readonly value="<?php if (isset($cascod23)){ echo $cascod23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoe23" id="" readonly value="<?php if (isset($cascoe23)){ echo $cascoe23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascof23" id="" readonly value="<?php if (isset($cascof23)){ echo $cascof23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascog23" id="" readonly value="<?php if (isset($cascog23)){ echo $cascog23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoh23" id="" readonly value="<?php if (isset($cascoh23)){ echo $cascoh23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoi23" id="" readonly value="<?php if (isset($cascoi23)){ echo $cascoi23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascoj23" id="" readonly value="<?php if (isset($cascoj23)){ echo $cascoj23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascok23" id="" readonly value="<?php if (isset($cascok23)){ echo $cascok23 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="text" name="cascol23" id="" readonly value="<?php if (isset($cascol23)){ echo $cascol23 ;} else{ echo 0 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">24</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">25</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">26</td>
        <td>Where we should be %</td>
        <td></td>
        <td><input type="number" name="cascoc26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc26'])){ echo $_REQUEST['cascoc26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascod26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod26'])){ echo $_REQUEST['cascod26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoe26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe26'])){ echo $_REQUEST['cascoe26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascof26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof26'])){ echo $_REQUEST['cascof26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascog26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog26'])){ echo $_REQUEST['cascog26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoh26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh26'])){ echo $_REQUEST['cascoh26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoi26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi26'])){ echo $_REQUEST['cascoi26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoj26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj26'])){ echo $_REQUEST['cascoj26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascok26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok26'])){ echo $_REQUEST['cascok26'] ;} else{ echo 1 ;} ?>"></td>
        <td><input type="number" name="cascol26" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol26'])){ echo $_REQUEST['cascol26'] ;} else{ echo 1 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">27</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">28</td>
        <td>$$ for west tech mech sheet</td>
        <td></td>
        <td><input type="number" name="cascoc28" class="quantity" step="any" readonly value="<?php if (isset($cascoc28)){ echo $cascoc28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascod28" class="quantity" step="any" readonly value="<?php if (isset($cascod28)){ echo $cascod28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoe28" class="quantity" step="any" readonly value="<?php if (isset($cascoe28)){ echo $cascoe28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascof28" class="quantity" step="any" readonly value="<?php if (isset($cascof28)){ echo $cascof28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascog28" class="quantity" step="any" readonly value="<?php if (isset($cascog28)){ echo $cascog28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoh28" class="quantity" step="any" readonly value="<?php if (isset($cascoh28)){ echo $cascoh28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoi28" class="quantity" step="any" readonly value="<?php if (isset($cascoi28)){ echo $cascoi28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoj28" class="quantity" step="any" readonly value="<?php if (isset($cascoj28)){ echo $cascoj28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascok28" class="quantity" step="any" readonly value="<?php if (isset($cascok28)){ echo $cascok28 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascol28" class="quantity" step="any" readonly value="<?php if (isset($cascol28)){ echo $cascol28 ;} else{ echo 0 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">29</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">30</td>
        <td>New Multiplier on the estimate sheet</td>
        <td></td>
        <td><input type="number" name="cascoc30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc30'])){ echo $_REQUEST['cascoc30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascod30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod30'])){ echo $_REQUEST['cascod30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoe30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe30'])){ echo $_REQUEST['cascoe30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascof30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof30'])){ echo $_REQUEST['cascof30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascog30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog30'])){ echo $_REQUEST['cascog30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoh30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh30'])){ echo $_REQUEST['cascoh30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoi30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi30'])){ echo $_REQUEST['cascoi30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascoj30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj30'])){ echo $_REQUEST['cascoj30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascok30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok30'])){ echo $_REQUEST['cascok30'] ;} else { echo 1 ;} ?>"></td>
        <td><input type="number" name="cascol30" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol30'])){ echo $_REQUEST['cascol30'] ;} else { echo 1 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">31</td>
        <td></td>
        <td></td>
        <td><input type="number" name="cascoc31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc31'])){ echo $_REQUEST['cascoc31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascod31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod31'])){ echo $_REQUEST['cascod31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoe31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe31'])){ echo $_REQUEST['cascoe31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascof31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof31'])){ echo $_REQUEST['cascof31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascog31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog31'])){ echo $_REQUEST['cascog31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoh31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh31'])){ echo $_REQUEST['cascoh31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoi31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi31'])){ echo $_REQUEST['cascoi31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoj31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj31'])){ echo $_REQUEST['cascoj31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascok31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok31'])){ echo $_REQUEST['cascok31'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascol31" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol31'])){ echo $_REQUEST['cascol31'] ;} else{ echo 1 ;}?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">32</td>
        <td></td>
        <td></td>
        <td><input type="number" name="cascoc32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc32'])){ echo $_REQUEST['cascoc32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascod32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod32'])){ echo $_REQUEST['cascod32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoe32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe32'])){ echo $_REQUEST['cascoe32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascof32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof32'])){ echo $_REQUEST['cascof32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascog32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog32'])){ echo $_REQUEST['cascog32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoh32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh32'])){ echo $_REQUEST['cascoh32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoi32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi32'])){ echo $_REQUEST['cascoi32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascoj32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj32'])){ echo $_REQUEST['cascoj32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascok32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok32'])){ echo $_REQUEST['cascok32'] ;} else{ echo 1 ;}?>"></td>
        <td><input type="number" name="cascol32" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol32'])){ echo $_REQUEST['cascol32'] ;} else{ echo 1 ;}?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">33</td>
            <td></td>
            <td></td>
            <td><input type="number" name="cascoc33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoc33'])){ echo $_REQUEST['cascoc33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascod33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascod33'])){ echo $_REQUEST['cascod33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascoe33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoe33'])){ echo $_REQUEST['cascoe33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascof33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascof33'])){ echo $_REQUEST['cascof33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascog33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascog33'])){ echo $_REQUEST['cascog33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascoh33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoh33'])){ echo $_REQUEST['cascoh33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascoi33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoi33'])){ echo $_REQUEST['cascoi33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascoj33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascoj33'])){ echo $_REQUEST['cascoj33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascok33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascok33'])){ echo $_REQUEST['cascok33'] ;} else { echo 1 ;} ?>"></td>
            <td><input type="number" name="cascol33" class="quantity" step="any" value="<?php if (isset($_REQUEST['cascol33'])){ echo $_REQUEST['cascol33'] ;} else { echo 1 ;} ?>"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">34</td>
        <td></td>
        <td></td>
        <td><input type="number" name="cascoc34" class="quantity" step="any" readonly value="<?php if(isset($cascoc34)){ echo $cascoc34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascod34" class="quantity" step="any" readonly value="<?php if(isset($cascod34)){ echo $cascod34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoe34" class="quantity" step="any" readonly value="<?php if(isset($cascoe34)){ echo $cascoe34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascof34" class="quantity" step="any" readonly value="<?php if(isset($cascof34)){ echo $cascof34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascog34" class="quantity" step="any" readonly value="<?php if(isset($cascog34)){ echo $cascog34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoh34" class="quantity" step="any" readonly value="<?php if(isset($cascoh34)){ echo $cascoh34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoi34" class="quantity" step="any" readonly value="<?php if(isset($cascoi34)){ echo $cascoi34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascoj34" class="quantity" step="any" readonly value="<?php if(isset($cascoj34)){ echo $cascoj34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascok34" class="quantity" step="any" readonly value="<?php if(isset($cascok34)){ echo $cascok34 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="number" name="cascol34" class="quantity" step="any" readonly value="<?php if(isset($cascol34)){ echo $cascol34 ;} else{ echo 0 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">35</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="position: sticky; left:0%; background-color: white; ">36</td>
        <td>%</td>
        <td></td>
        <td><input type="float" name="cascoc36" class="quantity" step="any" readonly value="<?php if(isset($cascoc36)){ echo $cascoc36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascod36" class="quantity" step="any" readonly value="<?php if(isset($cascod36)){ echo $cascod36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascoe36" class="quantity" step="any" readonly value="<?php if(isset($cascoe36)){ echo $cascoe36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascof36" class="quantity" step="any" readonly value="<?php if(isset($cascof36)){ echo $cascof36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascog36" class="quantity" step="any" readonly value="<?php if(isset($cascog36)){ echo $cascog36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascoh36" class="quantity" step="any" readonly value="<?php if(isset($cascoh36)){ echo $cascoh36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascoi36" class="quantity" step="any" readonly value="<?php if(isset($cascoi36)){ echo $cascoi36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascoj36" class="quantity" step="any" readonly value="<?php if(isset($cascoj36)){ echo $cascoj36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascok36" class="quantity" step="any" readonly value="<?php if(isset($cascok36)){ echo $cascok36 ;} else{ echo 0 ;} ?>"></td>
        <td><input type="float" name="cascol36" class="quantity" step="any" readonly value="<?php if(isset($cascol36)){ echo $cascol36 ;} else{ echo 0 ;} ?>"></td>
        <td></td>
        <td></td>
        </tr>
    </table>
        <input type="submit" name="cascosubmit" class="cascosubmit" value="Refresh">
    </form>
    </div>
    <script>
        var quantityInputs = document.querySelectorAll('.quantity');

        quantityInputs.forEach(function(input) {
            input.addEventListener('input', function() {
                if (this.value <= 0) {
                    this.setCustomValidity("Value must be greater than 0");
                } else {
                    this.setCustomValidity("");
                }
            });
        });
    </script>
</body>
</html>