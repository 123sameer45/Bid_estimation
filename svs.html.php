<?php require  "navbar.html.php" ;

if(isset($_REQUEST['svssubmit'])){

    $svsc2 = isset($_SESSION['estimateg8']) ? floatval($_SESSION['estimateg8']) : '-';
    $svse2 = isset($_SESSION['estimateg13']) ? floatval($_SESSION['estimateg13']) : '-';
    $svsg2 = isset($_SESSION['estimateg17']) ? floatval($_SESSION['estimateg17']) : '-';
    $svsi2 = isset($_SESSION['estimateg14']) ? floatval($_SESSION['estimateg14']) : '-';
    $svsk2 = isset($_SESSION['estimateg34']) ? floatval($_SESSION['estimateg34']) : '-';
    $svsm2 = isset($_SESSION['estimateg40']) ? floatval($_SESSION['estimateg40']) : '-';
    $svso2 = isset($_SESSION['estimateg24']) ? floatval($_SESSION['estimateg24']) : '-';
    $svsq2 = isset($_SESSION['estimateg29']) ? floatval($_SESSION['estimateg29']) : '-';
    $svss2 = isset($_SESSION['estimateg31']) ? floatval($_SESSION['estimateg31']) : '-';
    $svsv2 = array_sum([isset($_SESSION['estimateg25']) ? floatval($_SESSION['estimateg25']) : '-',
                       isset($_SESSION['estimateg26']) ? floatval($_SESSION['estimateg26']) : '-',
                       isset($_SESSION['estimateg27']) ? floatval($_SESSION['estimateg27']) : '-']);
    
    $svsx2 = isset($_SESSION['estimatej69']) ? floatval($_SESSION['estimatej69']) : '-';
    $svsz2 = isset($_SESSION['estimatej56']) ? floatval($_SESSION['estimatej56']) : '-';
    $svsab2 = isset($_SESSION['estimatej28']) ? floatval($_SESSION['estimatej28']) : '-';-
    $svsad2 = floatval(isset($_SESSION['estimatej57']) ? $_SESSION['estimatej57'] : '-');
    $svsaf2 = isset($_SESSION['estimatej59']) ? floatval($_SESSION['estimatej59']) : '-';
    $svsai2 = array_sum([isset($_SESSION['estimatec2']) ? floatval($_SESSION['estimatec2']) : '-',
                         isset($_SESSION['estimated2']) ? floatval($_SESSION['estimated2']) : '-',
                         isset($_SESSION['estimatee2']) ? floatval($_SESSION['estimatee2']) : '-',
                         isset($_SESSION['estimatef2']) ? floatval($_SESSION['estimatef2']) : '-',
                         isset($_SESSION['estimateg2']) ? floatval($_SESSION['estimateg2']) : '-',
                         isset($_SESSION['estimateh2']) ? floatval($_SESSION['estimateh2']) : '-',
                         isset($_SESSION['estimatei2']) ? floatval($_SESSION['estimatei2']) : '-',
                         isset($_SESSION['estimatej2']) ? floatval($_SESSION['estimatej2']) : '-',
                         isset($_SESSION['estimatek2']) ? floatval($_SESSION['estimatek2']) : '-',
                         isset($_SESSION['estimatel2']) ? floatval($_SESSION['estimatel2']) : '-',
                         isset($_SESSION['estimatem2']) ? floatval($_SESSION['estimatem2']) : '-',
                         isset($_SESSION['estimaten2']) ? floatval($_SESSION['estimaten2']) : '-',
                         isset($_SESSION['estimateo2']) ? floatval($_SESSION['estimateo2']) : '-',
                         isset($_SESSION['estimatep2']) ? floatval($_SESSION['estimatep2']) : '-',
                         isset($_SESSION['estimateq2']) ? floatval($_SESSION['estimateq2']) : '-',
                         isset($_SESSION['estimater2']) ? floatval($_SESSION['estimater2']) : '-',
                         isset($_SESSION['estimates2']) ? floatval($_SESSION['estimates2']) : '-',
                         isset($_SESSION['estimatet2']) ? floatval($_SESSION['estimatet2']) : '-',
                         isset($_SESSION['estimateu2']) ? floatval($_SESSION['estimateu2']) : '-',
                         isset($_SESSION['estimatev2']) ? floatval($_SESSION['estimatev2']) : '-',
                         isset($_SESSION['estimatew2']) ? floatval($_SESSION['estimatew2']) : '-',
                         isset($_SESSION['estimatex2']) ? floatval($_SESSION['estimatex2']) : '-',
                         isset($_SESSION['estimatey2']) ? floatval($_SESSION['estimatey2']) : '-',
                         isset($_SESSION['estimatez2']) ? floatval($_SESSION['estimatez2']) : '-',
                         isset($_SESSION['estimateaa2']) ? floatval($_SESSION['estimateaa2']) : '-',
                         isset($_SESSION['estimateab2']) ? floatval($_SESSION['estimateab2']) : '-',
                         isset($_SESSION['estimateac2']) ? floatval($_SESSION['estimateac2']) : '-',
                         isset($_SESSION['estimatead2']) ? floatval($_SESSION['estimatead2']) : '-',
                         isset($_SESSION['estimateae2']) ? floatval($_SESSION['estimateae2']) : '-',
                         isset($_SESSION['estimateaf2']) ? floatval($_SESSION['estimateaf2']) : '-',
                         isset($_SESSION['estimateag2']) ? floatval($_SESSION['estimateag2']) : '-',
                         isset($_SESSION['estimateah2']) ? floatval($_SESSION['estimateah2']) : '-']);
    
    $svsc3 = isset($_SESSION['estimaten8']) ? $_SESSION['estimaten8'] : '-';
    $svse3 = isset($_SESSION['estimaten13']) ? $_SESSION['estimaten13'] : '-';
    $svsg3 = isset($_SESSION['estimaten17']) ? $_SESSION['estimaten17'] : '-';
    $svsi3 = isset($_SESSION['estimaten14']) ? $_SESSION['estimaten14'] : '-';
    $svsk3 = isset($_SESSION['estimaten34']) ? $_SESSION['estimaten34'] : '-';
    $svsm3 = isset($_SESSION['estimaten40']) ? $_SESSION['estimaten40'] : '-';
    $svso3 = isset($_SESSION['estimaten24']) ? $_SESSION['estimaten24'] : '-';
    $svsq3 = isset($_SESSION['estimaten29']) ? $_SESSION['estimaten29'] : '-';
    $svss3 = isset($_SESSION['estimaten31']) ? $_SESSION['estimaten31'] : '-';
    $svsv3 = isset($_SESSION['estimaten25']) ? $_SESSION['estimaten25'] : '-';
    $svsx3 = isset($_SESSION['estimatem69']) ? $_SESSION['estimatem69'] : '-';
    $svsz3 = isset($_SESSION['estimatem56']) ? $_SESSION['estimatem56'] : '-';
    $svsab3 = isset($_SESSION['estimatem28']) ? $_SESSION['estimatem28'] : '-';
    $svsad3 = isset($_SESSION['estimatem57']) ? $_SESSION['estimatem57'] : '-';
    $svsaf3 = isset($_SESSION['estimatem59']) ? $_SESSION['estimatem59'] : '-';

    $svsaf4 = isset($_SESSION['estimatea59']) ? $_SESSION['estimatea59'] : '';

    $svsa10 = $_REQUEST['svsc5'];
    $svsa11 = $_REQUEST['svsc6'];
    $svsa12 = $_REQUEST['svsc7'];

    $svsi5 = $_REQUEST['svsi5'];
    $svsa14 = $svsi5;
    $svsi14 = 0;
    if ($svsi3 == $svsi5) {$svsi14 = $svsi2;} else {$svsi14 = 0;}

    $svsi6 = $_REQUEST['svsi6'];
    $svsa15 = $svsi6; 
    $svsi15 = 0;
    if ($svsi3 == $svsi6) {$svsi15 = $svsi2;} else {$svsi15 = 0;}

    $svsi7 = $_REQUEST['svsi7'];
    $svsa16 = $svsi7;
    $svsi16 = 0;
    if ($svsi3 == $svsi7) {$svsi16 = $svsi2;} else {$svsi16 = 0;}

    $svsi8 = $_REQUEST['svsi8'];
    $svsa17 = $svsi8;
    $svsi17 = 0;
    if ($svsi3 == $svsi8) {$svsi17 = $svsi2;} else {$svsi17 = 0;}

    $svsi27array = [floatval($_REQUEST['svsi10']), floatval($_REQUEST['svsi11']),  floatval($_REQUEST['svsi12']), 
                    $svsi14, $svsi15, $svsi16, $svsi17,  
                    floatval($_REQUEST['svsi19']), floatval($_REQUEST['svsi20']), floatval($_REQUEST['svsi21']), 
                    floatval($_REQUEST['svsi22']), floatval($_REQUEST['svsi23']), floatval($_REQUEST['svsi24']), 
                    floatval($_REQUEST['svsi25']), floatval($_REQUEST['svsi26'])];
    $svsi27 = min($svsi27array);

    $svsk14 = 0;
    if ($svsk3 == $svsi5) {$svsk14 = $svsk2;} else {$svsk14 = 0;}
    $svsk15 = 0;
    if ($svsk3 == $svsi6) {$svsk15 = $svsk2;} else {$svsk15 = 0;}
    $svsk16 = 0;
    if ($svsk3 == $svsi7) {$svsk16 = $svsk2;} else {$svsk16 = 0;}
    $svsk17 = 0;
    if ($svsk3 == $svsi8) {$svsk17 = $svsk2;} else {$svsk17 = 0;}
    $svsk27array = [floatval($_REQUEST['svsk10']), floatval($_REQUEST['svsk11']), floatval($_REQUEST['svsk12']), 
                    $svsk14, $svsk15, $svsk16, $svsk17, 
                    floatval($_REQUEST['svsk19']), floatval($_REQUEST['svsk20']), floatval($_REQUEST['svsk21']), 
                    floatval($_REQUEST['svsk22']), floatval($_REQUEST['svsk23']), floatval($_REQUEST['svsk24']), 
                    floatval($_REQUEST['svsk25']), floatval($_REQUEST['svsk26'])];
    $svsk27 = min($svsk27array);

    $svsm14 = 0;
    if ($svsm3 == $svsi5) {$svsm14 = $svsm2;} else {$svsm14 = 0;}
    $svsm15 = 0;
    if ($svsm3 == $svsi6) {$svsm15 = $svsm2;} else {$svsm15 = 0;}
    $svsm16 = 0;
    if ($svsm3 == $svsi7) {$svsm16 = $svsm2;} else {$svsm16 = 0;}
    $svsm17 = 0;
    if ($svsm3 == $svsi8) {$svsm17 = $svsm2;} else {$svsm17 = 0;}
    $svsm27array = [floatval($_REQUEST['svsm10']), floatval($_REQUEST['svsm11']), floatval($_REQUEST['svsm12']), 
                    $svsm14, $svsm15, $svsm16, $svsm17, 
                    floatval($_REQUEST['svsm19']), floatval($_REQUEST['svsm20']), floatval($_REQUEST['svsm21']), 
                    floatval($_REQUEST['svsm22']), floatval($_REQUEST['svsm23']), floatval($_REQUEST['svsm24']), 
                    floatval($_REQUEST['svsm25']), floatval($_REQUEST['svsm26'])];
    $svsm27 = min($svsm27array);

    $svso14 = 0;
    if ($svso3 == $svsi5) {$svso14 = $svso2;} else {$svso14 = 0;}
    $svso15 = 0;
    if ($svso3 == $svsi6) {$svso15 = $svso2;} else {$svso15 = 0;}
    $svso16 = 0;
    if ($svso3 == $svsi7) {$svso16 = $svso2;} else {$svso16 = 0;}
    $svso17 = 0;
    if ($svso3 == $svsi8) {$svso17 = $svso2;} else {$svso17 = 0;}
    $svso27array = [floatval($_REQUEST['svso10']), floatval($_REQUEST['svso11']), floatval($_REQUEST['svso12']), 
                    $svso14, $svso15, $svso16, $svso17, 
                    floatval($_REQUEST['svso19']), floatval($_REQUEST['svso20']), floatval($_REQUEST['svso21']), 
                    floatval($_REQUEST['svso22']), floatval($_REQUEST['svso23']), floatval($_REQUEST['svso24']), 
                    floatval($_REQUEST['svso25']), floatval($_REQUEST['svso26'])];
    $svso27 = min($svso27array);

    $svsq14 = 0;
    if ($svsq3 == $svsi5) {$svsq14 = $svsq2;} else {$svsq14 = 0;}
    $svsq15 = 0;
    if ($svsq3 == $svsi6) {$svsq15 = $svsq2;} else {$svsq15 = 0;}
    $svsq16 = 0;
    if ($svsq3 == $svsi7) {$svsq16 = $svsq2;} else {$svsq16 = 0;}
    $svsq17 = 0;
    if ($svsq3 == $svsi8) {$svsq17 = $svsq2;} else {$svsq17 = 0;}
    $svsq27array = [floatval($_REQUEST['svsq10']), floatval($_REQUEST['svsq11']), floatval($_REQUEST['svsq12']), 
                    $svsq14, $svsq15, $svsq16, $svsq17, 
                    floatval($_REQUEST['svsq19']), floatval($_REQUEST['svsq20']), floatval($_REQUEST['svsq21']), 
                    floatval($_REQUEST['svsq22']), floatval($_REQUEST['svsq23']), floatval($_REQUEST['svsq24']), 
                    floatval($_REQUEST['svsq25']), floatval($_REQUEST['svsq26'])];
    $svsq27 = min($svsq27array);

    $svss14 = 0;
    if ($svss3 == $svsi5) {$svss14 = $svss2;} else {$svss14 = 0;}
    $svss15 = 0;
    if ($svss3 == $svsi6) {$svss15 = $svss2;} else {$svss15 = 0;}
    $svss16 = 0;
    if ($svss3 == $svsi7) {$svss16 = $svss2;} else {$svss16 = 0;}
    $svss17 = 0;
    if ($svss3 == $svsi8) {$svss17 = $svss2;} else {$svss17 = 0;}
    $svss27array = [floatval($_REQUEST['svss10']), floatval($_REQUEST['svss11']), floatval($_REQUEST['svss12']), 
                    $svss14, $svss15, $svss16, $svss17, 
                    floatval($_REQUEST['svss19']), floatval($_REQUEST['svss20']), floatval($_REQUEST['svss21']), 
                    floatval($_REQUEST['svss22']), floatval($_REQUEST['svss23']), floatval($_REQUEST['svss24']), 
                    floatval($_REQUEST['svss25']), floatval($_REQUEST['svss26'])];
    $svss27 = min($svss27array);

    $svst27array = [$svsi27, $svsk27, $svsm27, $svso27, $svsq27, $svss27];
    $svst27 = array_sum($svst27array);



    $svsc10 = 0;
    if ($svsc3 === "carrier") {
        $svsc10 = $svsc2;
    } else {
        $svsc10 = 0;
    }
    $svsc11 = 0;
    if ($svsc3 === "Trane") {
        $svsc11 = $svsc2;
    } else {
        $svsc11 = 0;
    }
    $svsc3 = 0;
    if ($svsc3 === "York") {
        $svsc12 = $svsc2;
    } else {
        $svsc12 = 0;
    }

    $svsa19 = $svss3 ;
    $svsa20 = $svse3 ;
    $svsa21 = $svsv3 ;
    $svsa22 = $svsx3 ;
    $svsa23 = $svsz3 ;
    $svsa24 = $svsab3;
    $svsa25 = $svsad3;
    $svsa26 = $svsaf3;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .svssubmit{
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
</head> 

<body>
    <div class="section">
        <form action="" method="POST">
        <table class="table_1" border="1" style="width: 100%; border-collapse: collapse;">
        <tr style="text-align: center;position:sticky;top:0; background-color:white;">
            <td style="text-align: center;position:sticky;left:0; background-color:white;"></td>
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
            <td>W</td>
            <td>X</td>
            <td>Y</td>
            <td>Z</td>
            <td>AA</td>
            <td>AB</td>
            <td>AC</td>
            <td>AD</td>
            <td>AE</td>
            <td>AF</td>
            <td>AG</td>
            <td>AH</td>
            <td>AI</td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">1</td>
            <td>Supplier & Vendors</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td >Subcontractor</td>
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
            <td style="text-align: center;position:sticky;left:0; background-color:white;">2</td>
            <td>Price</td>
            <td></td>
            <td><input type="text" name = "svsc2" value="<?php if(isset($svsc2)){ echo $svsc2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svse2" value="<?php if(isset($svse2)){ echo $svse2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsg2" value="<?php if(isset($svsg2)){ echo $svsg2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsi2" value="<?php if(isset($svsi2)){ echo $svsi2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsk2" value="<?php if(isset($svsk2)){ echo $svsk2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsm2" value="<?php if(isset($svsm2)){ echo $svsm2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svso2" value="<?php if(isset($svso2)){ echo $svso2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsq2" value="<?php if(isset($svsq2)){ echo $svsq2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svss2" value="<?php if(isset($svss2)){ echo $svss2;} ?>"></td>
            <td><input type="text" name = "svst2" value="<?php if(isset($svst2)){ echo $svst2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsv2" value="<?php if(isset($svsv2)){ echo $svsv2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsx2" value="<?php if(isset($svsx2)){ echo $svsx2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsz2" value="<?php if(isset($svsz2)){ echo $svsz2;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsab2" value="<?php if(isset($svsab2)){ echo $svsab2 ;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsad2" value="<?php if(isset($svsad2)){ echo $svsad2 ;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsaf2" value="<?php if(isset($svsaf2)){ echo $svsaf2 ;} ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name = "svsai2" value="<?php if(isset($svsai2)){ echo $svsai2;}?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">3</td>
            <td>Sub/Manufacture name</td>
            <td></td>
            <td><input type="text" name = "svsc3" value="<?php if(isset($svsc3)){ echo $svsc3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svse3" value="<?php if(isset($svse3)){ echo $svse3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsg3" value="<?php if(isset($svsg3)){ echo $svsg3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsi3" value="<?php if(isset($svsi3)){ echo $svsi3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsk3" value="<?php if(isset($svsk3)){ echo $svsk3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsm3" value="<?php if(isset($svsm3)){ echo $svsm3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svso3" value="<?php if(isset($svso3)){ echo $svso3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsq3" value="<?php if(isset($svsq3)){ echo $svsq3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svss3" value="<?php if(isset($svss3)){ echo $svss3;} ?>"></td>
            <td><input type="text" name = "svst3" value="<?php if(isset($svst3)){ echo $svst3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsv3" value="<?php if(isset($svsv3)){ echo $svsv3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsx3" value="<?php if(isset($svsx3)){ echo $svsx3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsz3" value="<?php if(isset($svsz3)){ echo $svsz3;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsab3" value="<?php if(isset($svsab3)){ echo $svsab3 ;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsad3" value="<?php if(isset($svsad3)){ echo $svsad3 ;} ?>"></td>
            <td></td>
            <td><input type="text" name = "svsaf3" value="<?php if(isset($svsaf3)){ echo $svsaf3 ;} ?>"></td>
            <td></td>
            <td></td>
            <td><input type="text" name = "svsai3" value="<?php if(isset($svsai2)){ echo $svsai2 ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">4</td>
            <td></td>
            <td></td>
            <td><b>Rooftop Units</b></td>
            <td></td>
            <td><b>Vibration Iso</b></td>
            <td></td>
            <td><b>Split system</b></td>
            <td></td>
            <td><b>EF/GV/RV</b></td>
            <td></td>
            <td><b>Air Distribution</b></td>
            <td></td>
            <td><b>Fire Smoke Dampers</b></td>
            <td></td>
            <td><b>MAU</b></td>
            <td></td>
            <td><b>VAV Box</b></td>
            <td></td>
            <td><b>VFD</b></td>
            <td><b>Total</b></td>
            <td></td>
            <td><b>VRF</b></td>
            <td></td>
            <td><b>Building Automation</b></td>
            <td></td>
            <td><b>Test &amp; Balance</b></td>
            <td></td>
            <td><b>Piping</b></td>
            <td></td>
            <td><b>Insulation</b></td>
            <td></td>
            <td><input type="text" name="svsaf4" id="" value="<?php if(isset($svsaf4)){ echo $svsaf4 ;} ?>"></td>
            <td></td>
            <td></td>
            <td><b>Total</b></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">5</td>
            <td>Spec 1</td>
            <td></td>
            <td><input type="text" name="svsc5" id="" value="<?php if(isset($_REQUEST['svsc5'])){ echo $_REQUEST['svsc5'] ;} else { echo 'Carrier' ;}?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="svsi5" id="" value="<?php if(isset($_REQUEST['svsi5'])){ echo $_REQUEST['svsi5'] ;} else { echo 'NSW' ;}?>"></td>
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
            <td style="text-align: center;position:sticky;left:0; background-color:white;">6</td>
            <td>Spec 2</td>
            <td></td>
            <td><input type="text" name="svsc6" id="" value="<?php if(isset($_REQUEST['svsc6'])){ echo $_REQUEST['svsc6'] ;} else { echo 'Trane' ;}?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="svsi6" id="" value="<?php if(isset($_REQUEST['svsi6'])){ echo $_REQUEST['svsi6'] ;} else { echo 'Haldeman' ;}?>"></td>
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
            <td style="text-align: center;position:sticky;left:0; background-color:white;">7</td>
            <td>Spec 3</td>
            <td></td>
            <td><input type="text" name="svsc7" id="" value="<?php if(isset($_REQUEST['svsc7'])){ echo $_REQUEST['svsc7'] ;} else { echo 'York' ;}?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="svsi7" id="" value="<?php if(isset($_REQUEST['svsi7'])){ echo $_REQUEST['svsi7'] ;} else { echo 'Toro' ;}?>"></td>
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
            <td style="text-align: center;position:sticky;left:0; background-color:white;">8</td>
            <td>Spec 4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="svsi8" id="" value="<?php if(isset($_REQUEST['svsi8'])){ echo $_REQUEST['svsi8'] ;} else { echo 'APS' ;}?>"></td>
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
            <td style="text-align: center;position:sticky;left:0; background-color:white;">9</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td>Qty</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">10</td>
            <td><input type="text" name="svsa10" id="" value="<?php if(isset($svsa10)){ echo $svsa10 ;} ?>"></td>
            <td><input type="text" name="svsb10" id="" value="<?php if(isset($svsb10)){ echo $svsb10 ;} ?>"></td>
            <td><input type="text" name="svsc10" id="" value="<?php if(isset($_REQUEST['svsc10'])){ echo $_REQUEST['svsc10'] ;} ?>"></td>
            <td><input type="text" name="svsd10" id="" value="<?php if(isset($_REQUEST['svsd10'])){ echo $_REQUEST['svsd10'] ;} ?>"></td>
            <td><input type="text" name="svse10" id="" value="<?php if(isset($_REQUEST['svse10'])){ echo $_REQUEST['svse10'] ;} ?>"></td>
            <td><input type="text" name="svsf10" id="" value="<?php if(isset($_REQUEST['svsf10'])){ echo $_REQUEST['svsf10'] ;} ?>"></td>
            <td><input type="text" name="svsg10" id="" value="<?php if(isset($_REQUEST['svsg10'])){ echo $_REQUEST['svsg10'] ;} ?>"></td>
            <td><input type="text" name="svsh10" id="" value="<?php if(isset($_REQUEST['svsh10'])){ echo $_REQUEST['svsh10'] ;} ?>"></td>
            <td><input type="text" name="svsi10" id="" value="<?php if(isset($_REQUEST['svsi10'])){ echo $_REQUEST['svsi10'] ;} ?>"></td>
            <td><input type="text" name="svsj10" id="" value="<?php if(isset($_REQUEST['svsj10'])){ echo $_REQUEST['svsj10'] ;} ?>"></td>
            <td><input type="text" name="svsk10" id="" value="<?php if(isset($_REQUEST['svsk10'])){ echo $_REQUEST['svsk10'] ;} ?>"></td>
            <td><input type="text" name="svsl10" id="" value="<?php if(isset($_REQUEST['svsl10'])){ echo $_REQUEST['svsl10'] ;} ?>"></td>
            <td><input type="text" name="svsm10" id="" value="<?php if(isset($_REQUEST['svsm10'])){ echo $_REQUEST['svsm10'] ;} ?>"></td>
            <td><input type="text" name="svsn10" id="" value="<?php if(isset($_REQUEST['svsn10'])){ echo $_REQUEST['svsn10'] ;} ?>"></td>
            <td><input type="text" name="svso10" id="" value="<?php if(isset($_REQUEST['svso10'])){ echo $_REQUEST['svso10'] ;} ?>"></td>
            <td><input type="text" name="svsp10" id="" value="<?php if(isset($_REQUEST['svsp10'])){ echo $_REQUEST['svsp10'] ;} ?>"></td>
            <td><input type="text" name="svsq10" id="" value="<?php if(isset($_REQUEST['svsq10'])){ echo $_REQUEST['svsq10'] ;} ?>"></td>
            <td><input type="text" name="svsr10" id="" value="<?php if(isset($_REQUEST['svsr10'])){ echo $_REQUEST['svsr10'] ;} ?>"></td>
            <td><input type="text" name="svss10" id="" value="<?php if(isset($_REQUEST['svss10'])){ echo $_REQUEST['svss10'] ;} ?>"></td>
            <td><input type="text" name="svst10" id="" value="<?php if(isset($_REQUEST['svst10'])){ echo $_REQUEST['svst10'] ;} ?>"></td>
            <td><input type="text" name="svsu10" id="" value="<?php if(isset($_REQUEST['svsu10'])){ echo $_REQUEST['svsu10'] ;} ?>"></td>
            <td><input type="text" name="svsv10" id="" value="<?php if(isset($_REQUEST['svsv10'])){ echo $_REQUEST['svsv10'] ;} ?>"></td>
            <td><input type="text" name="svsw10" id="" value="<?php if(isset($_REQUEST['svsw10'])){ echo $_REQUEST['svsw10'] ;} ?>"></td>
            <td><input type="text" name="svsx10" id="" value="<?php if(isset($_REQUEST['svsx10'])){ echo $_REQUEST['svsx10'] ;} ?>"></td>
            <td><input type="text" name="svsy10" id="" value="<?php if(isset($_REQUEST['svsy10'])){ echo $_REQUEST['svsy10'] ;} ?>"></td>
            <td><input type="text" name="svsz10" id="" value="<?php if(isset($_REQUEST['svsz10'])){ echo $_REQUEST['svsz10'] ;} ?>"></td>
            <td><input type="text" name="svsaa10" id="" value="<?php if(isset($_REQUEST['svsaa10'])){ echo $_REQUEST['svsaa10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsab10" id="" value="<?php if(isset($_REQUEST['svsab10'])){ echo $_REQUEST['svsab10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsac10" id="" value="<?php if(isset($_REQUEST['svsac10'])){ echo $_REQUEST['svsac10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsad10" id="" value="<?php if(isset($_REQUEST['svsad10'])){ echo $_REQUEST['svsad10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsae10" id="" value="<?php if(isset($_REQUEST['svsae10'])){ echo $_REQUEST['svsae10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsaf10" id="" value="<?php if(isset($_REQUEST['svsaf10'])){ echo $_REQUEST['svsaf10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsag10" id="" value="<?php if(isset($_REQUEST['svsag10'])){ echo $_REQUEST['svsag10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsah10" id="" value="<?php if(isset($_REQUEST['svsah10'])){ echo $_REQUEST['svsah10'] ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsai10" id="" value="<?php if(isset($_REQUEST['svsai10'])){ echo $_REQUEST['svsai10'] ;} else{ echo 0 ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">11</td>
            <td><input type="text" name="svsa11" id="" value="<?php if(isset($svsa11)){ echo $svsa11 ;} ?>"></td>
            <td><input type="text" name="svsb11" id="" value="<?php if(isset($_REQUEST['svsb11'])){ echo $_REQUEST['svsb11'] ;} ?>"></td>
            <td><input type="text" name="svsc11" id="" value="<?php if(isset($_REQUEST['svsc11'])){ echo $_REQUEST['svsc11'] ;} ?>"></td>
            <td><input type="text" name="svsd11" id="" value="<?php if(isset($_REQUEST['svsd11'])){ echo $_REQUEST['svsd11'] ;} ?>"></td>
            <td><input type="text" name="svse11" id="" value="<?php if(isset($_REQUEST['svse11'])){ echo $_REQUEST['svse11'] ;} ?>"></td>
            <td><input type="text" name="svsf11" id="" value="<?php if(isset($_REQUEST['svsf11'])){ echo $_REQUEST['svsf11'] ;} ?>"></td>
            <td><input type="text" name="svsg11" id="" value="<?php if(isset($_REQUEST['svsg11'])){ echo $_REQUEST['svsg11'] ;} ?>"></td>
            <td><input type="text" name="svsh11" id="" value="<?php if(isset($_REQUEST['svsh11'])){ echo $_REQUEST['svsh11'] ;} ?>"></td>
            <td><input type="text" name="svsi11" id="" value="<?php if(isset($_REQUEST['svsi11'])){ echo $_REQUEST['svsi11'] ;} ?>"></td>
            <td><input type="text" name="svsj11" id="" value="<?php if(isset($_REQUEST['svsj11'])){ echo $_REQUEST['svsj11'] ;} ?>"></td>
            <td><input type="text" name="svsk11" id="" value="<?php if(isset($_REQUEST['svsk11'])){ echo $_REQUEST['svsk11'] ;} ?>"></td>
            <td><input type="text" name="svsl11" id="" value="<?php if(isset($_REQUEST['svsl11'])){ echo $_REQUEST['svsl11'] ;} ?>"></td>
            <td><input type="text" name="svsm11" id="" value="<?php if(isset($_REQUEST['svsm11'])){ echo $_REQUEST['svsm11'] ;} ?>"></td>
            <td><input type="text" name="svsn11" id="" value="<?php if(isset($_REQUEST['svsn11'])){ echo $_REQUEST['svsn11'] ;} ?>"></td>
            <td><input type="text" name="svso11" id="" value="<?php if(isset($_REQUEST['svso11'])){ echo $_REQUEST['svso11'] ;} ?>"></td>
            <td><input type="text" name="svsp11" id="" value="<?php if(isset($_REQUEST['svsp11'])){ echo $_REQUEST['svsp11'] ;} ?>"></td>
            <td><input type="text" name="svsq11" id="" value="<?php if(isset($_REQUEST['svsq11'])){ echo $_REQUEST['svsq11'] ;} ?>"></td>
            <td><input type="text" name="svsr11" id="" value="<?php if(isset($_REQUEST['svsr11'])){ echo $_REQUEST['svsr11'] ;} ?>"></td>
            <td><input type="text" name="svss11" id="" value="<?php if(isset($_REQUEST['svss11'])){ echo $_REQUEST['svss11'] ;} ?>"></td>
            <td><input type="text" name="svst11" id="" value="<?php if(isset($_REQUEST['svst11'])){ echo $_REQUEST['svst11'] ;} ?>"></td>
            <td><input type="text" name="svsu11" id="" value="<?php if(isset($_REQUEST['svsu11'])){ echo $_REQUEST['svsu11'] ;} ?>"></td>
            <td><input type="text" name="svsv11" id="" value="<?php if(isset($_REQUEST['svsv11'])){ echo $_REQUEST['svsv11'] ;} ?>"></td>
            <td><input type="text" name="svsw11" id="" value="<?php if(isset($_REQUEST['svsw11'])){ echo $_REQUEST['svsw11'] ;} ?>"></td>
            <td><input type="text" name="svsx11" id="" value="<?php if(isset($_REQUEST['svsx11'])){ echo $_REQUEST['svsx11'] ;} ?>"></td>
            <td><input type="text" name="svsy11" id="" value="<?php if(isset($_REQUEST['svsy11'])){ echo $_REQUEST['svsy11'] ;} ?>"></td>
            <td><input type="text" name="svsz11" id="" value="<?php if(isset($_REQUEST['svsz11'])){ echo $_REQUEST['svsz11'] ;} ?>"></td>
            <td><input type="text" name="svsaa11" id="" value="<?php if(isset($_REQUEST['svsaa11'])){ echo $_REQUEST['svsaa11'] ;} ?>"></td>
            <td><input type="text" name="svsab11" id="" value="<?php if(isset($_REQUEST['svsab11'])){ echo $_REQUEST['svsab11'] ;} ?>"></td>
            <td><input type="text" name="svsac11" id="" value="<?php if(isset($_REQUEST['svsac11'])){ echo $_REQUEST['svsac11'] ;} ?>"></td>
            <td><input type="text" name="svsad11" id="" value="<?php if(isset($_REQUEST['svsad11'])){ echo $_REQUEST['svsad11'] ;} ?>"></td>
            <td><input type="text" name="svsae11" id="" value="<?php if(isset($_REQUEST['svsae11'])){ echo $_REQUEST['svsae11'] ;} ?>"></td>
            <td><input type="text" name="svsaf11" id="" value="<?php if(isset($_REQUEST['svsaf11'])){ echo $_REQUEST['svsaf11'] ;} ?>"></td>
            <td><input type="text" name="svsag11" id="" value="<?php if(isset($_REQUEST['svsag11'])){ echo $_REQUEST['svsag11'] ;} ?>"></td>
            <td><input type="text" name="svsah11" id="" value="<?php if(isset($_REQUEST['svsah11'])){ echo $_REQUEST['svsah11'] ;} ?>"></td>
            <td><input type="text" name="svsai11" id="" value="<?php if(isset($_REQUEST['svsai11'])){ echo $_REQUEST['svsai11'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">12</td>
            <td><input type="text" name="svsa12" id="" value="<?php if(isset($svsa12)){ echo $svsa12 ;} ?>"></td>
            <td><input type="text" name="svsb12" id="" value="<?php if(isset($_REQUEST['svsb12'])){ echo $_REQUEST['svsb12'] ;} ?>"></td>
            <td><input type="text" name="svsc12" id="" value="<?php if(isset($_REQUEST['svsc12'])){ echo $_REQUEST['svsc12'] ;} ?>"></td>
            <td><input type="text" name="svsd12" id="" value="<?php if(isset($_REQUEST['svsd12'])){ echo $_REQUEST['svsd12'] ;} ?>"></td>
            <td><input type="text" name="svse12" id="" value="<?php if(isset($_REQUEST['svse12'])){ echo $_REQUEST['svse12'] ;} ?>"></td>
            <td><input type="text" name="svsf12" id="" value="<?php if(isset($_REQUEST['svsf12'])){ echo $_REQUEST['svsf12'] ;} ?>"></td>
            <td><input type="text" name="svsg12" id="" value="<?php if(isset($_REQUEST['svsg12'])){ echo $_REQUEST['svsg12'] ;} ?>"></td>
            <td><input type="text" name="svsh12" id="" value="<?php if(isset($_REQUEST['svsh12'])){ echo $_REQUEST['svsh12'] ;} ?>"></td>
            <td><input type="text" name="svsi12" id="" value="<?php if(isset($_REQUEST['svsi12'])){ echo $_REQUEST['svsi12'] ;} ?>"></td>
            <td><input type="text" name="svsj12" id="" value="<?php if(isset($_REQUEST['svsj12'])){ echo $_REQUEST['svsj12'] ;} ?>"></td>
            <td><input type="text" name="svsk12" id="" value="<?php if(isset($_REQUEST['svsk12'])){ echo $_REQUEST['svsk12'] ;} ?>"></td>
            <td><input type="text" name="svsl12" id="" value="<?php if(isset($_REQUEST['svsl12'])){ echo $_REQUEST['svsl12'] ;} ?>"></td>
            <td><input type="text" name="svsm12" id="" value="<?php if(isset($_REQUEST['svsm12'])){ echo $_REQUEST['svsm12'] ;} ?>"></td>
            <td><input type="text" name="svsn12" id="" value="<?php if(isset($_REQUEST['svsn12'])){ echo $_REQUEST['svsn12'] ;} ?>"></td>
            <td><input type="text" name="svso12" id="" value="<?php if(isset($_REQUEST['svso12'])){ echo $_REQUEST['svso12'] ;} ?>"></td>
            <td><input type="text" name="svsp12" id="" value="<?php if(isset($_REQUEST['svsp12'])){ echo $_REQUEST['svsp12'] ;} ?>"></td>
            <td><input type="text" name="svsq12" id="" value="<?php if(isset($_REQUEST['svsq12'])){ echo $_REQUEST['svsq12'] ;} ?>"></td>
            <td><input type="text" name="svsr12" id="" value="<?php if(isset($_REQUEST['svsr12'])){ echo $_REQUEST['svsr12'] ;} ?>"></td>
            <td><input type="text" name="svss12" id="" value="<?php if(isset($_REQUEST['svss12'])){ echo $_REQUEST['svss12'] ;} ?>"></td>
            <td><input type="text" name="svst12" id="" value="<?php if(isset($_REQUEST['svst12'])){ echo $_REQUEST['svst12'] ;} ?>"></td>
            <td><input type="text" name="svsu12" id="" value="<?php if(isset($_REQUEST['svsu12'])){ echo $_REQUEST['svsu12'] ;} ?>"></td>
            <td><input type="text" name="svsv12" id="" value="<?php if(isset($_REQUEST['svsv12'])){ echo $_REQUEST['svsv12'] ;} ?>"></td>
            <td><input type="text" name="svsw12" id="" value="<?php if(isset($_REQUEST['svsw12'])){ echo $_REQUEST['svsw12'] ;} ?>"></td>
            <td><input type="text" name="svsx12" id="" value="<?php if(isset($_REQUEST['svsx12'])){ echo $_REQUEST['svsx12'] ;} ?>"></td>
            <td><input type="text" name="svsy12" id="" value="<?php if(isset($_REQUEST['svsy12'])){ echo $_REQUEST['svsy12'] ;} ?>"></td>
            <td><input type="text" name="svsz12" id="" value="<?php if(isset($_REQUEST['svsz12'])){ echo $_REQUEST['svsz12'] ;} ?>"></td>
            <td><input type="text" name="svsaa12" id="" value="<?php if(isset($_REQUEST['svsaa12'])){ echo $_REQUEST['svsaa12'] ;} ?>"></td>
            <td><input type="text" name="svsab12" id="" value="<?php if(isset($_REQUEST['svsab12'])){ echo $_REQUEST['svsab12'] ;} ?>"></td>
            <td><input type="text" name="svsac12" id="" value="<?php if(isset($_REQUEST['svsac12'])){ echo $_REQUEST['svsac12'] ;} ?>"></td>
            <td><input type="text" name="svsad12" id="" value="<?php if(isset($_REQUEST['svsad12'])){ echo $_REQUEST['svsad12'] ;} ?>"></td>
            <td><input type="text" name="svsae12" id="" value="<?php if(isset($_REQUEST['svsae12'])){ echo $_REQUEST['svsae12'] ;} ?>"></td>
            <td><input type="text" name="svsaf12" id="" value="<?php if(isset($_REQUEST['svsaf12'])){ echo $_REQUEST['svsaf12'] ;} ?>"></td>
            <td><input type="text" name="svsag12" id="" value="<?php if(isset($_REQUEST['svsag12'])){ echo $_REQUEST['svsag12'] ;} ?>"></td>
            <td><input type="text" name="svsah12" id="" value="<?php if(isset($_REQUEST['svsah12'])){ echo $_REQUEST['svsah12'] ;} ?>"></td>
            <td><input type="text" name="svsai12" id="" value="<?php if(isset($_REQUEST['svsai12'])){ echo $_REQUEST['svsai12'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">13</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">14</td>
            <td><input type="text" name="svsa14" id="" value="<?php if(isset($svsa14)){ echo $svsa14 ;} ?>"></td>
            <td><input type="text" name="svsb14" id="" value="<?php if(isset($_REQUEST['svsb14'])){ echo $_REQUEST['svsb14'] ;} ?>"></td>
            <td><input type="text" name="svsc14" id="" value="<?php if(isset($_REQUEST['svsc14'])){ echo $_REQUEST['svsc14'] ;} ?>"></td>
            <td><input type="text" name="svsd14" id="" value="<?php if(isset($_REQUEST['svsd14'])){ echo $_REQUEST['svsd14'] ;} ?>"></td>
            <td><input type="text" name="svse14" id="" value="<?php if(isset($_REQUEST['svse14'])){ echo $_REQUEST['svse14'] ;} ?>"></td>
            <td><input type="text" name="svsf14" id="" value="<?php if(isset($_REQUEST['svsf14'])){ echo $_REQUEST['svsf14'] ;} ?>"></td>
            <td><input type="text" name="svsg14" id="" value="<?php if(isset($_REQUEST['svsg14'])){ echo $_REQUEST['svsg14'] ;} ?>"></td>
            <td><input type="text" name="svsh14" id="" value="<?php if(isset($_REQUEST['svsh14'])){ echo $_REQUEST['svsh14'] ;} ?>"></td>
            <td><input type="text" name="svsi14" id="" value="<?php if(isset($svsi14)){ echo $svsi14 ;} ?>"></td>
            <td><input type="text" name="svsj14" id="" value="<?php if(isset($_REQUEST['svsj14'])){ echo $_REQUEST['svsj14'] ;} ?>"></td>
            <td><input type="text" name="svsk14" id="" value="<?php if(isset($svsk14)){ echo $svsk14 ;} ?>"></td>
            <td><input type="text" name="svsl14" id="" value="<?php if(isset($_REQUEST['svsl14'])){ echo $_REQUEST['svsl14'] ;} ?>"></td>
            <td><input type="text" name="svsm14" id="" value="<?php if(isset($svsm14)){ echo $svsm14 ;} ?>"></td>
            <td><input type="text" name="svsn14" id="" value="<?php if(isset($_REQUEST['svsn14'])){ echo $_REQUEST['svsn14'] ;} ?>"></td>
            <td><input type="text" name="svso14" id="" value="<?php if(isset($svso14)){ echo $svso14 ;} ?>"></td>
            <td><input type="text" name="svsp14" id="" value="<?php if(isset($_REQUEST['svsp14'])){ echo $_REQUEST['svsp14'] ;} ?>"></td>
            <td><input type="text" name="svsq14" id="" value="<?php if(isset($svsq14)){ echo $svsq14 ;} ?>"></td>
            <td><input type="text" name="svsr14" id="" value="<?php if(isset($_REQUEST['svsr14'])){ echo $_REQUEST['svsr14'] ;} ?>"></td>
            <td><input type="text" name="svss14" id="" value="<?php if(isset($svss14)){ echo $svss14 ;} ?>"></td>
            <td><input type="text" name="svst14" id="" value="<?php if(isset($svst14)){ echo $svst14 ;} ?>"></td>
            <td><input type="text" name="svsu14" id="" value="<?php if(isset($_REQUEST['svsu14'])){ echo $_REQUEST['svsu14'] ;} ?>"></td>
            <td><input type="text" name="svsv14" id="" value="<?php if(isset($_REQUEST['svsv14'])){ echo $_REQUEST['svsv14'] ;} ?>"></td>
            <td><input type="text" name="svsw14" id="" value="<?php if(isset($_REQUEST['svsw14'])){ echo $_REQUEST['svsw14'] ;} ?>"></td>
            <td><input type="text" name="svsx14" id="" value="<?php if(isset($_REQUEST['svsx14'])){ echo $_REQUEST['svsx14'] ;} ?>"></td>
            <td><input type="text" name="svsy14" id="" value="<?php if(isset($_REQUEST['svsy14'])){ echo $_REQUEST['svsy14'] ;} ?>"></td>
            <td><input type="text" name="svsz14" id="" value="<?php if(isset($_REQUEST['svsz14'])){ echo $_REQUEST['svsz14'] ;} ?>"></td>
            <td><input type="text" name="svsaa14" id="" value="<?php if(isset($_REQUEST['svsaa14'])){ echo $_REQUEST['svsaa14'] ;} ?>"></td>
            <td><input type="text" name="svsab14" id="" value="<?php if(isset($_REQUEST['svsab14'])){ echo $_REQUEST['svsab14'] ;} ?>"></td>
            <td><input type="text" name="svsac14" id="" value="<?php if(isset($_REQUEST['svsac14'])){ echo $_REQUEST['svsac14'] ;} ?>"></td>
            <td><input type="text" name="svsad14" id="" value="<?php if(isset($_REQUEST['svsad14'])){ echo $_REQUEST['svsad14'] ;} ?>"></td>
            <td><input type="text" name="svsae14" id="" value="<?php if(isset($_REQUEST['svsae14'])){ echo $_REQUEST['svsae14'] ;} ?>"></td>
            <td><input type="text" name="svsaf14" id="" value="<?php if(isset($_REQUEST['svsaf14'])){ echo $_REQUEST['svsaf14'] ;} ?>"></td>
            <td><input type="text" name="svsag14" id="" value="<?php if(isset($_REQUEST['svsag14'])){ echo $_REQUEST['svsag14'] ;} ?>"></td>
            <td><input type="text" name="svsah14" id="" value="<?php if(isset($_REQUEST['svsah14'])){ echo $_REQUEST['svsah14'] ;} ?>"></td>
            <td><input type="text" name="svsai14" id="" value="<?php if(isset($_REQUEST['svsai14'])){ echo $_REQUEST['svsai14'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">15</td>
            <td><input type="text" name="svsa15" id="" value="<?php if(isset($svsa15)){ echo $svsa15 ;} ?>"></td>
            <td><input type="text" name="svsb15" id="" value="<?php if(isset($_REQUEST['svsb15'])){ echo $_REQUEST['svsb15'] ;} ?>"></td>
            <td><input type="text" name="svsc15" id="" value="<?php if(isset($_REQUEST['svsc15'])){ echo $_REQUEST['svsc15'] ;} ?>"></td>
            <td><input type="text" name="svsd15" id="" value="<?php if(isset($_REQUEST['svsd15'])){ echo $_REQUEST['svsd15'] ;} ?>"></td>
            <td><input type="text" name="svse15" id="" value="<?php if(isset($_REQUEST['svse15'])){ echo $_REQUEST['svse15'] ;} ?>"></td>
            <td><input type="text" name="svsf15" id="" value="<?php if(isset($_REQUEST['svsf15'])){ echo $_REQUEST['svsf15'] ;} ?>"></td>
            <td><input type="text" name="svsg15" id="" value="<?php if(isset($_REQUEST['svsg15'])){ echo $_REQUEST['svsg15'] ;} ?>"></td>
            <td><input type="text" name="svsh15" id="" value="<?php if(isset($_REQUEST['svsh15'])){ echo $_REQUEST['svsh15'] ;} ?>"></td>
            <td><input type="text" name="svsi15" id="" value="<?php if(isset($svsi15)){ echo $svsi15 ;} ?>"></td>
            <td><input type="text" name="svsj15" id="" value="<?php if(isset($_REQUEST['svsj15'])){ echo $_REQUEST['svsj15'] ;} ?>"></td>
            <td><input type="text" name="svsk15" id="" value="<?php if(isset($svsk15)){ echo $svsk15 ;} ?>"></td>
            <td><input type="text" name="svsl15" id="" value="<?php if(isset($_REQUEST['svsl15'])){ echo $_REQUEST['svsl15'] ;} ?>"></td>
            <td><input type="text" name="svsm15" id="" value="<?php if(isset($svsm15)){ echo $svsm15 ;} ?>"></td>
            <td><input type="text" name="svsn15" id="" value="<?php if(isset($_REQUEST['svsn15'])){ echo $_REQUEST['svsn15'] ;} ?>"></td>
            <td><input type="text" name="svso15" id="" value="<?php if(isset($svso15)){ echo $svso15 ;} ?>"></td>
            <td><input type="text" name="svsp15" id="" value="<?php if(isset($_REQUEST['svsp15'])){ echo $_REQUEST['svsp15'] ;} ?>"></td>
            <td><input type="text" name="svsq15" id="" value="<?php if(isset($svsq15)){ echo $svsq15 ;} ?>"></td>
            <td><input type="text" name="svsr15" id="" value="<?php if(isset($_REQUEST['svsr15'])){ echo $_REQUEST['svsr15'] ;} ?>"></td>
            <td><input type="text" name="svss15" id="" value="<?php if(isset($svss15)){ echo $svss15 ;} ?>"></td>
            <td><input type="text" name="svst15" id="" value="<?php if(isset($svst15)){ echo $svst15 ;} ?>"></td>
            <td><input type="text" name="svsu15" id="" value="<?php if(isset($_REQUEST['svsu15'])){ echo $_REQUEST['svsu15'] ;} ?>"></td>
            <td><input type="text" name="svsv15" id="" value="<?php if(isset($_REQUEST['svsv15'])){ echo $_REQUEST['svsv15'] ;} ?>"></td>
            <td><input type="text" name="svsw15" id="" value="<?php if(isset($_REQUEST['svsw15'])){ echo $_REQUEST['svsw15'] ;} ?>"></td>
            <td><input type="text" name="svsx15" id="" value="<?php if(isset($_REQUEST['svsx15'])){ echo $_REQUEST['svsx15'] ;} ?>"></td>
            <td><input type="text" name="svsy15" id="" value="<?php if(isset($_REQUEST['svsy15'])){ echo $_REQUEST['svsy15'] ;} ?>"></td>
            <td><input type="text" name="svsz15" id="" value="<?php if(isset($_REQUEST['svsz15'])){ echo $_REQUEST['svsz15'] ;} ?>"></td>
            <td><input type="text" name="svsaa15" id="" value="<?php if(isset($_REQUEST['svsaa15'])){ echo $_REQUEST['svsaa15'] ;} ?>"></td>
            <td><input type="text" name="svsab15" id="" value="<?php if(isset($_REQUEST['svsab15'])){ echo $_REQUEST['svsab15'] ;} ?>"></td>
            <td><input type="text" name="svsac15" id="" value="<?php if(isset($_REQUEST['svsac15'])){ echo $_REQUEST['svsac15'] ;} ?>"></td>
            <td><input type="text" name="svsad15" id="" value="<?php if(isset($_REQUEST['svsad15'])){ echo $_REQUEST['svsad15'] ;} ?>"></td>
            <td><input type="text" name="svsae15" id="" value="<?php if(isset($_REQUEST['svsae15'])){ echo $_REQUEST['svsae15'] ;} ?>"></td>
            <td><input type="text" name="svsaf15" id="" value="<?php if(isset($_REQUEST['svsaf15'])){ echo $_REQUEST['svsaf15'] ;} ?>"></td>
            <td><input type="text" name="svsag15" id="" value="<?php if(isset($_REQUEST['svsag15'])){ echo $_REQUEST['svsag15'] ;} ?>"></td>
            <td><input type="text" name="svsah15" id="" value="<?php if(isset($_REQUEST['svsah15'])){ echo $_REQUEST['svsah15'] ;} ?>"></td>
            <td><input type="text" name="svsai15" id="" value="<?php if(isset($_REQUEST['svsai15'])){ echo $_REQUEST['svsai15'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">16</td>
            <td><input type="text" name="svsa16" id="" value="<?php if(isset($svsa16)){ echo $svsa16 ;} ?>"></td>
            <td><input type="text" name="svsb16" id="" value="<?php if(isset($_REQUEST['svsb16'])){ echo $_REQUEST['svsb16'] ;} ?>"></td>
            <td><input type="text" name="svsc16" id="" value="<?php if(isset($_REQUEST['svsc16'])){ echo $_REQUEST['svsc16'] ;} ?>"></td>
            <td><input type="text" name="svsd16" id="" value="<?php if(isset($_REQUEST['svsd16'])){ echo $_REQUEST['svsd16'] ;} ?>"></td>
            <td><input type="text" name="svse16" id="" value="<?php if(isset($_REQUEST['svse16'])){ echo $_REQUEST['svse16'] ;} ?>"></td>
            <td><input type="text" name="svsf16" id="" value="<?php if(isset($_REQUEST['svsf16'])){ echo $_REQUEST['svsf16'] ;} ?>"></td>
            <td><input type="text" name="svsg16" id="" value="<?php if(isset($_REQUEST['svsg16'])){ echo $_REQUEST['svsg16'] ;} ?>"></td>
            <td><input type="text" name="svsh16" id="" value="<?php if(isset($_REQUEST['svsh16'])){ echo $_REQUEST['svsh16'] ;} ?>"></td>
            <td><input type="text" name="svsi16" id="" value="<?php if(isset($svsi16)){ echo $svsi16 ;} ?>"></td>
            <td><input type="text" name="svsj16" id="" value="<?php if(isset($_REQUEST['svsj16'])){ echo $_REQUEST['svsj16'] ;} ?>"></td>
            <td><input type="text" name="svsk16" id="" value="<?php if(isset($svsk16)){ echo $svsk16 ;} ?>"></td>
            <td><input type="text" name="svsl16" id="" value="<?php if(isset($_REQUEST['svsl16'])){ echo $_REQUEST['svsl16'] ;} ?>"></td>
            <td><input type="text" name="svsm16" id="" value="<?php if(isset($svsm16)){ echo $svsm16 ;} ?>"></td>
            <td><input type="text" name="svsn16" id="" value="<?php if(isset($_REQUEST['svsn16'])){ echo $_REQUEST['svsn16'] ;} ?>"></td>
            <td><input type="text" name="svso16" id="" value="<?php if(isset($svso16)){ echo $svso16 ;} ?>"></td>
            <td><input type="text" name="svsp16" id="" value="<?php if(isset($_REQUEST['svsp16'])){ echo $_REQUEST['svsp16'] ;} ?>"></td>
            <td><input type="text" name="svsq16" id="" value="<?php if(isset($svsq16)){ echo $svsq16 ;} ?>"></td>
            <td><input type="text" name="svsr16" id="" value="<?php if(isset($_REQUEST['svsr16'])){ echo $_REQUEST['svsr16'] ;} ?>"></td>
            <td><input type="text" name="svss16" id="" value="<?php if(isset($svss16)){ echo $svss16 ;} ?>"></td>
            <td><input type="text" name="svst16" id="" value="<?php if(isset($svst16)){ echo $svst16 ;} ?>"></td>
            <td><input type="text" name="svsu16" id="" value="<?php if(isset($_REQUEST['svsu16'])){ echo $_REQUEST['svsu16'] ;} ?>"></td>
            <td><input type="text" name="svsv16" id="" value="<?php if(isset($_REQUEST['svsv16'])){ echo $_REQUEST['svsv16'] ;} ?>"></td>
            <td><input type="text" name="svsw16" id="" value="<?php if(isset($_REQUEST['svsw16'])){ echo $_REQUEST['svsw16'] ;} ?>"></td>
            <td><input type="text" name="svsx16" id="" value="<?php if(isset($_REQUEST['svsx16'])){ echo $_REQUEST['svsx16'] ;} ?>"></td>
            <td><input type="text" name="svsy16" id="" value="<?php if(isset($_REQUEST['svsy16'])){ echo $_REQUEST['svsy16'] ;} ?>"></td>
            <td><input type="text" name="svsz16" id="" value="<?php if(isset($_REQUEST['svsz16'])){ echo $_REQUEST['svsz16'] ;} ?>"></td>
            <td><input type="text" name="svsaa16" id="" value="<?php if(isset($_REQUEST['svsaa16'])){ echo $_REQUEST['svsaa16'] ;} ?>"></td>
            <td><input type="text" name="svsab16" id="" value="<?php if(isset($_REQUEST['svsab16'])){ echo $_REQUEST['svsab16'] ;} ?>"></td>
            <td><input type="text" name="svsac16" id="" value="<?php if(isset($_REQUEST['svsac16'])){ echo $_REQUEST['svsac16'] ;} ?>"></td>
            <td><input type="text" name="svsad16" id="" value="<?php if(isset($_REQUEST['svsad16'])){ echo $_REQUEST['svsad16'] ;} ?>"></td>
            <td><input type="text" name="svsae16" id="" value="<?php if(isset($_REQUEST['svsae16'])){ echo $_REQUEST['svsae16'] ;} ?>"></td>
            <td><input type="text" name="svsaf16" id="" value="<?php if(isset($_REQUEST['svsaf16'])){ echo $_REQUEST['svsaf16'] ;} ?>"></td>
            <td><input type="text" name="svsag16" id="" value="<?php if(isset($_REQUEST['svsag16'])){ echo $_REQUEST['svsag16'] ;} ?>"></td>
            <td><input type="text" name="svsah16" id="" value="<?php if(isset($_REQUEST['svsah16'])){ echo $_REQUEST['svsah16'] ;} ?>"></td>
            <td><input type="text" name="svsai16" id="" value="<?php if(isset($_REQUEST['svsai16'])){ echo $_REQUEST['svsai16'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">17</td>
            <td><input type="text" name="svsa17" id="" value="<?php if(isset($svsa17)){ echo $svsa17 ;} ?>"></td>
            <td><input type="text" name="svsb17" id="" value="<?php if(isset($_REQUEST['svsb17'])){ echo $_REQUEST['svsb17'] ;} ?>"></td>
            <td><input type="text" name="svsc17" id="" value="<?php if(isset($_REQUEST['svsc17'])){ echo $_REQUEST['svsc17'] ;} ?>"></td>
            <td><input type="text" name="svsd17" id="" value="<?php if(isset($_REQUEST['svsd17'])){ echo $_REQUEST['svsd17'] ;} ?>"></td>
            <td><input type="text" name="svse17" id="" value="<?php if(isset($_REQUEST['svse17'])){ echo $_REQUEST['svse17'] ;} ?>"></td>
            <td><input type="text" name="svsf17" id="" value="<?php if(isset($_REQUEST['svsf17'])){ echo $_REQUEST['svsf17'] ;} ?>"></td>
            <td><input type="text" name="svsg17" id="" value="<?php if(isset($_REQUEST['svsg17'])){ echo $_REQUEST['svsg17'] ;} ?>"></td>
            <td><input type="text" name="svsh17" id="" value="<?php if(isset($_REQUEST['svsh17'])){ echo $_REQUEST['svsh17'] ;} ?>"></td>
            <td><input type="text" name="svsi17" id="" value="<?php if(isset($svsi17)){ echo $svsi17 ;} ?>"></td>
            <td><input type="text" name="svsj17" id="" value="<?php if(isset($_REQUEST['svsj17'])){ echo $_REQUEST['svsj17'] ;} ?>"></td>
            <td><input type="text" name="svsk17" id="" value="<?php if(isset($svsk17)){ echo $svsk17 ;} ?>"></td>
            <td><input type="text" name="svsl17" id="" value="<?php if(isset($_REQUEST['svsl17'])){ echo $_REQUEST['svsl17'] ;} ?>"></td>
            <td><input type="text" name="svsm17" id="" value="<?php if(isset($svsm17)){ echo $svsm17 ;} ?>"></td>
            <td><input type="text" name="svsn17" id="" value="<?php if(isset($_REQUEST['svsn17'])){ echo $_REQUEST['svsn17'] ;} ?>"></td>
            <td><input type="text" name="svso17" id="" value="<?php if(isset($svso17)){ echo $svso17 ;} ?>"></td>
            <td><input type="text" name="svsp17" id="" value="<?php if(isset($_REQUEST['svsp17'])){ echo $_REQUEST['svsp17'] ;} ?>"></td>
            <td><input type="text" name="svsq17" id="" value="<?php if(isset($svsq17)){ echo $svsq17 ;} ?>"></td>
            <td><input type="text" name="svsr17" id="" value="<?php if(isset($_REQUEST['svsr17'])){ echo $_REQUEST['svsr17'] ;} ?>"></td>
            <td><input type="text" name="svss17" id="" value="<?php if(isset($svss17)){ echo $svss17 ;} ?>"></td>
            <td><input type="text" name="svst17" id="" value="<?php if(isset($svst17)){ echo $svst17 ;} ?>"></td>
            <td><input type="text" name="svsu17" id="" value="<?php if(isset($_REQUEST['svsu17'])){ echo $_REQUEST['svsu17'] ;} ?>"></td>
            <td><input type="text" name="svsv17" id="" value="<?php if(isset($_REQUEST['svsv17'])){ echo $_REQUEST['svsv17'] ;} ?>"></td>
            <td><input type="text" name="svsw17" id="" value="<?php if(isset($_REQUEST['svsw17'])){ echo $_REQUEST['svsw17'] ;} ?>"></td>
            <td><input type="text" name="svsx17" id="" value="<?php if(isset($_REQUEST['svsx17'])){ echo $_REQUEST['svsx17'] ;} ?>"></td>
            <td><input type="text" name="svsy17" id="" value="<?php if(isset($_REQUEST['svsy17'])){ echo $_REQUEST['svsy17'] ;} ?>"></td>
            <td><input type="text" name="svsz17" id="" value="<?php if(isset($_REQUEST['svsz17'])){ echo $_REQUEST['svsz17'] ;} ?>"></td>
            <td><input type="text" name="svsaa17" id="" value="<?php if(isset($_REQUEST['svsaa17'])){ echo $_REQUEST['svsaa17'] ;} ?>"></td>
            <td><input type="text" name="svsab17" id="" value="<?php if(isset($_REQUEST['svsab17'])){ echo $_REQUEST['svsab17'] ;} ?>"></td>
            <td><input type="text" name="svsac17" id="" value="<?php if(isset($_REQUEST['svsac17'])){ echo $_REQUEST['svsac17'] ;} ?>"></td>
            <td><input type="text" name="svsad17" id="" value="<?php if(isset($_REQUEST['svsad17'])){ echo $_REQUEST['svsad17'] ;} ?>"></td>
            <td><input type="text" name="svsae17" id="" value="<?php if(isset($_REQUEST['svsae17'])){ echo $_REQUEST['svsae17'] ;} ?>"></td>
            <td><input type="text" name="svsaf17" id="" value="<?php if(isset($_REQUEST['svsaf17'])){ echo $_REQUEST['svsaf17'] ;} ?>"></td>
            <td><input type="text" name="svsag17" id="" value="<?php if(isset($_REQUEST['svsag17'])){ echo $_REQUEST['svsag17'] ;} ?>"></td>
            <td><input type="text" name="svsah17" id="" value="<?php if(isset($_REQUEST['svsah17'])){ echo $_REQUEST['svsah17'] ;} ?>"></td>
            <td><input type="text" name="svsai17" id="" value="<?php if(isset($_REQUEST['svsai17'])){ echo $_REQUEST['svsai17'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">18</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">19</td>
            <td><input type="text" name="svsa19" id="" value="<?php if(isset($svsa19)){ echo $svsa19 ;} ?>"></td>
            <td><input type="text" name="svsb19" id="" value="<?php if(isset($_REQUEST['svsb19'])){ echo $_REQUEST['svsb19'] ;} ?>"></td>
            <td><input type="text" name="svsc19" id="" value="<?php if(isset($_REQUEST['svsc19'])){ echo $_REQUEST['svsc19'] ;} ?>"></td>
            <td><input type="text" name="svsd19" id="" value="<?php if(isset($_REQUEST['svsd19'])){ echo $_REQUEST['svsd19'] ;} ?>"></td>
            <td><input type="text" name="svse19" id="" value="<?php if(isset($_REQUEST['svse19'])){ echo $_REQUEST['svse19'] ;} ?>"></td>
            <td><input type="text" name="svsf19" id="" value="<?php if(isset($_REQUEST['svsf19'])){ echo $_REQUEST['svsf19'] ;} ?>"></td>
            <td><input type="text" name="svsg19" id="" value="<?php if(isset($_REQUEST['svsg19'])){ echo $_REQUEST['svsg19'] ;} ?>"></td>
            <td><input type="text" name="svsh19" id="" value="<?php if(isset($_REQUEST['svsh19'])){ echo $_REQUEST['svsh19'] ;} ?>"></td>
            <td><input type="text" name="svsi19" id="" value="<?php if(isset($_REQUEST['svsi19'])){ echo $_REQUEST['svsi19'] ;} ?>"></td>
            <td><input type="text" name="svsj19" id="" value="<?php if(isset($_REQUEST['svsj19'])){ echo $_REQUEST['svsj19'] ;} ?>"></td>
            <td><input type="text" name="svsk19" id="" value="<?php if(isset($_REQUEST['svsk19'])){ echo $_REQUEST['svsk19'] ;} ?>"></td>
            <td><input type="text" name="svsl19" id="" value="<?php if(isset($_REQUEST['svsl19'])){ echo $_REQUEST['svsl19'] ;} ?>"></td>
            <td><input type="text" name="svsm19" id="" value="<?php if(isset($_REQUEST['svsm19'])){ echo $_REQUEST['svsm19'] ;} ?>"></td>
            <td><input type="text" name="svsn19" id="" value="<?php if(isset($_REQUEST['svsn19'])){ echo $_REQUEST['svsn19'] ;} ?>"></td>
            <td><input type="text" name="svso19" id="" value="<?php if(isset($_REQUEST['svso19'])){ echo $_REQUEST['svso19'] ;} ?>"></td>
            <td><input type="text" name="svsp19" id="" value="<?php if(isset($_REQUEST['svsp19'])){ echo $_REQUEST['svsp19'] ;} ?>"></td>
            <td><input type="text" name="svsq19" id="" value="<?php if(isset($_REQUEST['svsq19'])){ echo $_REQUEST['svsq19'] ;} ?>"></td>
            <td><input type="text" name="svsr19" id="" value="<?php if(isset($_REQUEST['svsr19'])){ echo $_REQUEST['svsr19'] ;} ?>"></td>
            <td><input type="text" name="svss19" id="" value="<?php if(isset($_REQUEST['svss19'])){ echo $_REQUEST['svss19'] ;} ?>"></td>
            <td><input type="text" name="svst19" id="" value="<?php if(isset($_REQUEST['svst19'])){ echo $_REQUEST['svst19'] ;} ?>"></td>
            <td><input type="text" name="svsu19" id="" value="<?php if(isset($_REQUEST['svsu19'])){ echo $_REQUEST['svsu19'] ;} ?>"></td>
            <td><input type="text" name="svsv19" id="" value="<?php if(isset($_REQUEST['svsv19'])){ echo $_REQUEST['svsv19'] ;} ?>"></td>
            <td><input type="text" name="svsw19" id="" value="<?php if(isset($_REQUEST['svsw19'])){ echo $_REQUEST['svsw19'] ;} ?>"></td>
            <td><input type="text" name="svsx19" id="" value="<?php if(isset($_REQUEST['svsx19'])){ echo $_REQUEST['svsx19'] ;} ?>"></td>
            <td><input type="text" name="svsy19" id="" value="<?php if(isset($_REQUEST['svsy19'])){ echo $_REQUEST['svsy19'] ;} ?>"></td>
            <td><input type="text" name="svsz19" id="" value="<?php if(isset($_REQUEST['svsz19'])){ echo $_REQUEST['svsz19'] ;} ?>"></td>
            <td><input type="text" name="svsaa19" id="" value="<?php if(isset($_REQUEST['svsaa19'])){ echo $_REQUEST['svsaa19'] ;} ?>"></td>
            <td><input type="text" name="svsab19" id="" value="<?php if(isset($_REQUEST['svsab19'])){ echo $_REQUEST['svsab19'] ;} ?>"></td>
            <td><input type="text" name="svsac19" id="" value="<?php if(isset($_REQUEST['svsac19'])){ echo $_REQUEST['svsac19'] ;} ?>"></td>
            <td><input type="text" name="svsad19" id="" value="<?php if(isset($_REQUEST['svsad19'])){ echo $_REQUEST['svsad19'] ;} ?>"></td>
            <td><input type="text" name="svsae19" id="" value="<?php if(isset($_REQUEST['svsae19'])){ echo $_REQUEST['svsae19'] ;} ?>"></td>
            <td><input type="text" name="svsaf19" id="" value="<?php if(isset($_REQUEST['svsaf19'])){ echo $_REQUEST['svsaf19'] ;} ?>"></td>
            <td><input type="text" name="svsag19" id="" value="<?php if(isset($_REQUEST['svsag19'])){ echo $_REQUEST['svsag19'] ;} ?>"></td>
            <td><input type="text" name="svsah19" id="" value="<?php if(isset($_REQUEST['svsah19'])){ echo $_REQUEST['svsah19'] ;} ?>"></td>
            <td><input type="text" name="svsai19" id="" value="<?php if(isset($_REQUEST['svsai19'])){ echo $_REQUEST['svsai19'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">20</td>
            <td><input type="text" name="svsa20" id="" value="<?php if(isset($svsa20)){ echo $svsa20 ;} ?>"></td>
            <td><input type="text" name="svsb20" id="" value="<?php if(isset($_REQUEST['svsb20'])){ echo $_REQUEST['svsb20'] ;} ?>"></td>
            <td><input type="text" name="svsc20" id="" value="<?php if(isset($_REQUEST['svsc20'])){ echo $_REQUEST['svsc20'] ;} ?>"></td>
            <td><input type="text" name="svsd20" id="" value="<?php if(isset($_REQUEST['svsd20'])){ echo $_REQUEST['svsd20'] ;} ?>"></td>
            <td><input type="text" name="svse20" id="" value="<?php if(isset($_REQUEST['svse20'])){ echo $_REQUEST['svse20'] ;} ?>"></td>
            <td><input type="text" name="svsf20" id="" value="<?php if(isset($_REQUEST['svsf20'])){ echo $_REQUEST['svsf20'] ;} ?>"></td>
            <td><input type="text" name="svsg20" id="" value="<?php if(isset($_REQUEST['svsg20'])){ echo $_REQUEST['svsg20'] ;} ?>"></td>
            <td><input type="text" name="svsh20" id="" value="<?php if(isset($_REQUEST['svsh20'])){ echo $_REQUEST['svsh20'] ;} ?>"></td>
            <td><input type="text" name="svsi20" id="" value="<?php if(isset($_REQUEST['svsi20'])){ echo $_REQUEST['svsi20'] ;} ?>"></td>
            <td><input type="text" name="svsj20" id="" value="<?php if(isset($_REQUEST['svsj20'])){ echo $_REQUEST['svsj20'] ;} ?>"></td>
            <td><input type="text" name="svsk20" id="" value="<?php if(isset($_REQUEST['svsk20'])){ echo $_REQUEST['svsk20'] ;} ?>"></td>
            <td><input type="text" name="svsl20" id="" value="<?php if(isset($_REQUEST['svsl20'])){ echo $_REQUEST['svsl20'] ;} ?>"></td>
            <td><input type="text" name="svsm20" id="" value="<?php if(isset($_REQUEST['svsm20'])){ echo $_REQUEST['svsm20'] ;} ?>"></td>
            <td><input type="text" name="svsn20" id="" value="<?php if(isset($_REQUEST['svsn20'])){ echo $_REQUEST['svsn20'] ;} ?>"></td>
            <td><input type="text" name="svso20" id="" value="<?php if(isset($_REQUEST['svso20'])){ echo $_REQUEST['svso20'] ;} ?>"></td>
            <td><input type="text" name="svsp20" id="" value="<?php if(isset($_REQUEST['svsp20'])){ echo $_REQUEST['svsp20'] ;} ?>"></td>
            <td><input type="text" name="svsq20" id="" value="<?php if(isset($_REQUEST['svsq20'])){ echo $_REQUEST['svsq20'] ;} ?>"></td>
            <td><input type="text" name="svsr20" id="" value="<?php if(isset($_REQUEST['svsr20'])){ echo $_REQUEST['svsr20'] ;} ?>"></td>
            <td><input type="text" name="svss20" id="" value="<?php if(isset($_REQUEST['svss20'])){ echo $_REQUEST['svss20'] ;} ?>"></td>
            <td><input type="text" name="svst20" id="" value="<?php if(isset($_REQUEST['svst20'])){ echo $_REQUEST['svst20'] ;} ?>"></td>
            <td><input type="text" name="svsu20" id="" value="<?php if(isset($_REQUEST['svsu20'])){ echo $_REQUEST['svsu20'] ;} ?>"></td>
            <td><input type="text" name="svsv20" id="" value="<?php if(isset($_REQUEST['svsv20'])){ echo $_REQUEST['svsv20'] ;} ?>"></td>
            <td><input type="text" name="svsw20" id="" value="<?php if(isset($_REQUEST['svsw20'])){ echo $_REQUEST['svsw20'] ;} ?>"></td>
            <td><input type="text" name="svsx20" id="" value="<?php if(isset($_REQUEST['svsx20'])){ echo $_REQUEST['svsx20'] ;} ?>"></td>
            <td><input type="text" name="svsy20" id="" value="<?php if(isset($_REQUEST['svsy20'])){ echo $_REQUEST['svsy20'] ;} ?>"></td>
            <td><input type="text" name="svsz20" id="" value="<?php if(isset($_REQUEST['svsz20'])){ echo $_REQUEST['svsz20'] ;} ?>"></td>
            <td><input type="text" name="svsaa20" id="" value="<?php if(isset($_REQUEST['svsaa20'])){ echo $_REQUEST['svsaa20'] ;} ?>"></td>
            <td><input type="text" name="svsab20" id="" value="<?php if(isset($_REQUEST['svsab20'])){ echo $_REQUEST['svsab20'] ;} ?>"></td>
            <td><input type="text" name="svsac20" id="" value="<?php if(isset($_REQUEST['svsac20'])){ echo $_REQUEST['svsac20'] ;} ?>"></td>
            <td><input type="text" name="svsad20" id="" value="<?php if(isset($_REQUEST['svsad20'])){ echo $_REQUEST['svsad20'] ;} ?>"></td>
            <td><input type="text" name="svsae20" id="" value="<?php if(isset($_REQUEST['svsae20'])){ echo $_REQUEST['svsae20'] ;} ?>"></td>
            <td><input type="text" name="svsaf20" id="" value="<?php if(isset($_REQUEST['svsaf20'])){ echo $_REQUEST['svsaf20'] ;} ?>"></td>
            <td><input type="text" name="svsag20" id="" value="<?php if(isset($_REQUEST['svsag20'])){ echo $_REQUEST['svsag20'] ;} ?>"></td>
            <td><input type="text" name="svsah20" id="" value="<?php if(isset($_REQUEST['svsah20'])){ echo $_REQUEST['svsah20'] ;} ?>"></td>
            <td><input type="text" name="svsai20" id="" value="<?php if(isset($_REQUEST['svsai20'])){ echo $_REQUEST['svsai20'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">21</td>
            <td><input type="text" name="svsa21" id="" value="<?php if(isset($svsa21)){ echo $svsa21 ;} ?>"></td>
            <td><input type="text" name="svsb21" id="" value="<?php if(isset($_REQUEST['svsb21'])){ echo $_REQUEST['svsb21'] ;} ?>"></td>
            <td><input type="text" name="svsc21" id="" value="<?php if(isset($_REQUEST['svsc21'])){ echo $_REQUEST['svsc21'] ;} ?>"></td>
            <td><input type="text" name="svsd21" id="" value="<?php if(isset($_REQUEST['svsd21'])){ echo $_REQUEST['svsd21'] ;} ?>"></td>
            <td><input type="text" name="svse21" id="" value="<?php if(isset($_REQUEST['svse21'])){ echo $_REQUEST['svse21'] ;} ?>"></td>
            <td><input type="text" name="svsf21" id="" value="<?php if(isset($_REQUEST['svsf21'])){ echo $_REQUEST['svsf21'] ;} ?>"></td>
            <td><input type="text" name="svsg21" id="" value="<?php if(isset($_REQUEST['svsg21'])){ echo $_REQUEST['svsg21'] ;} ?>"></td>
            <td><input type="text" name="svsh21" id="" value="<?php if(isset($_REQUEST['svsh21'])){ echo $_REQUEST['svsh21'] ;} ?>"></td>
            <td><input type="text" name="svsi21" id="" value="<?php if(isset($_REQUEST['svsi21'])){ echo $_REQUEST['svsi21'] ;} ?>"></td>
            <td><input type="text" name="svsj21" id="" value="<?php if(isset($_REQUEST['svsj21'])){ echo $_REQUEST['svsj21'] ;} ?>"></td>
            <td><input type="text" name="svsk21" id="" value="<?php if(isset($_REQUEST['svsk21'])){ echo $_REQUEST['svsk21'] ;} ?>"></td>
            <td><input type="text" name="svsl21" id="" value="<?php if(isset($_REQUEST['svsl21'])){ echo $_REQUEST['svsl21'] ;} ?>"></td>
            <td><input type="text" name="svsm21" id="" value="<?php if(isset($_REQUEST['svsm21'])){ echo $_REQUEST['svsm21'] ;} ?>"></td>
            <td><input type="text" name="svsn21" id="" value="<?php if(isset($_REQUEST['svsn21'])){ echo $_REQUEST['svsn21'] ;} ?>"></td>
            <td><input type="text" name="svso21" id="" value="<?php if(isset($_REQUEST['svso21'])){ echo $_REQUEST['svso21'] ;} ?>"></td>
            <td><input type="text" name="svsp21" id="" value="<?php if(isset($_REQUEST['svsp21'])){ echo $_REQUEST['svsp21'] ;} ?>"></td>
            <td><input type="text" name="svsq21" id="" value="<?php if(isset($_REQUEST['svsq21'])){ echo $_REQUEST['svsq21'] ;} ?>"></td>
            <td><input type="text" name="svsr21" id="" value="<?php if(isset($_REQUEST['svsr21'])){ echo $_REQUEST['svsr21'] ;} ?>"></td>
            <td><input type="text" name="svss21" id="" value="<?php if(isset($_REQUEST['svss21'])){ echo $_REQUEST['svss21'] ;} ?>"></td>
            <td><input type="text" name="svst21" id="" value="<?php if(isset($_REQUEST['svst21'])){ echo $_REQUEST['svst21'] ;} ?>"></td>
            <td><input type="text" name="svsu21" id="" value="<?php if(isset($_REQUEST['svsu21'])){ echo $_REQUEST['svsu21'] ;} ?>"></td>
            <td><input type="text" name="svsv21" id="" value="<?php if(isset($_REQUEST['svsv21'])){ echo $_REQUEST['svsv21'] ;} ?>"></td>
            <td><input type="text" name="svsw21" id="" value="<?php if(isset($_REQUEST['svsw21'])){ echo $_REQUEST['svsw21'] ;} ?>"></td>
            <td><input type="text" name="svsx21" id="" value="<?php if(isset($_REQUEST['svsx21'])){ echo $_REQUEST['svsx21'] ;} ?>"></td>
            <td><input type="text" name="svsy21" id="" value="<?php if(isset($_REQUEST['svsy21'])){ echo $_REQUEST['svsy21'] ;} ?>"></td>
            <td><input type="text" name="svsz21" id="" value="<?php if(isset($_REQUEST['svsz21'])){ echo $_REQUEST['svsz21'] ;} ?>"></td>
            <td><input type="text" name="svsaa21" id="" value="<?php if(isset($_REQUEST['svsaa21'])){ echo $_REQUEST['svsaa21'] ;} ?>"></td>
            <td><input type="text" name="svsab21" id="" value="<?php if(isset($_REQUEST['svsab21'])){ echo $_REQUEST['svsab21'] ;} ?>"></td>
            <td><input type="text" name="svsac21" id="" value="<?php if(isset($_REQUEST['svsac21'])){ echo $_REQUEST['svsac21'] ;} ?>"></td>
            <td><input type="text" name="svsad21" id="" value="<?php if(isset($_REQUEST['svsad21'])){ echo $_REQUEST['svsad21'] ;} ?>"></td>
            <td><input type="text" name="svsae21" id="" value="<?php if(isset($_REQUEST['svsae21'])){ echo $_REQUEST['svsae21'] ;} ?>"></td>
            <td><input type="text" name="svsaf21" id="" value="<?php if(isset($_REQUEST['svsaf21'])){ echo $_REQUEST['svsaf21'] ;} ?>"></td>
            <td><input type="text" name="svsag21" id="" value="<?php if(isset($_REQUEST['svsag21'])){ echo $_REQUEST['svsag21'] ;} ?>"></td>
            <td><input type="text" name="svsah21" id="" value="<?php if(isset($_REQUEST['svsah21'])){ echo $_REQUEST['svsah21'] ;} ?>"></td>
            <td><input type="text" name="svsai21" id="" value="<?php if(isset($_REQUEST['svsai21'])){ echo $_REQUEST['svsai21'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">22</td>
            <td><input type="text" name="svsa22" id="" value="<?php if(isset($svsa22)){ echo $svsa22 ;} ?>"></td>
            <td><input type="text" name="svsb22" id="" value="<?php if(isset($_REQUEST['svsb22'])){ echo $_REQUEST['svsb22'] ;} ?>"></td>
            <td><input type="text" name="svsc22" id="" value="<?php if(isset($_REQUEST['svsc22'])){ echo $_REQUEST['svsc22'] ;} ?>"></td>
            <td><input type="text" name="svsd22" id="" value="<?php if(isset($_REQUEST['svsd22'])){ echo $_REQUEST['svsd22'] ;} ?>"></td>
            <td><input type="text" name="svse22" id="" value="<?php if(isset($_REQUEST['svse22'])){ echo $_REQUEST['svse22'] ;} ?>"></td>
            <td><input type="text" name="svsf22" id="" value="<?php if(isset($_REQUEST['svsf22'])){ echo $_REQUEST['svsf22'] ;} ?>"></td>
            <td><input type="text" name="svsg22" id="" value="<?php if(isset($_REQUEST['svsg22'])){ echo $_REQUEST['svsg22'] ;} ?>"></td>
            <td><input type="text" name="svsh22" id="" value="<?php if(isset($_REQUEST['svsh22'])){ echo $_REQUEST['svsh22'] ;} ?>"></td>
            <td><input type="text" name="svsi22" id="" value="<?php if(isset($_REQUEST['svsi22'])){ echo $_REQUEST['svsi22'] ;} ?>"></td>
            <td><input type="text" name="svsj22" id="" value="<?php if(isset($_REQUEST['svsj22'])){ echo $_REQUEST['svsj22'] ;} ?>"></td>
            <td><input type="text" name="svsk22" id="" value="<?php if(isset($_REQUEST['svsk22'])){ echo $_REQUEST['svsk22'] ;} ?>"></td>
            <td><input type="text" name="svsl22" id="" value="<?php if(isset($_REQUEST['svsl22'])){ echo $_REQUEST['svsl22'] ;} ?>"></td>
            <td><input type="text" name="svsm22" id="" value="<?php if(isset($_REQUEST['svsm22'])){ echo $_REQUEST['svsm22'] ;} ?>"></td>
            <td><input type="text" name="svsn22" id="" value="<?php if(isset($_REQUEST['svsn22'])){ echo $_REQUEST['svsn22'] ;} ?>"></td>
            <td><input type="text" name="svso22" id="" value="<?php if(isset($_REQUEST['svso22'])){ echo $_REQUEST['svso22'] ;} ?>"></td>
            <td><input type="text" name="svsp22" id="" value="<?php if(isset($_REQUEST['svsp22'])){ echo $_REQUEST['svsp22'] ;} ?>"></td>
            <td><input type="text" name="svsq22" id="" value="<?php if(isset($_REQUEST['svsq22'])){ echo $_REQUEST['svsq22'] ;} ?>"></td>
            <td><input type="text" name="svsr22" id="" value="<?php if(isset($_REQUEST['svsr22'])){ echo $_REQUEST['svsr22'] ;} ?>"></td>
            <td><input type="text" name="svss22" id="" value="<?php if(isset($_REQUEST['svss22'])){ echo $_REQUEST['svss22'] ;} ?>"></td>
            <td><input type="text" name="svst22" id="" value="<?php if(isset($_REQUEST['svst22'])){ echo $_REQUEST['svst22'] ;} ?>"></td>
            <td><input type="text" name="svsu22" id="" value="<?php if(isset($_REQUEST['svsu22'])){ echo $_REQUEST['svsu22'] ;} ?>"></td>
            <td><input type="text" name="svsv22" id="" value="<?php if(isset($_REQUEST['svsv22'])){ echo $_REQUEST['svsv22'] ;} ?>"></td>
            <td><input type="text" name="svsw22" id="" value="<?php if(isset($_REQUEST['svsw22'])){ echo $_REQUEST['svsw22'] ;} ?>"></td>
            <td><input type="text" name="svsx22" id="" value="<?php if(isset($_REQUEST['svsx22'])){ echo $_REQUEST['svsx22'] ;} ?>"></td>
            <td><input type="text" name="svsy22" id="" value="<?php if(isset($_REQUEST['svsy22'])){ echo $_REQUEST['svsy22'] ;} ?>"></td>
            <td><input type="text" name="svsz22" id="" value="<?php if(isset($_REQUEST['svsz22'])){ echo $_REQUEST['svsz22'] ;} ?>"></td>
            <td><input type="text" name="svsaa22" id="" value="<?php if(isset($_REQUEST['svsaa22'])){ echo $_REQUEST['svsaa22'] ;} ?>"></td>
            <td><input type="text" name="svsab22" id="" value="<?php if(isset($_REQUEST['svsab22'])){ echo $_REQUEST['svsab22'] ;} ?>"></td>
            <td><input type="text" name="svsac22" id="" value="<?php if(isset($_REQUEST['svsac22'])){ echo $_REQUEST['svsac22'] ;} ?>"></td>
            <td><input type="text" name="svsad22" id="" value="<?php if(isset($_REQUEST['svsad22'])){ echo $_REQUEST['svsad22'] ;} ?>"></td>
            <td><input type="text" name="svsae22" id="" value="<?php if(isset($_REQUEST['svsae22'])){ echo $_REQUEST['svsae22'] ;} ?>"></td>
            <td><input type="text" name="svsaf22" id="" value="<?php if(isset($_REQUEST['svsaf22'])){ echo $_REQUEST['svsaf22'] ;} ?>"></td>
            <td><input type="text" name="svsag22" id="" value="<?php if(isset($_REQUEST['svsag22'])){ echo $_REQUEST['svsag22'] ;} ?>"></td>
            <td><input type="text" name="svsah22" id="" value="<?php if(isset($_REQUEST['svsah22'])){ echo $_REQUEST['svsah22'] ;} ?>"></td>
            <td><input type="text" name="svsai22" id="" value="<?php if(isset($_REQUEST['svsai22'])){ echo $_REQUEST['svsai22'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">23</td>
            <td><input type="text" name="svsa23" id="" value="<?php if(isset($svsa23)){ echo $svsa23 ;} ?>"></td>
            <td><input type="text" name="svsb23" id="" value="<?php if(isset($_REQUEST['svsb23'])){ echo $_REQUEST['svsb23'] ;} ?>"></td>
            <td><input type="text" name="svsc23" id="" value="<?php if(isset($_REQUEST['svsc23'])){ echo $_REQUEST['svsc23'] ;} ?>"></td>
            <td><input type="text" name="svsd23" id="" value="<?php if(isset($_REQUEST['svsd23'])){ echo $_REQUEST['svsd23'] ;} ?>"></td>
            <td><input type="text" name="svse23" id="" value="<?php if(isset($_REQUEST['svse23'])){ echo $_REQUEST['svse23'] ;} ?>"></td>
            <td><input type="text" name="svsf23" id="" value="<?php if(isset($_REQUEST['svsf23'])){ echo $_REQUEST['svsf23'] ;} ?>"></td>
            <td><input type="text" name="svsg23" id="" value="<?php if(isset($_REQUEST['svsg23'])){ echo $_REQUEST['svsg23'] ;} ?>"></td>
            <td><input type="text" name="svsh23" id="" value="<?php if(isset($_REQUEST['svsh23'])){ echo $_REQUEST['svsh23'] ;} ?>"></td>
            <td><input type="text" name="svsi23" id="" value="<?php if(isset($_REQUEST['svsi23'])){ echo $_REQUEST['svsi23'] ;} ?>"></td>
            <td><input type="text" name="svsj23" id="" value="<?php if(isset($_REQUEST['svsj23'])){ echo $_REQUEST['svsj23'] ;} ?>"></td>
            <td><input type="text" name="svsk23" id="" value="<?php if(isset($_REQUEST['svsk23'])){ echo $_REQUEST['svsk23'] ;} ?>"></td>
            <td><input type="text" name="svsl23" id="" value="<?php if(isset($_REQUEST['svsl23'])){ echo $_REQUEST['svsl23'] ;} ?>"></td>
            <td><input type="text" name="svsm23" id="" value="<?php if(isset($_REQUEST['svsm23'])){ echo $_REQUEST['svsm23'] ;} ?>"></td>
            <td><input type="text" name="svsn23" id="" value="<?php if(isset($_REQUEST['svsn23'])){ echo $_REQUEST['svsn23'] ;} ?>"></td>
            <td><input type="text" name="svso23" id="" value="<?php if(isset($_REQUEST['svso23'])){ echo $_REQUEST['svso23'] ;} ?>"></td>
            <td><input type="text" name="svsp23" id="" value="<?php if(isset($_REQUEST['svsp23'])){ echo $_REQUEST['svsp23'] ;} ?>"></td>
            <td><input type="text" name="svsq23" id="" value="<?php if(isset($_REQUEST['svsq23'])){ echo $_REQUEST['svsq23'] ;} ?>"></td>
            <td><input type="text" name="svsr23" id="" value="<?php if(isset($_REQUEST['svsr23'])){ echo $_REQUEST['svsr23'] ;} ?>"></td>
            <td><input type="text" name="svss23" id="" value="<?php if(isset($_REQUEST['svss23'])){ echo $_REQUEST['svss23'] ;} ?>"></td>
            <td><input type="text" name="svst23" id="" value="<?php if(isset($_REQUEST['svst23'])){ echo $_REQUEST['svst23'] ;} ?>"></td>
            <td><input type="text" name="svsu23" id="" value="<?php if(isset($_REQUEST['svsu23'])){ echo $_REQUEST['svsu23'] ;} ?>"></td>
            <td><input type="text" name="svsv23" id="" value="<?php if(isset($_REQUEST['svsv23'])){ echo $_REQUEST['svsv23'] ;} ?>"></td>
            <td><input type="text" name="svsw23" id="" value="<?php if(isset($_REQUEST['svsw23'])){ echo $_REQUEST['svsw23'] ;} ?>"></td>
            <td><input type="text" name="svsx23" id="" value="<?php if(isset($_REQUEST['svsx23'])){ echo $_REQUEST['svsx23'] ;} ?>"></td>
            <td><input type="text" name="svsy23" id="" value="<?php if(isset($_REQUEST['svsy23'])){ echo $_REQUEST['svsy23'] ;} ?>"></td>
            <td><input type="text" name="svsz23" id="" value="<?php if(isset($_REQUEST['svsz23'])){ echo $_REQUEST['svsz23'] ;} ?>"></td>
            <td><input type="text" name="svsaa23" id="" value="<?php if(isset($_REQUEST['svsaa23'])){ echo $_REQUEST['svsaa23'] ;} ?>"></td>
            <td><input type="text" name="svsab23" id="" value="<?php if(isset($_REQUEST['svsab23'])){ echo $_REQUEST['svsab23'] ;} ?>"></td>
            <td><input type="text" name="svsac23" id="" value="<?php if(isset($_REQUEST['svsac23'])){ echo $_REQUEST['svsac23'] ;} ?>"></td>
            <td><input type="text" name="svsad23" id="" value="<?php if(isset($_REQUEST['svsad23'])){ echo $_REQUEST['svsad23'] ;} ?>"></td>
            <td><input type="text" name="svsae23" id="" value="<?php if(isset($_REQUEST['svsae23'])){ echo $_REQUEST['svsae23'] ;} ?>"></td>
            <td><input type="text" name="svsaf23" id="" value="<?php if(isset($_REQUEST['svsaf23'])){ echo $_REQUEST['svsaf23'] ;} ?>"></td>
            <td><input type="text" name="svsag23" id="" value="<?php if(isset($_REQUEST['svsag23'])){ echo $_REQUEST['svsag23'] ;} ?>"></td>
            <td><input type="text" name="svsah23" id="" value="<?php if(isset($_REQUEST['svsah23'])){ echo $_REQUEST['svsah23'] ;} ?>"></td>
            <td><input type="text" name="svsai23" id="" value="<?php if(isset($_REQUEST['svsai23'])){ echo $_REQUEST['svsai23'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">24</td>
            <td><input type="text" name="svsa24" id="" value="<?php if(isset($svsa24)){ echo $svsa24 ;} ?>"></td>
            <td><input type="text" name="svsb24" id="" value="<?php if(isset($_REQUEST['svsb24'])){ echo $_REQUEST['svsb24'] ;} ?>"></td>
            <td><input type="text" name="svsc24" id="" value="<?php if(isset($_REQUEST['svsc24'])){ echo $_REQUEST['svsc24'] ;} ?>"></td>
            <td><input type="text" name="svsd24" id="" value="<?php if(isset($_REQUEST['svsd24'])){ echo $_REQUEST['svsd24'] ;} ?>"></td>
            <td><input type="text" name="svse24" id="" value="<?php if(isset($_REQUEST['svse24'])){ echo $_REQUEST['svse24'] ;} ?>"></td>
            <td><input type="text" name="svsf24" id="" value="<?php if(isset($_REQUEST['svsf24'])){ echo $_REQUEST['svsf24'] ;} ?>"></td>
            <td><input type="text" name="svsg24" id="" value="<?php if(isset($_REQUEST['svsg24'])){ echo $_REQUEST['svsg24'] ;} ?>"></td>
            <td><input type="text" name="svsh24" id="" value="<?php if(isset($_REQUEST['svsh24'])){ echo $_REQUEST['svsh24'] ;} ?>"></td>
            <td><input type="text" name="svsi24" id="" value="<?php if(isset($_REQUEST['svsi24'])){ echo $_REQUEST['svsi24'] ;} ?>"></td>
            <td><input type="text" name="svsj24" id="" value="<?php if(isset($_REQUEST['svsj24'])){ echo $_REQUEST['svsj24'] ;} ?>"></td>
            <td><input type="text" name="svsk24" id="" value="<?php if(isset($_REQUEST['svsk24'])){ echo $_REQUEST['svsk24'] ;} ?>"></td>
            <td><input type="text" name="svsl24" id="" value="<?php if(isset($_REQUEST['svsl24'])){ echo $_REQUEST['svsl24'] ;} ?>"></td>
            <td><input type="text" name="svsm24" id="" value="<?php if(isset($_REQUEST['svsm24'])){ echo $_REQUEST['svsm24'] ;} ?>"></td>
            <td><input type="text" name="svsn24" id="" value="<?php if(isset($_REQUEST['svsn24'])){ echo $_REQUEST['svsn24'] ;} ?>"></td>
            <td><input type="text" name="svso24" id="" value="<?php if(isset($_REQUEST['svso24'])){ echo $_REQUEST['svso24'] ;} ?>"></td>
            <td><input type="text" name="svsp24" id="" value="<?php if(isset($_REQUEST['svsp24'])){ echo $_REQUEST['svsp24'] ;} ?>"></td>
            <td><input type="text" name="svsq24" id="" value="<?php if(isset($_REQUEST['svsq24'])){ echo $_REQUEST['svsq24'] ;} ?>"></td>
            <td><input type="text" name="svsr24" id="" value="<?php if(isset($_REQUEST['svsr24'])){ echo $_REQUEST['svsr24'] ;} ?>"></td>
            <td><input type="text" name="svss24" id="" value="<?php if(isset($_REQUEST['svss24'])){ echo $_REQUEST['svss24'] ;} ?>"></td>
            <td><input type="text" name="svst24" id="" value="<?php if(isset($_REQUEST['svst24'])){ echo $_REQUEST['svst24'] ;} ?>"></td>
            <td><input type="text" name="svsu24" id="" value="<?php if(isset($_REQUEST['svsu24'])){ echo $_REQUEST['svsu24'] ;} ?>"></td>
            <td><input type="text" name="svsv24" id="" value="<?php if(isset($_REQUEST['svsv24'])){ echo $_REQUEST['svsv24'] ;} ?>"></td>
            <td><input type="text" name="svsw24" id="" value="<?php if(isset($_REQUEST['svsw24'])){ echo $_REQUEST['svsw24'] ;} ?>"></td>
            <td><input type="text" name="svsx24" id="" value="<?php if(isset($_REQUEST['svsx24'])){ echo $_REQUEST['svsx24'] ;} ?>"></td>
            <td><input type="text" name="svsy24" id="" value="<?php if(isset($_REQUEST['svsy24'])){ echo $_REQUEST['svsy24'] ;} ?>"></td>
            <td><input type="text" name="svsz24" id="" value="<?php if(isset($_REQUEST['svsz24'])){ echo $_REQUEST['svsz24'] ;} ?>"></td>
            <td><input type="text" name="svsaa24" id="" value="<?php if(isset($_REQUEST['svsaa24'])){ echo $_REQUEST['svsaa24'] ;} ?>"></td>
            <td><input type="text" name="svsab24" id="" value="<?php if(isset($_REQUEST['svsab24'])){ echo $_REQUEST['svsab24'] ;} ?>"></td>
            <td><input type="text" name="svsac24" id="" value="<?php if(isset($_REQUEST['svsac24'])){ echo $_REQUEST['svsac24'] ;} ?>"></td>
            <td><input type="text" name="svsad24" id="" value="<?php if(isset($_REQUEST['svsad24'])){ echo $_REQUEST['svsad24'] ;} ?>"></td>
            <td><input type="text" name="svsae24" id="" value="<?php if(isset($_REQUEST['svsae24'])){ echo $_REQUEST['svsae24'] ;} ?>"></td>
            <td><input type="text" name="svsaf24" id="" value="<?php if(isset($_REQUEST['svsaf24'])){ echo $_REQUEST['svsaf24'] ;} ?>"></td>
            <td><input type="text" name="svsag24" id="" value="<?php if(isset($_REQUEST['svsag24'])){ echo $_REQUEST['svsag24'] ;} ?>"></td>
            <td><input type="text" name="svsah24" id="" value="<?php if(isset($_REQUEST['svsah24'])){ echo $_REQUEST['svsah24'] ;} ?>"></td>
            <td><input type="text" name="svsai24" id="" value="<?php if(isset($_REQUEST['svsai24'])){ echo $_REQUEST['svsai24'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">25</td>
            <td><input type="text" name="svsa25" id="" value="<?php if(isset($svsa25)){ echo $svsa25 ;} ?>"></td>
            <td><input type="text" name="svsb25" id="" value="<?php if(isset($_REQUEST['svsb25'])){ echo $_REQUEST['svsb25'] ;} ?>"></td>
            <td><input type="text" name="svsc25" id="" value="<?php if(isset($_REQUEST['svsc25'])){ echo $_REQUEST['svsc25'] ;} ?>"></td>
            <td><input type="text" name="svsd25" id="" value="<?php if(isset($_REQUEST['svsd25'])){ echo $_REQUEST['svsd25'] ;} ?>"></td>
            <td><input type="text" name="svse25" id="" value="<?php if(isset($_REQUEST['svse25'])){ echo $_REQUEST['svse25'] ;} ?>"></td>
            <td><input type="text" name="svsf25" id="" value="<?php if(isset($_REQUEST['svsf25'])){ echo $_REQUEST['svsf25'] ;} ?>"></td>
            <td><input type="text" name="svsg25" id="" value="<?php if(isset($_REQUEST['svsg25'])){ echo $_REQUEST['svsg25'] ;} ?>"></td>
            <td><input type="text" name="svsh25" id="" value="<?php if(isset($_REQUEST['svsh25'])){ echo $_REQUEST['svsh25'] ;} ?>"></td>
            <td><input type="text" name="svsi25" id="" value="<?php if(isset($_REQUEST['svsi25'])){ echo $_REQUEST['svsi25'] ;} ?>"></td>
            <td><input type="text" name="svsj25" id="" value="<?php if(isset($_REQUEST['svsj25'])){ echo $_REQUEST['svsj25'] ;} ?>"></td>
            <td><input type="text" name="svsk25" id="" value="<?php if(isset($_REQUEST['svsk25'])){ echo $_REQUEST['svsk25'] ;} ?>"></td>
            <td><input type="text" name="svsl25" id="" value="<?php if(isset($_REQUEST['svsl25'])){ echo $_REQUEST['svsl25'] ;} ?>"></td>
            <td><input type="text" name="svsm25" id="" value="<?php if(isset($_REQUEST['svsm25'])){ echo $_REQUEST['svsm25'] ;} ?>"></td>
            <td><input type="text" name="svsn25" id="" value="<?php if(isset($_REQUEST['svsn25'])){ echo $_REQUEST['svsn25'] ;} ?>"></td>
            <td><input type="text" name="svso25" id="" value="<?php if(isset($_REQUEST['svso25'])){ echo $_REQUEST['svso25'] ;} ?>"></td>
            <td><input type="text" name="svsp25" id="" value="<?php if(isset($_REQUEST['svsp25'])){ echo $_REQUEST['svsp25'] ;} ?>"></td>
            <td><input type="text" name="svsq25" id="" value="<?php if(isset($_REQUEST['svsq25'])){ echo $_REQUEST['svsq25'] ;} ?>"></td>
            <td><input type="text" name="svsr25" id="" value="<?php if(isset($_REQUEST['svsr25'])){ echo $_REQUEST['svsr25'] ;} ?>"></td>
            <td><input type="text" name="svss25" id="" value="<?php if(isset($_REQUEST['svss25'])){ echo $_REQUEST['svss25'] ;} ?>"></td>
            <td><input type="text" name="svst25" id="" value="<?php if(isset($_REQUEST['svst25'])){ echo $_REQUEST['svst25'] ;} ?>"></td>
            <td><input type="text" name="svsu25" id="" value="<?php if(isset($_REQUEST['svsu25'])){ echo $_REQUEST['svsu25'] ;} ?>"></td>
            <td><input type="text" name="svsv25" id="" value="<?php if(isset($_REQUEST['svsv25'])){ echo $_REQUEST['svsv25'] ;} ?>"></td>
            <td><input type="text" name="svsw25" id="" value="<?php if(isset($_REQUEST['svsw25'])){ echo $_REQUEST['svsw25'] ;} ?>"></td>
            <td><input type="text" name="svsx25" id="" value="<?php if(isset($_REQUEST['svsx25'])){ echo $_REQUEST['svsx25'] ;} ?>"></td>
            <td><input type="text" name="svsy25" id="" value="<?php if(isset($_REQUEST['svsy25'])){ echo $_REQUEST['svsy25'] ;} ?>"></td>
            <td><input type="text" name="svsz25" id="" value="<?php if(isset($_REQUEST['svsz25'])){ echo $_REQUEST['svsz25'] ;} ?>"></td>
            <td><input type="text" name="svsaa25" id="" value="<?php if(isset($_REQUEST['svsaa25'])){ echo $_REQUEST['svsaa25'] ;} ?>"></td>
            <td><input type="text" name="svsab25" id="" value="<?php if(isset($_REQUEST['svsab25'])){ echo $_REQUEST['svsab25'] ;} ?>"></td>
            <td><input type="text" name="svsac25" id="" value="<?php if(isset($_REQUEST['svsac25'])){ echo $_REQUEST['svsac25'] ;} ?>"></td>
            <td><input type="text" name="svsad25" id="" value="<?php if(isset($_REQUEST['svsad25'])){ echo $_REQUEST['svsad25'] ;} ?>"></td>
            <td><input type="text" name="svsae25" id="" value="<?php if(isset($_REQUEST['svsae25'])){ echo $_REQUEST['svsae25'] ;} ?>"></td>
            <td><input type="text" name="svsaf25" id="" value="<?php if(isset($_REQUEST['svsaf25'])){ echo $_REQUEST['svsaf25'] ;} ?>"></td>
            <td><input type="text" name="svsag25" id="" value="<?php if(isset($_REQUEST['svsag25'])){ echo $_REQUEST['svsag25'] ;} ?>"></td>
            <td><input type="text" name="svsah25" id="" value="<?php if(isset($_REQUEST['svsah25'])){ echo $_REQUEST['svsah25'] ;} ?>"></td>
            <td><input type="text" name="svsai25" id="" value="<?php if(isset($_REQUEST['svsai25'])){ echo $_REQUEST['svsai25'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">26</td>
            <td><input type="text" name="svsa26" id="" value="<?php if(isset($svsa26)){ echo $svsa26 ;} ?>"></td>
            <td><input type="text" name="svsb26" id="" value="<?php if(isset($_REQUEST['svsb26'])){ echo $_REQUEST['svsb26'] ;} ?>"></td>
            <td><input type="text" name="svsc26" id="" value="<?php if(isset($_REQUEST['svsc26'])){ echo $_REQUEST['svsc26'] ;} ?>"></td>
            <td><input type="text" name="svsd26" id="" value="<?php if(isset($_REQUEST['svsd26'])){ echo $_REQUEST['svsd26'] ;} ?>"></td>
            <td><input type="text" name="svse26" id="" value="<?php if(isset($_REQUEST['svse26'])){ echo $_REQUEST['svse26'] ;} ?>"></td>
            <td><input type="text" name="svsf26" id="" value="<?php if(isset($_REQUEST['svsf26'])){ echo $_REQUEST['svsf26'] ;} ?>"></td>
            <td><input type="text" name="svsg26" id="" value="<?php if(isset($_REQUEST['svsg26'])){ echo $_REQUEST['svsg26'] ;} ?>"></td>
            <td><input type="text" name="svsh26" id="" value="<?php if(isset($_REQUEST['svsh26'])){ echo $_REQUEST['svsh26'] ;} ?>"></td>
            <td><input type="text" name="svsi26" id="" value="<?php if(isset($_REQUEST['svsi26'])){ echo $_REQUEST['svsi26'] ;} ?>"></td>
            <td><input type="text" name="svsj26" id="" value="<?php if(isset($_REQUEST['svsj26'])){ echo $_REQUEST['svsj26'] ;} ?>"></td>
            <td><input type="text" name="svsk26" id="" value="<?php if(isset($_REQUEST['svsk26'])){ echo $_REQUEST['svsk26'] ;} ?>"></td>
            <td><input type="text" name="svsl26" id="" value="<?php if(isset($_REQUEST['svsl26'])){ echo $_REQUEST['svsl26'] ;} ?>"></td>
            <td><input type="text" name="svsm26" id="" value="<?php if(isset($_REQUEST['svsm26'])){ echo $_REQUEST['svsm26'] ;} ?>"></td>
            <td><input type="text" name="svsn26" id="" value="<?php if(isset($_REQUEST['svsn26'])){ echo $_REQUEST['svsn26'] ;} ?>"></td>
            <td><input type="text" name="svso26" id="" value="<?php if(isset($_REQUEST['svso26'])){ echo $_REQUEST['svso26'] ;} ?>"></td>
            <td><input type="text" name="svsp26" id="" value="<?php if(isset($_REQUEST['svsp26'])){ echo $_REQUEST['svsp26'] ;} ?>"></td>
            <td><input type="text" name="svsq26" id="" value="<?php if(isset($_REQUEST['svsq26'])){ echo $_REQUEST['svsq26'] ;} ?>"></td>
            <td><input type="text" name="svsr26" id="" value="<?php if(isset($_REQUEST['svsr26'])){ echo $_REQUEST['svsr26'] ;} ?>"></td>
            <td><input type="text" name="svss26" id="" value="<?php if(isset($_REQUEST['svss26'])){ echo $_REQUEST['svss26'] ;} ?>"></td>
            <td><input type="text" name="svst26" id="" value="<?php if(isset($_REQUEST['svst26'])){ echo $_REQUEST['svst26'] ;} ?>"></td>
            <td><input type="text" name="svsu26" id="" value="<?php if(isset($_REQUEST['svsu26'])){ echo $_REQUEST['svsu26'] ;} ?>"></td>
            <td><input type="text" name="svsv26" id="" value="<?php if(isset($_REQUEST['svsv26'])){ echo $_REQUEST['svsv26'] ;} ?>"></td>
            <td><input type="text" name="svsw26" id="" value="<?php if(isset($_REQUEST['svsw26'])){ echo $_REQUEST['svsw26'] ;} ?>"></td>
            <td><input type="text" name="svsx26" id="" value="<?php if(isset($_REQUEST['svsx26'])){ echo $_REQUEST['svsx26'] ;} ?>"></td>
            <td><input type="text" name="svsy26" id="" value="<?php if(isset($_REQUEST['svsy26'])){ echo $_REQUEST['svsy26'] ;} ?>"></td>
            <td><input type="text" name="svsz26" id="" value="<?php if(isset($_REQUEST['svsz26'])){ echo $_REQUEST['svsz26'] ;} ?>"></td>
            <td><input type="text" name="svsaa26" id="" value="<?php if(isset($_REQUEST['svsaa26'])){ echo $_REQUEST['svsaa26'] ;} ?>"></td>
            <td><input type="text" name="svsab26" id="" value="<?php if(isset($_REQUEST['svsab26'])){ echo $_REQUEST['svsab26'] ;} ?>"></td>
            <td><input type="text" name="svsac26" id="" value="<?php if(isset($_REQUEST['svsac26'])){ echo $_REQUEST['svsac26'] ;} ?>"></td>
            <td><input type="text" name="svsad26" id="" value="<?php if(isset($_REQUEST['svsad26'])){ echo $_REQUEST['svsad26'] ;} ?>"></td>
            <td><input type="text" name="svsae26" id="" value="<?php if(isset($_REQUEST['svsae26'])){ echo $_REQUEST['svsae26'] ;} ?>"></td>
            <td><input type="text" name="svsaf26" id="" value="<?php if(isset($_REQUEST['svsaf26'])){ echo $_REQUEST['svsaf26'] ;} ?>"></td>
            <td><input type="text" name="svsag26" id="" value="<?php if(isset($_REQUEST['svsag26'])){ echo $_REQUEST['svsag26'] ;} ?>"></td>
            <td><input type="text" name="svsah26" id="" value="<?php if(isset($_REQUEST['svsah26'])){ echo $_REQUEST['svsah26'] ;} ?>"></td>
            <td><input type="text" name="svsai26" id="" value="<?php if(isset($_REQUEST['svsai26'])){ echo $_REQUEST['svsai26'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">27</td>
            <td><input type="text" name="svsa27" id="" value="<?php if(isset($_REQUEST['svsa27'])){ echo $_REQUEST['svsa27'] ;} ?>"></td>
            <td><input type="text" name="svsb27" id="" value="<?php if(isset($_REQUEST['svsb27'])){ echo $_REQUEST['svsb27'] ;} ?>"></td>
            <td><input type="text" name="svsc27" id="" value="<?php if(isset($_REQUEST['svsc27'])){ echo $_REQUEST['svsc27'] ;} ?>"></td>
            <td><input type="text" name="svsd27" id="" value="<?php if(isset($_REQUEST['svsd27'])){ echo $_REQUEST['svsd27'] ;} ?>"></td>
            <td><input type="text" name="svse27" id="" value="<?php if(isset($_REQUEST['svse27'])){ echo $_REQUEST['svse27'] ;} ?>"></td>
            <td><input type="text" name="svsf27" id="" value="<?php if(isset($_REQUEST['svsf27'])){ echo $_REQUEST['svsf27'] ;} ?>"></td>
            <td><input type="text" name="svsg27" id="" value="<?php if(isset($_REQUEST['svsg27'])){ echo $_REQUEST['svsg27'] ;} ?>"></td>
            <td><input type="text" name="svsh27" id="" value="<?php if(isset($_REQUEST['svsh27'])){ echo $_REQUEST['svsh27'] ;} ?>"></td>
            <td><input type="text" name="svsi27" id="" value="<?php if(isset($svsi27)){ echo $svsi27 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsj27" id="" value="<?php if(isset($_REQUEST['svsj27'])){ echo $_REQUEST['svsj27'] ;} ?>"></td>
            <td><input type="text" name="svsk27" id="" value="<?php if(isset($svsk27)){ echo $svsk27 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsl27" id="" value="<?php if(isset($_REQUEST['svsl27'])){ echo $_REQUEST['svsl27'] ;} ?>"></td>
            <td><input type="text" name="svsm27" id="" value="<?php if(isset($svsm27)){ echo $svsm27 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsn27" id="" value="<?php if(isset($_REQUEST['svsn27'])){ echo $_REQUEST['svsn27'] ;} ?>"></td>
            <td><input type="text" name="svso27" id="" value="<?php if(isset($svso27)){ echo $svso27 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsp27" id="" value="<?php if(isset($_REQUEST['svsp27'])){ echo $_REQUEST['svsp27'] ;} ?>"></td>
            <td><input type="text" name="svsq27" id="" value="<?php if(isset($svsq27)){ echo $svsq27 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsr27" id="" value="<?php if(isset($_REQUEST['svsr27'])){ echo $_REQUEST['svsr27'] ;} ?>"></td>
            <td><input type="text" name="svss27" id="" value="<?php if(isset($svss27)){ echo $svss27 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svst27" id="" value="<?php if(isset($svst27)){ echo $svst27 ;} else{ echo 0 ;} ?>"></td>
            <td><input type="text" name="svsu27" id="" value="<?php if(isset($_REQUEST['svsu27'])){ echo $_REQUEST['svsu27'] ;} ?>"></td>
            <td><input type="text" name="svsv27" id="" value="<?php if(isset($_REQUEST['svsv27'])){ echo $_REQUEST['svsv27'] ;} ?>"></td>
            <td><input type="text" name="svsw27" id="" value="<?php if(isset($_REQUEST['svsw27'])){ echo $_REQUEST['svsw27'] ;} ?>"></td>
            <td><input type="text" name="svsx27" id="" value="<?php if(isset($_REQUEST['svsx27'])){ echo $_REQUEST['svsx27'] ;} ?>"></td>
            <td><input type="text" name="svsy27" id="" value="<?php if(isset($_REQUEST['svsy27'])){ echo $_REQUEST['svsy27'] ;} ?>"></td>
            <td><input type="text" name="svsz27" id="" value="<?php if(isset($_REQUEST['svsz27'])){ echo $_REQUEST['svsz27'] ;} ?>"></td>
            <td><input type="text" name="svsaa27" id="" value="<?php if(isset($_REQUEST['svsaa27'])){ echo $_REQUEST['svsaa27'] ;} ?>"></td>
            <td><input type="text" name="svsab27" id="" value="<?php if(isset($_REQUEST['svsab27'])){ echo $_REQUEST['svsab27'] ;} ?>"></td>
            <td><input type="text" name="svsac27" id="" value="<?php if(isset($_REQUEST['svsac27'])){ echo $_REQUEST['svsac27'] ;} ?>"></td>
            <td><input type="text" name="svsad27" id="" value="<?php if(isset($_REQUEST['svsad27'])){ echo $_REQUEST['svsad27'] ;} ?>"></td>
            <td><input type="text" name="svsae27" id="" value="<?php if(isset($_REQUEST['svsae27'])){ echo $_REQUEST['svsae27'] ;} ?>"></td>
            <td><input type="text" name="svsaf27" id="" value="<?php if(isset($_REQUEST['svsaf27'])){ echo $_REQUEST['svsaf27'] ;} ?>"></td>
            <td><input type="text" name="svsag27" id="" value="<?php if(isset($_REQUEST['svsag27'])){ echo $_REQUEST['svsag27'] ;} ?>"></td>
            <td><input type="text" name="svsah27" id="" value="<?php if(isset($_REQUEST['svsah27'])){ echo $_REQUEST['svsah27'] ;} ?>"></td>
            <td><input type="text" name="svsai27" id="" value="<?php if(isset($_REQUEST['svsai27'])){ echo $_REQUEST['svsai27'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">28</td>
            <td><input type="text" name="svsa28" id="" value="<?php if(isset($_REQUEST['svsa28'])){ echo $_REQUEST['svsa28'] ;} ?>"></td>
            <td><input type="text" name="svsb28" id="" value="<?php if(isset($_REQUEST['svsb28'])){ echo $_REQUEST['svsb28'] ;} ?>"></td>
            <td><input type="text" name="svsc28" id="" value="<?php if(isset($_REQUEST['svsc28'])){ echo $_REQUEST['svsc28'] ;} ?>"></td>
            <td><input type="text" name="svsd28" id="" value="<?php if(isset($_REQUEST['svsd28'])){ echo $_REQUEST['svsd28'] ;} ?>"></td>
            <td><input type="text" name="svse28" id="" value="<?php if(isset($_REQUEST['svse28'])){ echo $_REQUEST['svse28'] ;} ?>"></td>
            <td><input type="text" name="svsf28" id="" value="<?php if(isset($_REQUEST['svsf28'])){ echo $_REQUEST['svsf28'] ;} ?>"></td>
            <td><input type="text" name="svsg28" id="" value="<?php if(isset($_REQUEST['svsg28'])){ echo $_REQUEST['svsg28'] ;} ?>"></td>
            <td><input type="text" name="svsh28" id="" value="<?php if(isset($_REQUEST['svsh28'])){ echo $_REQUEST['svsh28'] ;} ?>"></td>
            <td><input type="text" name="svsi28" id="" value="<?php if(isset($_REQUEST['svsi28'])){ echo $_REQUEST['svsi28'] ;} ?>"></td>
            <td><input type="text" name="svsj28" id="" value="<?php if(isset($_REQUEST['svsj28'])){ echo $_REQUEST['svsj28'] ;} ?>"></td>
            <td><input type="text" name="svsk28" id="" value="<?php if(isset($_REQUEST['svsk28'])){ echo $_REQUEST['svsk28'] ;} ?>"></td>
            <td><input type="text" name="svsl28" id="" value="<?php if(isset($_REQUEST['svsl28'])){ echo $_REQUEST['svsl28'] ;} ?>"></td>
            <td><input type="text" name="svsm28" id="" value="<?php if(isset($_REQUEST['svsm28'])){ echo $_REQUEST['svsm28'] ;} ?>"></td>
            <td><input type="text" name="svsn28" id="" value="<?php if(isset($_REQUEST['svsn28'])){ echo $_REQUEST['svsn28'] ;} ?>"></td>
            <td><input type="text" name="svso28" id="" value="<?php if(isset($_REQUEST['svso28'])){ echo $_REQUEST['svso28'] ;} ?>"></td>
            <td><input type="text" name="svsp28" id="" value="<?php if(isset($_REQUEST['svsp28'])){ echo $_REQUEST['svsp28'] ;} ?>"></td>
            <td><input type="text" name="svsq28" id="" value="<?php if(isset($_REQUEST['svsq28'])){ echo $_REQUEST['svsq28'] ;} ?>"></td>
            <td><input type="text" name="svsr28" id="" value="<?php if(isset($_REQUEST['svsr28'])){ echo $_REQUEST['svsr28'] ;} ?>"></td>
            <td><input type="text" name="svss28" id="" value="<?php if(isset($_REQUEST['svss28'])){ echo $_REQUEST['svss28'] ;} ?>"></td>
            <td><input type="text" name="svst28" id="" value="<?php if(isset($_REQUEST['svst28'])){ echo $_REQUEST['svst28'] ;} ?>"></td>
            <td><input type="text" name="svsu28" id="" value="<?php if(isset($_REQUEST['svsu28'])){ echo $_REQUEST['svsu28'] ;} ?>"></td>
            <td><input type="text" name="svsv28" id="" value="<?php if(isset($_REQUEST['svsv28'])){ echo $_REQUEST['svsv28'] ;} ?>"></td>
            <td><input type="text" name="svsw28" id="" value="<?php if(isset($_REQUEST['svsw28'])){ echo $_REQUEST['svsw28'] ;} ?>"></td>
            <td><input type="text" name="svsx28" id="" value="<?php if(isset($_REQUEST['svsx28'])){ echo $_REQUEST['svsx28'] ;} ?>"></td>
            <td><input type="text" name="svsy28" id="" value="<?php if(isset($_REQUEST['svsy28'])){ echo $_REQUEST['svsy28'] ;} ?>"></td>
            <td><input type="text" name="svsz28" id="" value="<?php if(isset($_REQUEST['svsz28'])){ echo $_REQUEST['svsz28'] ;} ?>"></td>
            <td><input type="text" name="svsaa28" id="" value="<?php if(isset($_REQUEST['svsaa28'])){ echo $_REQUEST['svsaa28'] ;} ?>"></td>
            <td><input type="text" name="svsab28" id="" value="<?php if(isset($_REQUEST['svsab28'])){ echo $_REQUEST['svsab28'] ;} ?>"></td>
            <td><input type="text" name="svsac28" id="" value="<?php if(isset($_REQUEST['svsac28'])){ echo $_REQUEST['svsac28'] ;} ?>"></td>
            <td><input type="text" name="svsad28" id="" value="<?php if(isset($_REQUEST['svsad28'])){ echo $_REQUEST['svsad28'] ;} ?>"></td>
            <td><input type="text" name="svsae28" id="" value="<?php if(isset($_REQUEST['svsae28'])){ echo $_REQUEST['svsae28'] ;} ?>"></td>
            <td><input type="text" name="svsaf28" id="" value="<?php if(isset($_REQUEST['svsaf28'])){ echo $_REQUEST['svsaf28'] ;} ?>"></td>
            <td><input type="text" name="svsag28" id="" value="<?php if(isset($_REQUEST['svsag28'])){ echo $_REQUEST['svsag28'] ;} ?>"></td>
            <td><input type="text" name="svsah28" id="" value="<?php if(isset($_REQUEST['svsah28'])){ echo $_REQUEST['svsah28'] ;} ?>"></td>
            <td><input type="text" name="svsai28" id="" value="<?php if(isset($_REQUEST['svsai28'])){ echo $_REQUEST['svsai28'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td>
            <td><input type="text" name="svsa29" id="" value="<?php if(isset($_REQUEST['svsa29'])){ echo $_REQUEST['svsa29'] ;} ?>"></td>
            <td><input type="text" name="svsb29" id="" value="<?php if(isset($_REQUEST['svsb29'])){ echo $_REQUEST['svsb29'] ;} ?>"></td>
            <td><input type="text" name="svsc29" id="" value="<?php if(isset($_REQUEST['svsc29'])){ echo $_REQUEST['svsc29'] ;} ?>"></td>
            <td><input type="text" name="svsd29" id="" value="<?php if(isset($_REQUEST['svsd29'])){ echo $_REQUEST['svsd29'] ;} ?>"></td>
            <td><input type="text" name="svse29" id="" value="<?php if(isset($_REQUEST['svse29'])){ echo $_REQUEST['svse29'] ;} ?>"></td>
            <td><input type="text" name="svsf29" id="" value="<?php if(isset($_REQUEST['svsf29'])){ echo $_REQUEST['svsf29'] ;} ?>"></td>
            <td><input type="text" name="svsg29" id="" value="<?php if(isset($_REQUEST['svsg29'])){ echo $_REQUEST['svsg29'] ;} ?>"></td>
            <td><input type="text" name="svsh29" id="" value="<?php if(isset($_REQUEST['svsh29'])){ echo $_REQUEST['svsh29'] ;} ?>"></td>
            <td><input type="text" name="svsi29" id="" value="<?php if(isset($_REQUEST['svsi29'])){ echo $_REQUEST['svsi29'] ;} ?>"></td>
            <td><input type="text" name="svsj29" id="" value="<?php if(isset($_REQUEST['svsj29'])){ echo $_REQUEST['svsj29'] ;} ?>"></td>
            <td><input type="text" name="svsk29" id="" value="<?php if(isset($_REQUEST['svsk29'])){ echo $_REQUEST['svsk29'] ;} ?>"></td>
            <td><input type="text" name="svsl29" id="" value="<?php if(isset($_REQUEST['svsl29'])){ echo $_REQUEST['svsl29'] ;} ?>"></td>
            <td><input type="text" name="svsm29" id="" value="<?php if(isset($_REQUEST['svsm29'])){ echo $_REQUEST['svsm29'] ;} ?>"></td>
            <td><input type="text" name="svsn29" id="" value="<?php if(isset($_REQUEST['svsn29'])){ echo $_REQUEST['svsn29'] ;} ?>"></td>
            <td><input type="text" name="svso29" id="" value="<?php if(isset($_REQUEST['svso29'])){ echo $_REQUEST['svso29'] ;} ?>"></td>
            <td><input type="text" name="svsp29" id="" value="<?php if(isset($_REQUEST['svsp29'])){ echo $_REQUEST['svsp29'] ;} ?>"></td>
            <td><input type="text" name="svsq29" id="" value="<?php if(isset($_REQUEST['svsq29'])){ echo $_REQUEST['svsq29'] ;} ?>"></td>
            <td><input type="text" name="svsr29" id="" value="<?php if(isset($_REQUEST['svsr29'])){ echo $_REQUEST['svsr29'] ;} ?>"></td>
            <td><input type="text" name="svss29" id="" value="<?php if(isset($_REQUEST['svss29'])){ echo $_REQUEST['svss29'] ;} ?>"></td>
            <td><input type="text" name="svst29" id="" value="<?php if(isset($_REQUEST['svst29'])){ echo $_REQUEST['svst29'] ;} ?>"></td>
            <td><input type="text" name="svsu29" id="" value="<?php if(isset($_REQUEST['svsu29'])){ echo $_REQUEST['svsu29'] ;} ?>"></td>
            <td><input type="text" name="svsv29" id="" value="<?php if(isset($_REQUEST['svsv29'])){ echo $_REQUEST['svsv29'] ;} ?>"></td>
            <td><input type="text" name="svsw29" id="" value="<?php if(isset($_REQUEST['svsw29'])){ echo $_REQUEST['svsw29'] ;} ?>"></td>
            <td><input type="text" name="svsx29" id="" value="<?php if(isset($_REQUEST['svsx29'])){ echo $_REQUEST['svsx29'] ;} ?>"></td>
            <td><input type="text" name="svsy29" id="" value="<?php if(isset($_REQUEST['svsy29'])){ echo $_REQUEST['svsy29'] ;} ?>"></td>
            <td><input type="text" name="svsz29" id="" value="<?php if(isset($_REQUEST['svsz29'])){ echo $_REQUEST['svsz29'] ;} ?>"></td>
            <td><input type="text" name="svsaa29" id="" value="<?php if(isset($_REQUEST['svsaa29'])){ echo $_REQUEST['svsaa29'] ;} ?>"></td>
            <td><input type="text" name="svsab29" id="" value="<?php if(isset($_REQUEST['svsab29'])){ echo $_REQUEST['svsab29'] ;} ?>"></td>
            <td><input type="text" name="svsac29" id="" value="<?php if(isset($_REQUEST['svsac29'])){ echo $_REQUEST['svsac29'] ;} ?>"></td>
            <td><input type="text" name="svsad29" id="" value="<?php if(isset($_REQUEST['svsad29'])){ echo $_REQUEST['svsad29'] ;} ?>"></td>
            <td><input type="text" name="svsae29" id="" value="<?php if(isset($_REQUEST['svsae29'])){ echo $_REQUEST['svsae29'] ;} ?>"></td>
            <td><input type="text" name="svsaf29" id="" value="<?php if(isset($_REQUEST['svsaf29'])){ echo $_REQUEST['svsaf29'] ;} ?>"></td>
            <td><input type="text" name="svsag29" id="" value="<?php if(isset($_REQUEST['svsag29'])){ echo $_REQUEST['svsag29'] ;} ?>"></td>
            <td><input type="text" name="svsah29" id="" value="<?php if(isset($_REQUEST['svsah29'])){ echo $_REQUEST['svsah29'] ;} ?>"></td>
            <td><input type="text" name="svsai29" id="" value="<?php if(isset($_REQUEST['svsai29'])){ echo $_REQUEST['svsai29'] ;} ?>"></td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">30</td>
            <td><input type="text" name="svsa30" id="" value="<?php if(isset($_REQUEST['svsa30'])){ echo $_REQUEST['svsa30'] ;} ?>"></td>
            <td><input type="text" name="svsb30" id="" value="<?php if(isset($_REQUEST['svsb30'])){ echo $_REQUEST['svsb30'] ;} ?>"></td>
            <td><input type="text" name="svsc30" id="" value="<?php if(isset($_REQUEST['svsc30'])){ echo $_REQUEST['svsc30'] ;} ?>"></td>
            <td><input type="text" name="svsd30" id="" value="<?php if(isset($_REQUEST['svsd30'])){ echo $_REQUEST['svsd30'] ;} ?>"></td>
            <td><input type="text" name="svse30" id="" value="<?php if(isset($_REQUEST['svse30'])){ echo $_REQUEST['svse30'] ;} ?>"></td>
            <td><input type="text" name="svsf30" id="" value="<?php if(isset($_REQUEST['svsf30'])){ echo $_REQUEST['svsf30'] ;} ?>"></td>
            <td><input type="text" name="svsg30" id="" value="<?php if(isset($_REQUEST['svsg30'])){ echo $_REQUEST['svsg30'] ;} ?>"></td>
            <td><input type="text" name="svsh30" id="" value="<?php if(isset($_REQUEST['svsh30'])){ echo $_REQUEST['svsh30'] ;} ?>"></td>
            <td><input type="text" name="svsi30" id="" value="<?php if(isset($_REQUEST['svsi30'])){ echo $_REQUEST['svsi30'] ;} ?>"></td>
            <td><input type="text" name="svsj30" id="" value="<?php if(isset($_REQUEST['svsj30'])){ echo $_REQUEST['svsj30'] ;} ?>"></td>
            <td><input type="text" name="svsk30" id="" value="<?php if(isset($_REQUEST['svsk30'])){ echo $_REQUEST['svsk30'] ;} ?>"></td>
            <td><input type="text" name="svsl30" id="" value="<?php if(isset($_REQUEST['svsl30'])){ echo $_REQUEST['svsl30'] ;} ?>"></td>
            <td><input type="text" name="svsm30" id="" value="<?php if(isset($_REQUEST['svsm30'])){ echo $_REQUEST['svsm30'] ;} ?>"></td>
            <td><input type="text" name="svsn30" id="" value="<?php if(isset($_REQUEST['svsn30'])){ echo $_REQUEST['svsn30'] ;} ?>"></td>
            <td><input type="text" name="svso30" id="" value="<?php if(isset($_REQUEST['svso30'])){ echo $_REQUEST['svso30'] ;} ?>"></td>
            <td><input type="text" name="svsp30" id="" value="<?php if(isset($_REQUEST['svsp30'])){ echo $_REQUEST['svsp30'] ;} ?>"></td>
            <td><input type="text" name="svsq30" id="" value="<?php if(isset($_REQUEST['svsq30'])){ echo $_REQUEST['svsq30'] ;} ?>"></td>
            <td><input type="text" name="svsr30" id="" value="<?php if(isset($_REQUEST['svsr30'])){ echo $_REQUEST['svsr30'] ;} ?>"></td>
            <td><input type="text" name="svss30" id="" value="<?php if(isset($_REQUEST['svss30'])){ echo $_REQUEST['svss30'] ;} ?>"></td>
            <td><input type="text" name="svst30" id="" value="<?php if(isset($_REQUEST['svst30'])){ echo $_REQUEST['svst30'] ;} ?>"></td>
            <td><input type="text" name="svsu30" id="" value="<?php if(isset($_REQUEST['svsu30'])){ echo $_REQUEST['svsu30'] ;} ?>"></td>
            <td><input type="text" name="svsv30" id="" value="<?php if(isset($_REQUEST['svsv30'])){ echo $_REQUEST['svsv30'] ;} ?>"></td>
            <td><input type="text" name="svsw30" id="" value="<?php if(isset($_REQUEST['svsw30'])){ echo $_REQUEST['svsw30'] ;} ?>"></td>
            <td><input type="text" name="svsx30" id="" value="<?php if(isset($_REQUEST['svsx30'])){ echo $_REQUEST['svsx30'] ;} ?>"></td>
            <td><input type="text" name="svsy30" id="" value="<?php if(isset($_REQUEST['svsy30'])){ echo $_REQUEST['svsy30'] ;} ?>"></td>
            <td><input type="text" name="svsz30" id="" value="<?php if(isset($_REQUEST['svsz30'])){ echo $_REQUEST['svsz30'] ;} ?>"></td>
            <td><input type="text" name="svsaa30" id="" value="<?php if(isset($_REQUEST['svsaa30'])){ echo $_REQUEST['svsaa30'] ;} ?>"></td>
            <td><input type="text" name="svsab30" id="" value="<?php if(isset($_REQUEST['svsab30'])){ echo $_REQUEST['svsab30'] ;} ?>"></td>
            <td><input type="text" name="svsac30" id="" value="<?php if(isset($_REQUEST['svsac30'])){ echo $_REQUEST['svsac30'] ;} ?>"></td>
            <td><input type="text" name="svsad30" id="" value="<?php if(isset($_REQUEST['svsad30'])){ echo $_REQUEST['svsad30'] ;} ?>"></td>
            <td><input type="text" name="svsae30" id="" value="<?php if(isset($_REQUEST['svsae30'])){ echo $_REQUEST['svsae30'] ;} ?>"></td>
            <td><input type="text" name="svsaf30" id="" value="<?php if(isset($_REQUEST['svsaf30'])){ echo $_REQUEST['svsaf30'] ;} ?>"></td>
            <td><input type="text" name="svsag30" id="" value="<?php if(isset($_REQUEST['svsag30'])){ echo $_REQUEST['svsag30'] ;} ?>"></td>
            <td><input type="text" name="svsah30" id="" value="<?php if(isset($_REQUEST['svsah30'])){ echo $_REQUEST['svsah30'] ;} ?>"></td>
            <td><input type="text" name="svsai30" id="" value="<?php if(isset($_REQUEST['svsai30'])){ echo $_REQUEST['svsai30'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">31</td>
            <td><input type="text" name="svsa31" id="" value="<?php if(isset($_REQUEST['svsa31'])){ echo $_REQUEST['svsa31'] ;} ?>"></td>
            <td><input type="text" name="svsb31" id="" value="<?php if(isset($_REQUEST['svsb31'])){ echo $_REQUEST['svsb31'] ;} ?>"></td>
            <td><input type="text" name="svsc31" id="" value="<?php if(isset($_REQUEST['svsc31'])){ echo $_REQUEST['svsc31'] ;} ?>"></td>
            <td><input type="text" name="svsd31" id="" value="<?php if(isset($_REQUEST['svsd31'])){ echo $_REQUEST['svsd31'] ;} ?>"></td>
            <td><input type="text" name="svse31" id="" value="<?php if(isset($_REQUEST['svse31'])){ echo $_REQUEST['svse31'] ;} ?>"></td>
            <td><input type="text" name="svsf31" id="" value="<?php if(isset($_REQUEST['svsf31'])){ echo $_REQUEST['svsf31'] ;} ?>"></td>
            <td><input type="text" name="svsg31" id="" value="<?php if(isset($_REQUEST['svsg31'])){ echo $_REQUEST['svsg31'] ;} ?>"></td>
            <td><input type="text" name="svsh31" id="" value="<?php if(isset($_REQUEST['svsh31'])){ echo $_REQUEST['svsh31'] ;} ?>"></td>
            <td><input type="text" name="svsi31" id="" value="<?php if(isset($_REQUEST['svsi31'])){ echo $_REQUEST['svsi31'] ;} ?>"></td>
            <td><input type="text" name="svsj31" id="" value="<?php if(isset($_REQUEST['svsj31'])){ echo $_REQUEST['svsj31'] ;} ?>"></td>
            <td><input type="text" name="svsk31" id="" value="<?php if(isset($_REQUEST['svsk31'])){ echo $_REQUEST['svsk31'] ;} ?>"></td>
            <td><input type="text" name="svsl31" id="" value="<?php if(isset($_REQUEST['svsl31'])){ echo $_REQUEST['svsl31'] ;} ?>"></td>
            <td><input type="text" name="svsm31" id="" value="<?php if(isset($_REQUEST['svsm31'])){ echo $_REQUEST['svsm31'] ;} ?>"></td>
            <td><input type="text" name="svsn31" id="" value="<?php if(isset($_REQUEST['svsn31'])){ echo $_REQUEST['svsn31'] ;} ?>"></td>
            <td><input type="text" name="svso31" id="" value="<?php if(isset($_REQUEST['svso31'])){ echo $_REQUEST['svso31'] ;} ?>"></td>
            <td><input type="text" name="svsp31" id="" value="<?php if(isset($_REQUEST['svsp31'])){ echo $_REQUEST['svsp31'] ;} ?>"></td>
            <td><input type="text" name="svsq31" id="" value="<?php if(isset($_REQUEST['svsq31'])){ echo $_REQUEST['svsq31'] ;} ?>"></td>
            <td><input type="text" name="svsr31" id="" value="<?php if(isset($_REQUEST['svsr31'])){ echo $_REQUEST['svsr31'] ;} ?>"></td>
            <td><input type="text" name="svss31" id="" value="<?php if(isset($_REQUEST['svss31'])){ echo $_REQUEST['svss31'] ;} ?>"></td>
            <td><input type="text" name="svst31" id="" value="<?php if(isset($_REQUEST['svst31'])){ echo $_REQUEST['svst31'] ;} ?>"></td>
            <td><input type="text" name="svsu31" id="" value="<?php if(isset($_REQUEST['svsu31'])){ echo $_REQUEST['svsu31'] ;} ?>"></td>
            <td><input type="text" name="svsv31" id="" value="<?php if(isset($_REQUEST['svsv31'])){ echo $_REQUEST['svsv31'] ;} ?>"></td>
            <td><input type="text" name="svsw31" id="" value="<?php if(isset($_REQUEST['svsw31'])){ echo $_REQUEST['svsw31'] ;} ?>"></td>
            <td><input type="text" name="svsx31" id="" value="<?php if(isset($_REQUEST['svsx31'])){ echo $_REQUEST['svsx31'] ;} ?>"></td>
            <td><input type="text" name="svsy31" id="" value="<?php if(isset($_REQUEST['svsy31'])){ echo $_REQUEST['svsy31'] ;} ?>"></td>
            <td><input type="text" name="svsz31" id="" value="<?php if(isset($_REQUEST['svsz31'])){ echo $_REQUEST['svsz31'] ;} ?>"></td>
            <td><input type="text" name="svsaa31" id="" value="<?php if(isset($_REQUEST['svsaa31'])){ echo $_REQUEST['svsaa31'] ;} ?>"></td>
            <td><input type="text" name="svsab31" id="" value="<?php if(isset($_REQUEST['svsab31'])){ echo $_REQUEST['svsab31'] ;} ?>"></td>
            <td><input type="text" name="svsac31" id="" value="<?php if(isset($_REQUEST['svsac31'])){ echo $_REQUEST['svsac31'] ;} ?>"></td>
            <td><input type="text" name="svsad31" id="" value="<?php if(isset($_REQUEST['svsad31'])){ echo $_REQUEST['svsad31'] ;} ?>"></td>
            <td><input type="text" name="svsae31" id="" value="<?php if(isset($_REQUEST['svsae31'])){ echo $_REQUEST['svsae31'] ;} ?>"></td>
            <td><input type="text" name="svsaf31" id="" value="<?php if(isset($_REQUEST['svsaf31'])){ echo $_REQUEST['svsaf31'] ;} ?>"></td>
            <td><input type="text" name="svsag31" id="" value="<?php if(isset($_REQUEST['svsag31'])){ echo $_REQUEST['svsag31'] ;} ?>"></td>
            <td><input type="text" name="svsah31" id="" value="<?php if(isset($_REQUEST['svsah31'])){ echo $_REQUEST['svsah31'] ;} ?>"></td>
            <td><input type="text" name="svsai31" id="" value="<?php if(isset($_REQUEST['svsai31'])){ echo $_REQUEST['svsai31'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">32</td>
            <td><input type="text" name="svsa32" id="" value="<?php if(isset($_REQUEST['svsa32'])){ echo $_REQUEST['svsa32'] ;} ?>"></td>
            <td><input type="text" name="svsb32" id="" value="<?php if(isset($_REQUEST['svsb32'])){ echo $_REQUEST['svsb32'] ;} ?>"></td>
            <td><input type="text" name="svsc32" id="" value="<?php if(isset($_REQUEST['svsc32'])){ echo $_REQUEST['svsc32'] ;} ?>"></td>
            <td><input type="text" name="svsd32" id="" value="<?php if(isset($_REQUEST['svsd32'])){ echo $_REQUEST['svsd32'] ;} ?>"></td>
            <td><input type="text" name="svse32" id="" value="<?php if(isset($_REQUEST['svse32'])){ echo $_REQUEST['svse32'] ;} ?>"></td>
            <td><input type="text" name="svsf32" id="" value="<?php if(isset($_REQUEST['svsf32'])){ echo $_REQUEST['svsf32'] ;} ?>"></td>
            <td><input type="text" name="svsg32" id="" value="<?php if(isset($_REQUEST['svsg32'])){ echo $_REQUEST['svsg32'] ;} ?>"></td>
            <td><input type="text" name="svsh32" id="" value="<?php if(isset($_REQUEST['svsh32'])){ echo $_REQUEST['svsh32'] ;} ?>"></td>
            <td><input type="text" name="svsi32" id="" value="<?php if(isset($_REQUEST['svsi32'])){ echo $_REQUEST['svsi32'] ;} ?>"></td>
            <td><input type="text" name="svsj32" id="" value="<?php if(isset($_REQUEST['svsj32'])){ echo $_REQUEST['svsj32'] ;} ?>"></td>
            <td><input type="text" name="svsk32" id="" value="<?php if(isset($_REQUEST['svsk32'])){ echo $_REQUEST['svsk32'] ;} ?>"></td>
            <td><input type="text" name="svsl32" id="" value="<?php if(isset($_REQUEST['svsl32'])){ echo $_REQUEST['svsl32'] ;} ?>"></td>
            <td><input type="text" name="svsm32" id="" value="<?php if(isset($_REQUEST['svsm32'])){ echo $_REQUEST['svsm32'] ;} ?>"></td>
            <td><input type="text" name="svsn32" id="" value="<?php if(isset($_REQUEST['svsn32'])){ echo $_REQUEST['svsn32'] ;} ?>"></td>
            <td><input type="text" name="svso32" id="" value="<?php if(isset($_REQUEST['svso32'])){ echo $_REQUEST['svso32'] ;} ?>"></td>
            <td><input type="text" name="svsp32" id="" value="<?php if(isset($_REQUEST['svsp32'])){ echo $_REQUEST['svsp32'] ;} ?>"></td>
            <td><input type="text" name="svsq32" id="" value="<?php if(isset($_REQUEST['svsq32'])){ echo $_REQUEST['svsq32'] ;} ?>"></td>
            <td><input type="text" name="svsr32" id="" value="<?php if(isset($_REQUEST['svsr32'])){ echo $_REQUEST['svsr32'] ;} ?>"></td>
            <td><input type="text" name="svss32" id="" value="<?php if(isset($_REQUEST['svss32'])){ echo $_REQUEST['svss32'] ;} ?>"></td>
            <td><input type="text" name="svst32" id="" value="<?php if(isset($_REQUEST['svst32'])){ echo $_REQUEST['svst32'] ;} ?>"></td>
            <td><input type="text" name="svsu32" id="" value="<?php if(isset($_REQUEST['svsu32'])){ echo $_REQUEST['svsu32'] ;} ?>"></td>
            <td><input type="text" name="svsv32" id="" value="<?php if(isset($_REQUEST['svsv32'])){ echo $_REQUEST['svsv32'] ;} ?>"></td>
            <td><input type="text" name="svsw32" id="" value="<?php if(isset($_REQUEST['svsw32'])){ echo $_REQUEST['svsw32'] ;} ?>"></td>
            <td><input type="text" name="svsx32" id="" value="<?php if(isset($_REQUEST['svsx32'])){ echo $_REQUEST['svsx32'] ;} ?>"></td>
            <td><input type="text" name="svsy32" id="" value="<?php if(isset($_REQUEST['svsy32'])){ echo $_REQUEST['svsy32'] ;} ?>"></td>
            <td><input type="text" name="svsz32" id="" value="<?php if(isset($_REQUEST['svsz32'])){ echo $_REQUEST['svsz32'] ;} ?>"></td>
            <td><input type="text" name="svsaa32" id="" value="<?php if(isset($_REQUEST['svsaa32'])){ echo $_REQUEST['svsaa32'] ;} ?>"></td>
            <td><input type="text" name="svsab32" id="" value="<?php if(isset($_REQUEST['svsab32'])){ echo $_REQUEST['svsab32'] ;} ?>"></td>
            <td><input type="text" name="svsac32" id="" value="<?php if(isset($_REQUEST['svsac32'])){ echo $_REQUEST['svsac32'] ;} ?>"></td>
            <td><input type="text" name="svsad32" id="" value="<?php if(isset($_REQUEST['svsad32'])){ echo $_REQUEST['svsad32'] ;} ?>"></td>
            <td><input type="text" name="svsae32" id="" value="<?php if(isset($_REQUEST['svsae32'])){ echo $_REQUEST['svsae32'] ;} ?>"></td>
            <td><input type="text" name="svsaf32" id="" value="<?php if(isset($_REQUEST['svsaf32'])){ echo $_REQUEST['svsaf32'] ;} ?>"></td>
            <td><input type="text" name="svsag32" id="" value="<?php if(isset($_REQUEST['svsag32'])){ echo $_REQUEST['svsag32'] ;} ?>"></td>
            <td><input type="text" name="svsah32" id="" value="<?php if(isset($_REQUEST['svsah32'])){ echo $_REQUEST['svsah32'] ;} ?>"></td>
            <td><input type="text" name="svsai32" id="" value="<?php if(isset($_REQUEST['svsai32'])){ echo $_REQUEST['svsai32'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">33</td>
            <td><input type="text" name="svsa33" id="" value="<?php if(isset($_REQUEST['svsa33'])){ echo $_REQUEST['svsa33'] ;} ?>"></td>
            <td><input type="text" name="svsb33" id="" value="<?php if(isset($_REQUEST['svsb33'])){ echo $_REQUEST['svsb33'] ;} ?>"></td>
            <td><input type="text" name="svsc33" id="" value="<?php if(isset($_REQUEST['svsc33'])){ echo $_REQUEST['svsc33'] ;} ?>"></td>
            <td><input type="text" name="svsd33" id="" value="<?php if(isset($_REQUEST['svsd33'])){ echo $_REQUEST['svsd33'] ;} ?>"></td>
            <td><input type="text" name="svse33" id="" value="<?php if(isset($_REQUEST['svse33'])){ echo $_REQUEST['svse33'] ;} ?>"></td>
            <td><input type="text" name="svsf33" id="" value="<?php if(isset($_REQUEST['svsf33'])){ echo $_REQUEST['svsf33'] ;} ?>"></td>
            <td><input type="text" name="svsg33" id="" value="<?php if(isset($_REQUEST['svsg33'])){ echo $_REQUEST['svsg33'] ;} ?>"></td>
            <td><input type="text" name="svsh33" id="" value="<?php if(isset($_REQUEST['svsh33'])){ echo $_REQUEST['svsh33'] ;} ?>"></td>
            <td><input type="text" name="svsi33" id="" value="<?php if(isset($_REQUEST['svsi33'])){ echo $_REQUEST['svsi33'] ;} ?>"></td>
            <td><input type="text" name="svsj33" id="" value="<?php if(isset($_REQUEST['svsj33'])){ echo $_REQUEST['svsj33'] ;} ?>"></td>
            <td><input type="text" name="svsk33" id="" value="<?php if(isset($_REQUEST['svsk33'])){ echo $_REQUEST['svsk33'] ;} ?>"></td>
            <td><input type="text" name="svsl33" id="" value="<?php if(isset($_REQUEST['svsl33'])){ echo $_REQUEST['svsl33'] ;} ?>"></td>
            <td><input type="text" name="svsm33" id="" value="<?php if(isset($_REQUEST['svsm33'])){ echo $_REQUEST['svsm33'] ;} ?>"></td>
            <td><input type="text" name="svsn33" id="" value="<?php if(isset($_REQUEST['svsn33'])){ echo $_REQUEST['svsn33'] ;} ?>"></td>
            <td><input type="text" name="svso33" id="" value="<?php if(isset($_REQUEST['svso33'])){ echo $_REQUEST['svso33'] ;} ?>"></td>
            <td><input type="text" name="svsp33" id="" value="<?php if(isset($_REQUEST['svsp33'])){ echo $_REQUEST['svsp33'] ;} ?>"></td>
            <td><input type="text" name="svsq33" id="" value="<?php if(isset($_REQUEST['svsq33'])){ echo $_REQUEST['svsq33'] ;} ?>"></td>
            <td><input type="text" name="svsr33" id="" value="<?php if(isset($_REQUEST['svsr33'])){ echo $_REQUEST['svsr33'] ;} ?>"></td>
            <td><input type="text" name="svss33" id="" value="<?php if(isset($_REQUEST['svss33'])){ echo $_REQUEST['svss33'] ;} ?>"></td>
            <td><input type="text" name="svst33" id="" value="<?php if(isset($_REQUEST['svst33'])){ echo $_REQUEST['svst33'] ;} ?>"></td>
            <td><input type="text" name="svsu33" id="" value="<?php if(isset($_REQUEST['svsu33'])){ echo $_REQUEST['svsu33'] ;} ?>"></td>
            <td><input type="text" name="svsv33" id="" value="<?php if(isset($_REQUEST['svsv33'])){ echo $_REQUEST['svsv33'] ;} ?>"></td>
            <td><input type="text" name="svsw33" id="" value="<?php if(isset($_REQUEST['svsw33'])){ echo $_REQUEST['svsw33'] ;} ?>"></td>
            <td><input type="text" name="svsx33" id="" value="<?php if(isset($_REQUEST['svsx33'])){ echo $_REQUEST['svsx33'] ;} ?>"></td>
            <td><input type="text" name="svsy33" id="" value="<?php if(isset($_REQUEST['svsy33'])){ echo $_REQUEST['svsy33'] ;} ?>"></td>
            <td><input type="text" name="svsz33" id="" value="<?php if(isset($_REQUEST['svsz33'])){ echo $_REQUEST['svsz33'] ;} ?>"></td>
            <td><input type="text" name="svsaa33" id="" value="<?php if(isset($_REQUEST['svsaa33'])){ echo $_REQUEST['svsaa33'] ;} ?>"></td>
            <td><input type="text" name="svsab33" id="" value="<?php if(isset($_REQUEST['svsab33'])){ echo $_REQUEST['svsab33'] ;} ?>"></td>
            <td><input type="text" name="svsac33" id="" value="<?php if(isset($_REQUEST['svsac33'])){ echo $_REQUEST['svsac33'] ;} ?>"></td>
            <td><input type="text" name="svsad33" id="" value="<?php if(isset($_REQUEST['svsad33'])){ echo $_REQUEST['svsad33'] ;} ?>"></td>
            <td><input type="text" name="svsae33" id="" value="<?php if(isset($_REQUEST['svsae33'])){ echo $_REQUEST['svsae33'] ;} ?>"></td>
            <td><input type="text" name="svsaf33" id="" value="<?php if(isset($_REQUEST['svsaf33'])){ echo $_REQUEST['svsaf33'] ;} ?>"></td>
            <td><input type="text" name="svsag33" id="" value="<?php if(isset($_REQUEST['svsag33'])){ echo $_REQUEST['svsag33'] ;} ?>"></td>
            <td><input type="text" name="svsah33" id="" value="<?php if(isset($_REQUEST['svsah33'])){ echo $_REQUEST['svsah33'] ;} ?>"></td>
            <td><input type="text" name="svsai33" id="" value="<?php if(isset($_REQUEST['svsai33'])){ echo $_REQUEST['svsai33'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">34</td>
            <td><input type="text" name="svsa34" id="" value="<?php if(isset($_REQUEST['svsa34'])){ echo $_REQUEST['svsa34'] ;} ?>"></td>
            <td><input type="text" name="svsb34" id="" value="<?php if(isset($_REQUEST['svsb34'])){ echo $_REQUEST['svsb34'] ;} ?>"></td>
            <td><input type="text" name="svsc34" id="" value="<?php if(isset($_REQUEST['svsc34'])){ echo $_REQUEST['svsc34'] ;} ?>"></td>
            <td><input type="text" name="svsd34" id="" value="<?php if(isset($_REQUEST['svsd34'])){ echo $_REQUEST['svsd34'] ;} ?>"></td>
            <td><input type="text" name="svse34" id="" value="<?php if(isset($_REQUEST['svse34'])){ echo $_REQUEST['svse34'] ;} ?>"></td>
            <td><input type="text" name="svsf34" id="" value="<?php if(isset($_REQUEST['svsf34'])){ echo $_REQUEST['svsf34'] ;} ?>"></td>
            <td><input type="text" name="svsg34" id="" value="<?php if(isset($_REQUEST['svsg34'])){ echo $_REQUEST['svsg34'] ;} ?>"></td>
            <td><input type="text" name="svsh34" id="" value="<?php if(isset($_REQUEST['svsh34'])){ echo $_REQUEST['svsh34'] ;} ?>"></td>
            <td><input type="text" name="svsi34" id="" value="<?php if(isset($_REQUEST['svsi34'])){ echo $_REQUEST['svsi34'] ;} ?>"></td>
            <td><input type="text" name="svsj34" id="" value="<?php if(isset($_REQUEST['svsj34'])){ echo $_REQUEST['svsj34'] ;} ?>"></td>
            <td><input type="text" name="svsk34" id="" value="<?php if(isset($_REQUEST['svsk34'])){ echo $_REQUEST['svsk34'] ;} ?>"></td>
            <td><input type="text" name="svsl34" id="" value="<?php if(isset($_REQUEST['svsl34'])){ echo $_REQUEST['svsl34'] ;} ?>"></td>
            <td><input type="text" name="svsm34" id="" value="<?php if(isset($_REQUEST['svsm34'])){ echo $_REQUEST['svsm34'] ;} ?>"></td>
            <td><input type="text" name="svsn34" id="" value="<?php if(isset($_REQUEST['svsn34'])){ echo $_REQUEST['svsn34'] ;} ?>"></td>
            <td><input type="text" name="svso34" id="" value="<?php if(isset($_REQUEST['svso34'])){ echo $_REQUEST['svso34'] ;} ?>"></td>
            <td><input type="text" name="svsp34" id="" value="<?php if(isset($_REQUEST['svsp34'])){ echo $_REQUEST['svsp34'] ;} ?>"></td>
            <td><input type="text" name="svsq34" id="" value="<?php if(isset($_REQUEST['svsq34'])){ echo $_REQUEST['svsq34'] ;} ?>"></td>
            <td><input type="text" name="svsr34" id="" value="<?php if(isset($_REQUEST['svsr34'])){ echo $_REQUEST['svsr34'] ;} ?>"></td>
            <td><input type="text" name="svss34" id="" value="<?php if(isset($_REQUEST['svss34'])){ echo $_REQUEST['svss34'] ;} ?>"></td>
            <td><input type="text" name="svst34" id="" value="<?php if(isset($_REQUEST['svst34'])){ echo $_REQUEST['svst34'] ;} ?>"></td>
            <td><input type="text" name="svsu34" id="" value="<?php if(isset($_REQUEST['svsu34'])){ echo $_REQUEST['svsu34'] ;} ?>"></td>
            <td><input type="text" name="svsv34" id="" value="<?php if(isset($_REQUEST['svsv34'])){ echo $_REQUEST['svsv34'] ;} ?>"></td>
            <td><input type="text" name="svsw34" id="" value="<?php if(isset($_REQUEST['svsw34'])){ echo $_REQUEST['svsw34'] ;} ?>"></td>
            <td><input type="text" name="svsx34" id="" value="<?php if(isset($_REQUEST['svsx34'])){ echo $_REQUEST['svsx34'] ;} ?>"></td>
            <td><input type="text" name="svsy34" id="" value="<?php if(isset($_REQUEST['svsy34'])){ echo $_REQUEST['svsy34'] ;} ?>"></td>
            <td><input type="text" name="svsz34" id="" value="<?php if(isset($_REQUEST['svsz34'])){ echo $_REQUEST['svsz34'] ;} ?>"></td>
            <td><input type="text" name="svsaa34" id="" value="<?php if(isset($_REQUEST['svsaa34'])){ echo $_REQUEST['svsaa34'] ;} ?>"></td>
            <td><input type="text" name="svsab34" id="" value="<?php if(isset($_REQUEST['svsab34'])){ echo $_REQUEST['svsab34'] ;} ?>"></td>
            <td><input type="text" name="svsac34" id="" value="<?php if(isset($_REQUEST['svsac34'])){ echo $_REQUEST['svsac34'] ;} ?>"></td>
            <td><input type="text" name="svsad34" id="" value="<?php if(isset($_REQUEST['svsad34'])){ echo $_REQUEST['svsad34'] ;} ?>"></td>
            <td><input type="text" name="svsae34" id="" value="<?php if(isset($_REQUEST['svsae34'])){ echo $_REQUEST['svsae34'] ;} ?>"></td>
            <td><input type="text" name="svsaf34" id="" value="<?php if(isset($_REQUEST['svsaf34'])){ echo $_REQUEST['svsaf34'] ;} ?>"></td>
            <td><input type="text" name="svsag34" id="" value="<?php if(isset($_REQUEST['svsag34'])){ echo $_REQUEST['svsag34'] ;} ?>"></td>
            <td><input type="text" name="svsah34" id="" value="<?php if(isset($_REQUEST['svsah34'])){ echo $_REQUEST['svsah34'] ;} ?>"></td>
            <td><input type="text" name="svsai34" id="" value="<?php if(isset($_REQUEST['svsai34'])){ echo $_REQUEST['svsai34'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">35</td>
            <td><input type="text" name="svsa35" id="" value="<?php if(isset($_REQUEST['svsa35'])){ echo $_REQUEST['svsa35'] ;} ?>"></td>
            <td><input type="text" name="svsb35" id="" value="<?php if(isset($_REQUEST['svsb35'])){ echo $_REQUEST['svsb35'] ;} ?>"></td>
            <td><input type="text" name="svsc35" id="" value="<?php if(isset($_REQUEST['svsc35'])){ echo $_REQUEST['svsc35'] ;} ?>"></td>
            <td><input type="text" name="svsd35" id="" value="<?php if(isset($_REQUEST['svsd35'])){ echo $_REQUEST['svsd35'] ;} ?>"></td>
            <td><input type="text" name="svse35" id="" value="<?php if(isset($_REQUEST['svse35'])){ echo $_REQUEST['svse35'] ;} ?>"></td>
            <td><input type="text" name="svsf35" id="" value="<?php if(isset($_REQUEST['svsf35'])){ echo $_REQUEST['svsf35'] ;} ?>"></td>
            <td><input type="text" name="svsg35" id="" value="<?php if(isset($_REQUEST['svsg35'])){ echo $_REQUEST['svsg35'] ;} ?>"></td>
            <td><input type="text" name="svsh35" id="" value="<?php if(isset($_REQUEST['svsh35'])){ echo $_REQUEST['svsh35'] ;} ?>"></td>
            <td><input type="text" name="svsi35" id="" value="<?php if(isset($_REQUEST['svsi35'])){ echo $_REQUEST['svsi35'] ;} ?>"></td>
            <td><input type="text" name="svsj35" id="" value="<?php if(isset($_REQUEST['svsj35'])){ echo $_REQUEST['svsj35'] ;} ?>"></td>
            <td><input type="text" name="svsk35" id="" value="<?php if(isset($_REQUEST['svsk35'])){ echo $_REQUEST['svsk35'] ;} ?>"></td>
            <td><input type="text" name="svsl35" id="" value="<?php if(isset($_REQUEST['svsl35'])){ echo $_REQUEST['svsl35'] ;} ?>"></td>
            <td><input type="text" name="svsm35" id="" value="<?php if(isset($_REQUEST['svsm35'])){ echo $_REQUEST['svsm35'] ;} ?>"></td>
            <td><input type="text" name="svsn35" id="" value="<?php if(isset($_REQUEST['svsn35'])){ echo $_REQUEST['svsn35'] ;} ?>"></td>
            <td><input type="text" name="svso35" id="" value="<?php if(isset($_REQUEST['svso35'])){ echo $_REQUEST['svso35'] ;} ?>"></td>
            <td><input type="text" name="svsp35" id="" value="<?php if(isset($_REQUEST['svsp35'])){ echo $_REQUEST['svsp35'] ;} ?>"></td>
            <td><input type="text" name="svsq35" id="" value="<?php if(isset($_REQUEST['svsq35'])){ echo $_REQUEST['svsq35'] ;} ?>"></td>
            <td><input type="text" name="svsr35" id="" value="<?php if(isset($_REQUEST['svsr35'])){ echo $_REQUEST['svsr35'] ;} ?>"></td>
            <td><input type="text" name="svss35" id="" value="<?php if(isset($_REQUEST['svss35'])){ echo $_REQUEST['svss35'] ;} ?>"></td>
            <td><input type="text" name="svst35" id="" value="<?php if(isset($_REQUEST['svst35'])){ echo $_REQUEST['svst35'] ;} ?>"></td>
            <td><input type="text" name="svsu35" id="" value="<?php if(isset($_REQUEST['svsu35'])){ echo $_REQUEST['svsu35'] ;} ?>"></td>
            <td><input type="text" name="svsv35" id="" value="<?php if(isset($_REQUEST['svsv35'])){ echo $_REQUEST['svsv35'] ;} ?>"></td>
            <td><input type="text" name="svsw35" id="" value="<?php if(isset($_REQUEST['svsw35'])){ echo $_REQUEST['svsw35'] ;} ?>"></td>
            <td><input type="text" name="svsx35" id="" value="<?php if(isset($_REQUEST['svsx35'])){ echo $_REQUEST['svsx35'] ;} ?>"></td>
            <td><input type="text" name="svsy35" id="" value="<?php if(isset($_REQUEST['svsy35'])){ echo $_REQUEST['svsy35'] ;} ?>"></td>
            <td><input type="text" name="svsz35" id="" value="<?php if(isset($_REQUEST['svsz35'])){ echo $_REQUEST['svsz35'] ;} ?>"></td>
            <td><input type="text" name="svsaa35" id="" value="<?php if(isset($_REQUEST['svsaa35'])){ echo $_REQUEST['svsaa35'] ;} ?>"></td>
            <td><input type="text" name="svsab35" id="" value="<?php if(isset($_REQUEST['svsab35'])){ echo $_REQUEST['svsab35'] ;} ?>"></td>
            <td><input type="text" name="svsac35" id="" value="<?php if(isset($_REQUEST['svsac35'])){ echo $_REQUEST['svsac35'] ;} ?>"></td>
            <td><input type="text" name="svsad35" id="" value="<?php if(isset($_REQUEST['svsad35'])){ echo $_REQUEST['svsad35'] ;} ?>"></td>
            <td><input type="text" name="svsae35" id="" value="<?php if(isset($_REQUEST['svsae35'])){ echo $_REQUEST['svsae35'] ;} ?>"></td>
            <td><input type="text" name="svsaf35" id="" value="<?php if(isset($_REQUEST['svsaf35'])){ echo $_REQUEST['svsaf35'] ;} ?>"></td>
            <td><input type="text" name="svsag35" id="" value="<?php if(isset($_REQUEST['svsag35'])){ echo $_REQUEST['svsag35'] ;} ?>"></td>
            <td><input type="text" name="svsah35" id="" value="<?php if(isset($_REQUEST['svsah35'])){ echo $_REQUEST['svsah35'] ;} ?>"></td>
            <td><input type="text" name="svsai35" id="" value="<?php if(isset($_REQUEST['svsai35'])){ echo $_REQUEST['svsai35'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">36</td>
            <td><input type="text" name="svsa36" id="" value="<?php if(isset($_REQUEST['svsa36'])){ echo $_REQUEST['svsa36'] ;} ?>"></td>
            <td><input type="text" name="svsb36" id="" value="<?php if(isset($_REQUEST['svsb36'])){ echo $_REQUEST['svsb36'] ;} ?>"></td>
            <td><input type="text" name="svsc36" id="" value="<?php if(isset($_REQUEST['svsc36'])){ echo $_REQUEST['svsc36'] ;} ?>"></td>
            <td><input type="text" name="svsd36" id="" value="<?php if(isset($_REQUEST['svsd36'])){ echo $_REQUEST['svsd36'] ;} ?>"></td>
            <td><input type="text" name="svse36" id="" value="<?php if(isset($_REQUEST['svse36'])){ echo $_REQUEST['svse36'] ;} ?>"></td>
            <td><input type="text" name="svsf36" id="" value="<?php if(isset($_REQUEST['svsf36'])){ echo $_REQUEST['svsf36'] ;} ?>"></td>
            <td><input type="text" name="svsg36" id="" value="<?php if(isset($_REQUEST['svsg36'])){ echo $_REQUEST['svsg36'] ;} ?>"></td>
            <td><input type="text" name="svsh36" id="" value="<?php if(isset($_REQUEST['svsh36'])){ echo $_REQUEST['svsh36'] ;} ?>"></td>
            <td><input type="text" name="svsi36" id="" value="<?php if(isset($_REQUEST['svsi36'])){ echo $_REQUEST['svsi36'] ;} ?>"></td>
            <td><input type="text" name="svsj36" id="" value="<?php if(isset($_REQUEST['svsj36'])){ echo $_REQUEST['svsj36'] ;} ?>"></td>
            <td><input type="text" name="svsk36" id="" value="<?php if(isset($_REQUEST['svsk36'])){ echo $_REQUEST['svsk36'] ;} ?>"></td>
            <td><input type="text" name="svsl36" id="" value="<?php if(isset($_REQUEST['svsl36'])){ echo $_REQUEST['svsl36'] ;} ?>"></td>
            <td><input type="text" name="svsm36" id="" value="<?php if(isset($_REQUEST['svsm36'])){ echo $_REQUEST['svsm36'] ;} ?>"></td>
            <td><input type="text" name="svsn36" id="" value="<?php if(isset($_REQUEST['svsn36'])){ echo $_REQUEST['svsn36'] ;} ?>"></td>
            <td><input type="text" name="svso36" id="" value="<?php if(isset($_REQUEST['svso36'])){ echo $_REQUEST['svso36'] ;} ?>"></td>
            <td><input type="text" name="svsp36" id="" value="<?php if(isset($_REQUEST['svsp36'])){ echo $_REQUEST['svsp36'] ;} ?>"></td>
            <td><input type="text" name="svsq36" id="" value="<?php if(isset($_REQUEST['svsq36'])){ echo $_REQUEST['svsq36'] ;} ?>"></td>
            <td><input type="text" name="svsr36" id="" value="<?php if(isset($_REQUEST['svsr36'])){ echo $_REQUEST['svsr36'] ;} ?>"></td>
            <td><input type="text" name="svss36" id="" value="<?php if(isset($_REQUEST['svss36'])){ echo $_REQUEST['svss36'] ;} ?>"></td>
            <td><input type="text" name="svst36" id="" value="<?php if(isset($_REQUEST['svst36'])){ echo $_REQUEST['svst36'] ;} ?>"></td>
            <td><input type="text" name="svsu36" id="" value="<?php if(isset($_REQUEST['svsu36'])){ echo $_REQUEST['svsu36'] ;} ?>"></td>
            <td><input type="text" name="svsv36" id="" value="<?php if(isset($_REQUEST['svsv36'])){ echo $_REQUEST['svsv36'] ;} ?>"></td>
            <td><input type="text" name="svsw36" id="" value="<?php if(isset($_REQUEST['svsw36'])){ echo $_REQUEST['svsw36'] ;} ?>"></td>
            <td><input type="text" name="svsx36" id="" value="<?php if(isset($_REQUEST['svsx36'])){ echo $_REQUEST['svsx36'] ;} ?>"></td>
            <td><input type="text" name="svsy36" id="" value="<?php if(isset($_REQUEST['svsy36'])){ echo $_REQUEST['svsy36'] ;} ?>"></td>
            <td><input type="text" name="svsz36" id="" value="<?php if(isset($_REQUEST['svsz36'])){ echo $_REQUEST['svsz36'] ;} ?>"></td>
            <td><input type="text" name="svsaa36" id="" value="<?php if(isset($_REQUEST['svsaa36'])){ echo $_REQUEST['svsaa36'] ;} ?>"></td>
            <td><input type="text" name="svsab36" id="" value="<?php if(isset($_REQUEST['svsab36'])){ echo $_REQUEST['svsab36'] ;} ?>"></td>
            <td><input type="text" name="svsac36" id="" value="<?php if(isset($_REQUEST['svsac36'])){ echo $_REQUEST['svsac36'] ;} ?>"></td>
            <td><input type="text" name="svsad36" id="" value="<?php if(isset($_REQUEST['svsad36'])){ echo $_REQUEST['svsad36'] ;} ?>"></td>
            <td><input type="text" name="svsae36" id="" value="<?php if(isset($_REQUEST['svsae36'])){ echo $_REQUEST['svsae36'] ;} ?>"></td>
            <td><input type="text" name="svsaf36" id="" value="<?php if(isset($_REQUEST['svsaf36'])){ echo $_REQUEST['svsaf36'] ;} ?>"></td>
            <td><input type="text" name="svsag36" id="" value="<?php if(isset($_REQUEST['svsag36'])){ echo $_REQUEST['svsag36'] ;} ?>"></td>
            <td><input type="text" name="svsah36" id="" value="<?php if(isset($_REQUEST['svsah36'])){ echo $_REQUEST['svsah36'] ;} ?>"></td>
            <td><input type="text" name="svsai36" id="" value="<?php if(isset($_REQUEST['svsai36'])){ echo $_REQUEST['svsai36'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">37</td>
            <td><input type="text" name="svsa37" id="" value="<?php if(isset($_REQUEST['svsa37'])){ echo $_REQUEST['svsa37'] ;} ?>"></td>
            <td><input type="text" name="svsb37" id="" value="<?php if(isset($_REQUEST['svsb37'])){ echo $_REQUEST['svsb37'] ;} ?>"></td>
            <td><input type="text" name="svsc37" id="" value="<?php if(isset($_REQUEST['svsc37'])){ echo $_REQUEST['svsc37'] ;} ?>"></td>
            <td><input type="text" name="svsd37" id="" value="<?php if(isset($_REQUEST['svsd37'])){ echo $_REQUEST['svsd37'] ;} ?>"></td>
            <td><input type="text" name="svse37" id="" value="<?php if(isset($_REQUEST['svse37'])){ echo $_REQUEST['svse37'] ;} ?>"></td>
            <td><input type="text" name="svsf37" id="" value="<?php if(isset($_REQUEST['svsf37'])){ echo $_REQUEST['svsf37'] ;} ?>"></td>
            <td><input type="text" name="svsg37" id="" value="<?php if(isset($_REQUEST['svsg37'])){ echo $_REQUEST['svsg37'] ;} ?>"></td>
            <td><input type="text" name="svsh37" id="" value="<?php if(isset($_REQUEST['svsh37'])){ echo $_REQUEST['svsh37'] ;} ?>"></td>
            <td><input type="text" name="svsi37" id="" value="<?php if(isset($_REQUEST['svsi37'])){ echo $_REQUEST['svsi37'] ;} ?>"></td>
            <td><input type="text" name="svsj37" id="" value="<?php if(isset($_REQUEST['svsj37'])){ echo $_REQUEST['svsj37'] ;} ?>"></td>
            <td><input type="text" name="svsk37" id="" value="<?php if(isset($_REQUEST['svsk37'])){ echo $_REQUEST['svsk37'] ;} ?>"></td>
            <td><input type="text" name="svsl37" id="" value="<?php if(isset($_REQUEST['svsl37'])){ echo $_REQUEST['svsl37'] ;} ?>"></td>
            <td><input type="text" name="svsm37" id="" value="<?php if(isset($_REQUEST['svsm37'])){ echo $_REQUEST['svsm37'] ;} ?>"></td>
            <td><input type="text" name="svsn37" id="" value="<?php if(isset($_REQUEST['svsn37'])){ echo $_REQUEST['svsn37'] ;} ?>"></td>
            <td><input type="text" name="svso37" id="" value="<?php if(isset($_REQUEST['svso37'])){ echo $_REQUEST['svso37'] ;} ?>"></td>
            <td><input type="text" name="svsp37" id="" value="<?php if(isset($_REQUEST['svsp37'])){ echo $_REQUEST['svsp37'] ;} ?>"></td>
            <td><input type="text" name="svsq37" id="" value="<?php if(isset($_REQUEST['svsq37'])){ echo $_REQUEST['svsq37'] ;} ?>"></td>
            <td><input type="text" name="svsr37" id="" value="<?php if(isset($_REQUEST['svsr37'])){ echo $_REQUEST['svsr37'] ;} ?>"></td>
            <td><input type="text" name="svss37" id="" value="<?php if(isset($_REQUEST['svss37'])){ echo $_REQUEST['svss37'] ;} ?>"></td>
            <td><input type="text" name="svst37" id="" value="<?php if(isset($_REQUEST['svst37'])){ echo $_REQUEST['svst37'] ;} ?>"></td>
            <td><input type="text" name="svsu37" id="" value="<?php if(isset($_REQUEST['svsu37'])){ echo $_REQUEST['svsu37'] ;} ?>"></td>
            <td><input type="text" name="svsv37" id="" value="<?php if(isset($_REQUEST['svsv37'])){ echo $_REQUEST['svsv37'] ;} ?>"></td>
            <td><input type="text" name="svsw37" id="" value="<?php if(isset($_REQUEST['svsw37'])){ echo $_REQUEST['svsw37'] ;} ?>"></td>
            <td><input type="text" name="svsx37" id="" value="<?php if(isset($_REQUEST['svsx37'])){ echo $_REQUEST['svsx37'] ;} ?>"></td>
            <td><input type="text" name="svsy37" id="" value="<?php if(isset($_REQUEST['svsy37'])){ echo $_REQUEST['svsy37'] ;} ?>"></td>
            <td><input type="text" name="svsz37" id="" value="<?php if(isset($_REQUEST['svsz37'])){ echo $_REQUEST['svsz37'] ;} ?>"></td>
            <td><input type="text" name="svsaa37" id="" value="<?php if(isset($_REQUEST['svsaa37'])){ echo $_REQUEST['svsaa37'] ;} ?>"></td>
            <td><input type="text" name="svsab37" id="" value="<?php if(isset($_REQUEST['svsab37'])){ echo $_REQUEST['svsab37'] ;} ?>"></td>
            <td><input type="text" name="svsac37" id="" value="<?php if(isset($_REQUEST['svsac37'])){ echo $_REQUEST['svsac37'] ;} ?>"></td>
            <td><input type="text" name="svsad37" id="" value="<?php if(isset($_REQUEST['svsad37'])){ echo $_REQUEST['svsad37'] ;} ?>"></td>
            <td><input type="text" name="svsae37" id="" value="<?php if(isset($_REQUEST['svsae37'])){ echo $_REQUEST['svsae37'] ;} ?>"></td>
            <td><input type="text" name="svsaf37" id="" value="<?php if(isset($_REQUEST['svsaf37'])){ echo $_REQUEST['svsaf37'] ;} ?>"></td>
            <td><input type="text" name="svsag37" id="" value="<?php if(isset($_REQUEST['svsag37'])){ echo $_REQUEST['svsag37'] ;} ?>"></td>
            <td><input type="text" name="svsah37" id="" value="<?php if(isset($_REQUEST['svsah37'])){ echo $_REQUEST['svsah37'] ;} ?>"></td>
            <td><input type="text" name="svsai37" id="" value="<?php if(isset($_REQUEST['svsai37'])){ echo $_REQUEST['svsai37'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">38</td>
            <td><input type="text" name="svsa38" id="" value="<?php if(isset($_REQUEST['svsa38'])){ echo $_REQUEST['svsa38'] ;} ?>"></td>
            <td><input type="text" name="svsb38" id="" value="<?php if(isset($_REQUEST['svsb38'])){ echo $_REQUEST['svsb38'] ;} ?>"></td>
            <td><input type="text" name="svsc38" id="" value="<?php if(isset($_REQUEST['svsc38'])){ echo $_REQUEST['svsc38'] ;} ?>"></td>
            <td><input type="text" name="svsd38" id="" value="<?php if(isset($_REQUEST['svsd38'])){ echo $_REQUEST['svsd38'] ;} ?>"></td>
            <td><input type="text" name="svse38" id="" value="<?php if(isset($_REQUEST['svse38'])){ echo $_REQUEST['svse38'] ;} ?>"></td>
            <td><input type="text" name="svsf38" id="" value="<?php if(isset($_REQUEST['svsf38'])){ echo $_REQUEST['svsf38'] ;} ?>"></td>
            <td><input type="text" name="svsg38" id="" value="<?php if(isset($_REQUEST['svsg38'])){ echo $_REQUEST['svsg38'] ;} ?>"></td>
            <td><input type="text" name="svsh38" id="" value="<?php if(isset($_REQUEST['svsh38'])){ echo $_REQUEST['svsh38'] ;} ?>"></td>
            <td><input type="text" name="svsi38" id="" value="<?php if(isset($_REQUEST['svsi38'])){ echo $_REQUEST['svsi38'] ;} ?>"></td>
            <td><input type="text" name="svsj38" id="" value="<?php if(isset($_REQUEST['svsj38'])){ echo $_REQUEST['svsj38'] ;} ?>"></td>
            <td><input type="text" name="svsk38" id="" value="<?php if(isset($_REQUEST['svsk38'])){ echo $_REQUEST['svsk38'] ;} ?>"></td>
            <td><input type="text" name="svsl38" id="" value="<?php if(isset($_REQUEST['svsl38'])){ echo $_REQUEST['svsl38'] ;} ?>"></td>
            <td><input type="text" name="svsm38" id="" value="<?php if(isset($_REQUEST['svsm38'])){ echo $_REQUEST['svsm38'] ;} ?>"></td>
            <td><input type="text" name="svsn38" id="" value="<?php if(isset($_REQUEST['svsn38'])){ echo $_REQUEST['svsn38'] ;} ?>"></td>
            <td><input type="text" name="svso38" id="" value="<?php if(isset($_REQUEST['svso38'])){ echo $_REQUEST['svso38'] ;} ?>"></td>
            <td><input type="text" name="svsp38" id="" value="<?php if(isset($_REQUEST['svsp38'])){ echo $_REQUEST['svsp38'] ;} ?>"></td>
            <td><input type="text" name="svsq38" id="" value="<?php if(isset($_REQUEST['svsq38'])){ echo $_REQUEST['svsq38'] ;} ?>"></td>
            <td><input type="text" name="svsr38" id="" value="<?php if(isset($_REQUEST['svsr38'])){ echo $_REQUEST['svsr38'] ;} ?>"></td>
            <td><input type="text" name="svss38" id="" value="<?php if(isset($_REQUEST['svss38'])){ echo $_REQUEST['svss38'] ;} ?>"></td>
            <td><input type="text" name="svst38" id="" value="<?php if(isset($_REQUEST['svst38'])){ echo $_REQUEST['svst38'] ;} ?>"></td>
            <td><input type="text" name="svsu38" id="" value="<?php if(isset($_REQUEST['svsu38'])){ echo $_REQUEST['svsu38'] ;} ?>"></td>
            <td><input type="text" name="svsv38" id="" value="<?php if(isset($_REQUEST['svsv38'])){ echo $_REQUEST['svsv38'] ;} ?>"></td>
            <td><input type="text" name="svsw38" id="" value="<?php if(isset($_REQUEST['svsw38'])){ echo $_REQUEST['svsw38'] ;} ?>"></td>
            <td><input type="text" name="svsx38" id="" value="<?php if(isset($_REQUEST['svsx38'])){ echo $_REQUEST['svsx38'] ;} ?>"></td>
            <td><input type="text" name="svsy38" id="" value="<?php if(isset($_REQUEST['svsy38'])){ echo $_REQUEST['svsy38'] ;} ?>"></td>
            <td><input type="text" name="svsz38" id="" value="<?php if(isset($_REQUEST['svsz38'])){ echo $_REQUEST['svsz38'] ;} ?>"></td>
            <td><input type="text" name="svsaa38" id="" value="<?php if(isset($_REQUEST['svsaa38'])){ echo $_REQUEST['svsaa38'] ;} ?>"></td>
            <td><input type="text" name="svsab38" id="" value="<?php if(isset($_REQUEST['svsab38'])){ echo $_REQUEST['svsab38'] ;} ?>"></td>
            <td><input type="text" name="svsac38" id="" value="<?php if(isset($_REQUEST['svsac38'])){ echo $_REQUEST['svsac38'] ;} ?>"></td>
            <td><input type="text" name="svsad38" id="" value="<?php if(isset($_REQUEST['svsad38'])){ echo $_REQUEST['svsad38'] ;} ?>"></td>
            <td><input type="text" name="svsae38" id="" value="<?php if(isset($_REQUEST['svsae38'])){ echo $_REQUEST['svsae38'] ;} ?>"></td>
            <td><input type="text" name="svsaf38" id="" value="<?php if(isset($_REQUEST['svsaf38'])){ echo $_REQUEST['svsaf38'] ;} ?>"></td>
            <td><input type="text" name="svsag38" id="" value="<?php if(isset($_REQUEST['svsag38'])){ echo $_REQUEST['svsag38'] ;} ?>"></td>
            <td><input type="text" name="svsah38" id="" value="<?php if(isset($_REQUEST['svsah38'])){ echo $_REQUEST['svsah38'] ;} ?>"></td>
            <td><input type="text" name="svsai38" id="" value="<?php if(isset($_REQUEST['svsai38'])){ echo $_REQUEST['svsai38'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">39</td>
            <td><input type="text" name="svsa39" id="" value="<?php if(isset($_REQUEST['svsa39'])){ echo $_REQUEST['svsa39'] ;} ?>"></td>
            <td><input type="text" name="svsb39" id="" value="<?php if(isset($_REQUEST['svsb39'])){ echo $_REQUEST['svsb39'] ;} ?>"></td>
            <td><input type="text" name="svsc39" id="" value="<?php if(isset($_REQUEST['svsc39'])){ echo $_REQUEST['svsc39'] ;} ?>"></td>
            <td><input type="text" name="svsd39" id="" value="<?php if(isset($_REQUEST['svsd39'])){ echo $_REQUEST['svsd39'] ;} ?>"></td>
            <td><input type="text" name="svse39" id="" value="<?php if(isset($_REQUEST['svse39'])){ echo $_REQUEST['svse39'] ;} ?>"></td>
            <td><input type="text" name="svsf39" id="" value="<?php if(isset($_REQUEST['svsf39'])){ echo $_REQUEST['svsf39'] ;} ?>"></td>
            <td><input type="text" name="svsg39" id="" value="<?php if(isset($_REQUEST['svsg39'])){ echo $_REQUEST['svsg39'] ;} ?>"></td>
            <td><input type="text" name="svsh39" id="" value="<?php if(isset($_REQUEST['svsh39'])){ echo $_REQUEST['svsh39'] ;} ?>"></td>
            <td><input type="text" name="svsi39" id="" value="<?php if(isset($_REQUEST['svsi39'])){ echo $_REQUEST['svsi39'] ;} ?>"></td>
            <td><input type="text" name="svsj39" id="" value="<?php if(isset($_REQUEST['svsj39'])){ echo $_REQUEST['svsj39'] ;} ?>"></td>
            <td><input type="text" name="svsk39" id="" value="<?php if(isset($_REQUEST['svsk39'])){ echo $_REQUEST['svsk39'] ;} ?>"></td>
            <td><input type="text" name="svsl39" id="" value="<?php if(isset($_REQUEST['svsl39'])){ echo $_REQUEST['svsl39'] ;} ?>"></td>
            <td><input type="text" name="svsm39" id="" value="<?php if(isset($_REQUEST['svsm39'])){ echo $_REQUEST['svsm39'] ;} ?>"></td>
            <td><input type="text" name="svsn39" id="" value="<?php if(isset($_REQUEST['svsn39'])){ echo $_REQUEST['svsn39'] ;} ?>"></td>
            <td><input type="text" name="svso39" id="" value="<?php if(isset($_REQUEST['svso39'])){ echo $_REQUEST['svso39'] ;} ?>"></td>
            <td><input type="text" name="svsp39" id="" value="<?php if(isset($_REQUEST['svsp39'])){ echo $_REQUEST['svsp39'] ;} ?>"></td>
            <td><input type="text" name="svsq39" id="" value="<?php if(isset($_REQUEST['svsq39'])){ echo $_REQUEST['svsq39'] ;} ?>"></td>
            <td><input type="text" name="svsr39" id="" value="<?php if(isset($_REQUEST['svsr39'])){ echo $_REQUEST['svsr39'] ;} ?>"></td>
            <td><input type="text" name="svss39" id="" value="<?php if(isset($_REQUEST['svss39'])){ echo $_REQUEST['svss39'] ;} ?>"></td>
            <td><input type="text" name="svst39" id="" value="<?php if(isset($_REQUEST['svst39'])){ echo $_REQUEST['svst39'] ;} ?>"></td>
            <td><input type="text" name="svsu39" id="" value="<?php if(isset($_REQUEST['svsu39'])){ echo $_REQUEST['svsu39'] ;} ?>"></td>
            <td><input type="text" name="svsv39" id="" value="<?php if(isset($_REQUEST['svsv39'])){ echo $_REQUEST['svsv39'] ;} ?>"></td>
            <td><input type="text" name="svsw39" id="" value="<?php if(isset($_REQUEST['svsw39'])){ echo $_REQUEST['svsw39'] ;} ?>"></td>
            <td><input type="text" name="svsx39" id="" value="<?php if(isset($_REQUEST['svsx39'])){ echo $_REQUEST['svsx39'] ;} ?>"></td>
            <td><input type="text" name="svsy39" id="" value="<?php if(isset($_REQUEST['svsy39'])){ echo $_REQUEST['svsy39'] ;} ?>"></td>
            <td><input type="text" name="svsz39" id="" value="<?php if(isset($_REQUEST['svsz39'])){ echo $_REQUEST['svsz39'] ;} ?>"></td>
            <td><input type="text" name="svsaa39" id="" value="<?php if(isset($_REQUEST['svsaa39'])){ echo $_REQUEST['svsaa39'] ;} ?>"></td>
            <td><input type="text" name="svsab39" id="" value="<?php if(isset($_REQUEST['svsab39'])){ echo $_REQUEST['svsab39'] ;} ?>"></td>
            <td><input type="text" name="svsac39" id="" value="<?php if(isset($_REQUEST['svsac39'])){ echo $_REQUEST['svsac39'] ;} ?>"></td>
            <td><input type="text" name="svsad39" id="" value="<?php if(isset($_REQUEST['svsad39'])){ echo $_REQUEST['svsad39'] ;} ?>"></td>
            <td><input type="text" name="svsae39" id="" value="<?php if(isset($_REQUEST['svsae39'])){ echo $_REQUEST['svsae39'] ;} ?>"></td>
            <td><input type="text" name="svsaf39" id="" value="<?php if(isset($_REQUEST['svsaf39'])){ echo $_REQUEST['svsaf39'] ;} ?>"></td>
            <td><input type="text" name="svsag39" id="" value="<?php if(isset($_REQUEST['svsag39'])){ echo $_REQUEST['svsag39'] ;} ?>"></td>
            <td><input type="text" name="svsah39" id="" value="<?php if(isset($_REQUEST['svsah39'])){ echo $_REQUEST['svsah39'] ;} ?>"></td>
            <td><input type="text" name="svsai39" id="" value="<?php if(isset($_REQUEST['svsai39'])){ echo $_REQUEST['svsai39'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">40</td>
            <td><input type="text" name="svsa40" id="" value="<?php if(isset($_REQUEST['svsa40'])){ echo $_REQUEST['svsa40'] ;} ?>"></td>
            <td><input type="text" name="svsb40" id="" value="<?php if(isset($_REQUEST['svsb40'])){ echo $_REQUEST['svsb40'] ;} ?>"></td>
            <td><input type="text" name="svsc40" id="" value="<?php if(isset($_REQUEST['svsc40'])){ echo $_REQUEST['svsc40'] ;} ?>"></td>
            <td><input type="text" name="svsd40" id="" value="<?php if(isset($_REQUEST['svsd40'])){ echo $_REQUEST['svsd40'] ;} ?>"></td>
            <td><input type="text" name="svse40" id="" value="<?php if(isset($_REQUEST['svse40'])){ echo $_REQUEST['svse40'] ;} ?>"></td>
            <td><input type="text" name="svsf40" id="" value="<?php if(isset($_REQUEST['svsf40'])){ echo $_REQUEST['svsf40'] ;} ?>"></td>
            <td><input type="text" name="svsg40" id="" value="<?php if(isset($_REQUEST['svsg40'])){ echo $_REQUEST['svsg40'] ;} ?>"></td>
            <td><input type="text" name="svsh40" id="" value="<?php if(isset($_REQUEST['svsh40'])){ echo $_REQUEST['svsh40'] ;} ?>"></td>
            <td><input type="text" name="svsi40" id="" value="<?php if(isset($_REQUEST['svsi40'])){ echo $_REQUEST['svsi40'] ;} ?>"></td>
            <td><input type="text" name="svsj40" id="" value="<?php if(isset($_REQUEST['svsj40'])){ echo $_REQUEST['svsj40'] ;} ?>"></td>
            <td><input type="text" name="svsk40" id="" value="<?php if(isset($_REQUEST['svsk40'])){ echo $_REQUEST['svsk40'] ;} ?>"></td>
            <td><input type="text" name="svsl40" id="" value="<?php if(isset($_REQUEST['svsl40'])){ echo $_REQUEST['svsl40'] ;} ?>"></td>
            <td><input type="text" name="svsm40" id="" value="<?php if(isset($_REQUEST['svsm40'])){ echo $_REQUEST['svsm40'] ;} ?>"></td>
            <td><input type="text" name="svsn40" id="" value="<?php if(isset($_REQUEST['svsn40'])){ echo $_REQUEST['svsn40'] ;} ?>"></td>
            <td><input type="text" name="svso40" id="" value="<?php if(isset($_REQUEST['svso40'])){ echo $_REQUEST['svso40'] ;} ?>"></td>
            <td><input type="text" name="svsp40" id="" value="<?php if(isset($_REQUEST['svsp40'])){ echo $_REQUEST['svsp40'] ;} ?>"></td>
            <td><input type="text" name="svsq40" id="" value="<?php if(isset($_REQUEST['svsq40'])){ echo $_REQUEST['svsq40'] ;} ?>"></td>
            <td><input type="text" name="svsr40" id="" value="<?php if(isset($_REQUEST['svsr40'])){ echo $_REQUEST['svsr40'] ;} ?>"></td>
            <td><input type="text" name="svss40" id="" value="<?php if(isset($_REQUEST['svss40'])){ echo $_REQUEST['svss40'] ;} ?>"></td>
            <td><input type="text" name="svst40" id="" value="<?php if(isset($_REQUEST['svst40'])){ echo $_REQUEST['svst40'] ;} ?>"></td>
            <td><input type="text" name="svsu40" id="" value="<?php if(isset($_REQUEST['svsu40'])){ echo $_REQUEST['svsu40'] ;} ?>"></td>
            <td><input type="text" name="svsv40" id="" value="<?php if(isset($_REQUEST['svsv40'])){ echo $_REQUEST['svsv40'] ;} ?>"></td>
            <td><input type="text" name="svsw40" id="" value="<?php if(isset($_REQUEST['svsw40'])){ echo $_REQUEST['svsw40'] ;} ?>"></td>
            <td><input type="text" name="svsx40" id="" value="<?php if(isset($_REQUEST['svsx40'])){ echo $_REQUEST['svsx40'] ;} ?>"></td>
            <td><input type="text" name="svsy40" id="" value="<?php if(isset($_REQUEST['svsy40'])){ echo $_REQUEST['svsy40'] ;} ?>"></td>
            <td><input type="text" name="svsz40" id="" value="<?php if(isset($_REQUEST['svsz40'])){ echo $_REQUEST['svsz40'] ;} ?>"></td>
            <td><input type="text" name="svsaa40" id="" value="<?php if(isset($_REQUEST['svsaa40'])){ echo $_REQUEST['svsaa40'] ;} ?>"></td>
            <td><input type="text" name="svsab40" id="" value="<?php if(isset($_REQUEST['svsab40'])){ echo $_REQUEST['svsab40'] ;} ?>"></td>
            <td><input type="text" name="svsac40" id="" value="<?php if(isset($_REQUEST['svsac40'])){ echo $_REQUEST['svsac40'] ;} ?>"></td>
            <td><input type="text" name="svsad40" id="" value="<?php if(isset($_REQUEST['svsad40'])){ echo $_REQUEST['svsad40'] ;} ?>"></td>
            <td><input type="text" name="svsae40" id="" value="<?php if(isset($_REQUEST['svsae40'])){ echo $_REQUEST['svsae40'] ;} ?>"></td>
            <td><input type="text" name="svsaf40" id="" value="<?php if(isset($_REQUEST['svsaf40'])){ echo $_REQUEST['svsaf40'] ;} ?>"></td>
            <td><input type="text" name="svsag40" id="" value="<?php if(isset($_REQUEST['svsag40'])){ echo $_REQUEST['svsag40'] ;} ?>"></td>
            <td><input type="text" name="svsah40" id="" value="<?php if(isset($_REQUEST['svsah40'])){ echo $_REQUEST['svsah40'] ;} ?>"></td>
            <td><input type="text" name="svsai40" id="" value="<?php if(isset($_REQUEST['svsai40'])){ echo $_REQUEST['svsai40'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">41</td>
            <td><input type="text" name="svsa41" id="" value="<?php if(isset($_REQUEST['svsa41'])){ echo $_REQUEST['svsa41'] ;} ?>"></td>
            <td><input type="text" name="svsb41" id="" value="<?php if(isset($_REQUEST['svsb41'])){ echo $_REQUEST['svsb41'] ;} ?>"></td>
            <td><input type="text" name="svsc41" id="" value="<?php if(isset($_REQUEST['svsc41'])){ echo $_REQUEST['svsc41'] ;} ?>"></td>
            <td><input type="text" name="svsd41" id="" value="<?php if(isset($_REQUEST['svsd41'])){ echo $_REQUEST['svsd41'] ;} ?>"></td>
            <td><input type="text" name="svse41" id="" value="<?php if(isset($_REQUEST['svse41'])){ echo $_REQUEST['svse41'] ;} ?>"></td>
            <td><input type="text" name="svsf41" id="" value="<?php if(isset($_REQUEST['svsf41'])){ echo $_REQUEST['svsf41'] ;} ?>"></td>
            <td><input type="text" name="svsg41" id="" value="<?php if(isset($_REQUEST['svsg41'])){ echo $_REQUEST['svsg41'] ;} ?>"></td>
            <td><input type="text" name="svsh41" id="" value="<?php if(isset($_REQUEST['svsh41'])){ echo $_REQUEST['svsh41'] ;} ?>"></td>
            <td><input type="text" name="svsi41" id="" value="<?php if(isset($_REQUEST['svsi41'])){ echo $_REQUEST['svsi41'] ;} ?>"></td>
            <td><input type="text" name="svsj41" id="" value="<?php if(isset($_REQUEST['svsj41'])){ echo $_REQUEST['svsj41'] ;} ?>"></td>
            <td><input type="text" name="svsk41" id="" value="<?php if(isset($_REQUEST['svsk41'])){ echo $_REQUEST['svsk41'] ;} ?>"></td>
            <td><input type="text" name="svsl41" id="" value="<?php if(isset($_REQUEST['svsl41'])){ echo $_REQUEST['svsl41'] ;} ?>"></td>
            <td><input type="text" name="svsm41" id="" value="<?php if(isset($_REQUEST['svsm41'])){ echo $_REQUEST['svsm41'] ;} ?>"></td>
            <td><input type="text" name="svsn41" id="" value="<?php if(isset($_REQUEST['svsn41'])){ echo $_REQUEST['svsn41'] ;} ?>"></td>
            <td><input type="text" name="svso41" id="" value="<?php if(isset($_REQUEST['svso41'])){ echo $_REQUEST['svso41'] ;} ?>"></td>
            <td><input type="text" name="svsp41" id="" value="<?php if(isset($_REQUEST['svsp41'])){ echo $_REQUEST['svsp41'] ;} ?>"></td>
            <td><input type="text" name="svsq41" id="" value="<?php if(isset($_REQUEST['svsq41'])){ echo $_REQUEST['svsq41'] ;} ?>"></td>
            <td><input type="text" name="svsr41" id="" value="<?php if(isset($_REQUEST['svsr41'])){ echo $_REQUEST['svsr41'] ;} ?>"></td>
            <td><input type="text" name="svss41" id="" value="<?php if(isset($_REQUEST['svss41'])){ echo $_REQUEST['svss41'] ;} ?>"></td>
            <td><input type="text" name="svst41" id="" value="<?php if(isset($_REQUEST['svst41'])){ echo $_REQUEST['svst41'] ;} ?>"></td>
            <td><input type="text" name="svsu41" id="" value="<?php if(isset($_REQUEST['svsu41'])){ echo $_REQUEST['svsu41'] ;} ?>"></td>
            <td><input type="text" name="svsv41" id="" value="<?php if(isset($_REQUEST['svsv41'])){ echo $_REQUEST['svsv41'] ;} ?>"></td>
            <td><input type="text" name="svsw41" id="" value="<?php if(isset($_REQUEST['svsw41'])){ echo $_REQUEST['svsw41'] ;} ?>"></td>
            <td><input type="text" name="svsx41" id="" value="<?php if(isset($_REQUEST['svsx41'])){ echo $_REQUEST['svsx41'] ;} ?>"></td>
            <td><input type="text" name="svsy41" id="" value="<?php if(isset($_REQUEST['svsy41'])){ echo $_REQUEST['svsy41'] ;} ?>"></td>
            <td><input type="text" name="svsz41" id="" value="<?php if(isset($_REQUEST['svsz41'])){ echo $_REQUEST['svsz41'] ;} ?>"></td>
            <td><input type="text" name="svsaa41" id="" value="<?php if(isset($_REQUEST['svsaa41'])){ echo $_REQUEST['svsaa41'] ;} ?>"></td>
            <td><input type="text" name="svsab41" id="" value="<?php if(isset($_REQUEST['svsab41'])){ echo $_REQUEST['svsab41'] ;} ?>"></td>
            <td><input type="text" name="svsac41" id="" value="<?php if(isset($_REQUEST['svsac41'])){ echo $_REQUEST['svsac41'] ;} ?>"></td>
            <td><input type="text" name="svsad41" id="" value="<?php if(isset($_REQUEST['svsad41'])){ echo $_REQUEST['svsad41'] ;} ?>"></td>
            <td><input type="text" name="svsae41" id="" value="<?php if(isset($_REQUEST['svsae41'])){ echo $_REQUEST['svsae41'] ;} ?>"></td>
            <td><input type="text" name="svsaf41" id="" value="<?php if(isset($_REQUEST['svsaf41'])){ echo $_REQUEST['svsaf41'] ;} ?>"></td>
            <td><input type="text" name="svsag41" id="" value="<?php if(isset($_REQUEST['svsag41'])){ echo $_REQUEST['svsag41'] ;} ?>"></td>
            <td><input type="text" name="svsah41" id="" value="<?php if(isset($_REQUEST['svsah41'])){ echo $_REQUEST['svsah41'] ;} ?>"></td>
            <td><input type="text" name="svsai41" id="" value="<?php if(isset($_REQUEST['svsai41'])){ echo $_REQUEST['svsai41'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">42</td>
            <td><input type="text" name="svsa42" id="" value="<?php if(isset($_REQUEST['svsa42'])){ echo $_REQUEST['svsa42'] ;} ?>"></td>
            <td><input type="text" name="svsb42" id="" value="<?php if(isset($_REQUEST['svsb42'])){ echo $_REQUEST['svsb42'] ;} ?>"></td>
            <td><input type="text" name="svsc42" id="" value="<?php if(isset($_REQUEST['svsc42'])){ echo $_REQUEST['svsc42'] ;} ?>"></td>
            <td><input type="text" name="svsd42" id="" value="<?php if(isset($_REQUEST['svsd42'])){ echo $_REQUEST['svsd42'] ;} ?>"></td>
            <td><input type="text" name="svse42" id="" value="<?php if(isset($_REQUEST['svse42'])){ echo $_REQUEST['svse42'] ;} ?>"></td>
            <td><input type="text" name="svsf42" id="" value="<?php if(isset($_REQUEST['svsf42'])){ echo $_REQUEST['svsf42'] ;} ?>"></td>
            <td><input type="text" name="svsg42" id="" value="<?php if(isset($_REQUEST['svsg42'])){ echo $_REQUEST['svsg42'] ;} ?>"></td>
            <td><input type="text" name="svsh42" id="" value="<?php if(isset($_REQUEST['svsh42'])){ echo $_REQUEST['svsh42'] ;} ?>"></td>
            <td><input type="text" name="svsi42" id="" value="<?php if(isset($_REQUEST['svsi42'])){ echo $_REQUEST['svsi42'] ;} ?>"></td>
            <td><input type="text" name="svsj42" id="" value="<?php if(isset($_REQUEST['svsj42'])){ echo $_REQUEST['svsj42'] ;} ?>"></td>
            <td><input type="text" name="svsk42" id="" value="<?php if(isset($_REQUEST['svsk42'])){ echo $_REQUEST['svsk42'] ;} ?>"></td>
            <td><input type="text" name="svsl42" id="" value="<?php if(isset($_REQUEST['svsl42'])){ echo $_REQUEST['svsl42'] ;} ?>"></td>
            <td><input type="text" name="svsm42" id="" value="<?php if(isset($_REQUEST['svsm42'])){ echo $_REQUEST['svsm42'] ;} ?>"></td>
            <td><input type="text" name="svsn42" id="" value="<?php if(isset($_REQUEST['svsn42'])){ echo $_REQUEST['svsn42'] ;} ?>"></td>
            <td><input type="text" name="svso42" id="" value="<?php if(isset($_REQUEST['svso42'])){ echo $_REQUEST['svso42'] ;} ?>"></td>
            <td><input type="text" name="svsp42" id="" value="<?php if(isset($_REQUEST['svsp42'])){ echo $_REQUEST['svsp42'] ;} ?>"></td>
            <td><input type="text" name="svsq42" id="" value="<?php if(isset($_REQUEST['svsq42'])){ echo $_REQUEST['svsq42'] ;} ?>"></td>
            <td><input type="text" name="svsr42" id="" value="<?php if(isset($_REQUEST['svsr42'])){ echo $_REQUEST['svsr42'] ;} ?>"></td>
            <td><input type="text" name="svss42" id="" value="<?php if(isset($_REQUEST['svss42'])){ echo $_REQUEST['svss42'] ;} ?>"></td>
            <td><input type="text" name="svst42" id="" value="<?php if(isset($_REQUEST['svst42'])){ echo $_REQUEST['svst42'] ;} ?>"></td>
            <td><input type="text" name="svsu42" id="" value="<?php if(isset($_REQUEST['svsu42'])){ echo $_REQUEST['svsu42'] ;} ?>"></td>
            <td><input type="text" name="svsv42" id="" value="<?php if(isset($_REQUEST['svsv42'])){ echo $_REQUEST['svsv42'] ;} ?>"></td>
            <td><input type="text" name="svsw42" id="" value="<?php if(isset($_REQUEST['svsw42'])){ echo $_REQUEST['svsw42'] ;} ?>"></td>
            <td><input type="text" name="svsx42" id="" value="<?php if(isset($_REQUEST['svsx42'])){ echo $_REQUEST['svsx42'] ;} ?>"></td>
            <td><input type="text" name="svsy42" id="" value="<?php if(isset($_REQUEST['svsy42'])){ echo $_REQUEST['svsy42'] ;} ?>"></td>
            <td><input type="text" name="svsz42" id="" value="<?php if(isset($_REQUEST['svsz42'])){ echo $_REQUEST['svsz42'] ;} ?>"></td>
            <td><input type="text" name="svsaa42" id="" value="<?php if(isset($_REQUEST['svsaa42'])){ echo $_REQUEST['svsaa42'] ;} ?>"></td>
            <td><input type="text" name="svsab42" id="" value="<?php if(isset($_REQUEST['svsab42'])){ echo $_REQUEST['svsab42'] ;} ?>"></td>
            <td><input type="text" name="svsac42" id="" value="<?php if(isset($_REQUEST['svsac42'])){ echo $_REQUEST['svsac42'] ;} ?>"></td>
            <td><input type="text" name="svsad42" id="" value="<?php if(isset($_REQUEST['svsad42'])){ echo $_REQUEST['svsad42'] ;} ?>"></td>
            <td><input type="text" name="svsae42" id="" value="<?php if(isset($_REQUEST['svsae42'])){ echo $_REQUEST['svsae42'] ;} ?>"></td>
            <td><input type="text" name="svsaf42" id="" value="<?php if(isset($_REQUEST['svsaf42'])){ echo $_REQUEST['svsaf42'] ;} ?>"></td>
            <td><input type="text" name="svsag42" id="" value="<?php if(isset($_REQUEST['svsag42'])){ echo $_REQUEST['svsag42'] ;} ?>"></td>
            <td><input type="text" name="svsah42" id="" value="<?php if(isset($_REQUEST['svsah42'])){ echo $_REQUEST['svsah42'] ;} ?>"></td>
            <td><input type="text" name="svsai42" id="" value="<?php if(isset($_REQUEST['svsai42'])){ echo $_REQUEST['svsai42'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">43</td>
            <td><input type="text" name="svsa43" id="" value="<?php if(isset($_REQUEST['svsa43'])){ echo $_REQUEST['svsa43'] ;} ?>"></td>
            <td><input type="text" name="svsb43" id="" value="<?php if(isset($_REQUEST['svsb43'])){ echo $_REQUEST['svsb43'] ;} ?>"></td>
            <td><input type="text" name="svsc43" id="" value="<?php if(isset($_REQUEST['svsc43'])){ echo $_REQUEST['svsc43'] ;} ?>"></td>
            <td><input type="text" name="svsd43" id="" value="<?php if(isset($_REQUEST['svsd43'])){ echo $_REQUEST['svsd43'] ;} ?>"></td>
            <td><input type="text" name="svse43" id="" value="<?php if(isset($_REQUEST['svse43'])){ echo $_REQUEST['svse43'] ;} ?>"></td>
            <td><input type="text" name="svsf43" id="" value="<?php if(isset($_REQUEST['svsf43'])){ echo $_REQUEST['svsf43'] ;} ?>"></td>
            <td><input type="text" name="svsg43" id="" value="<?php if(isset($_REQUEST['svsg43'])){ echo $_REQUEST['svsg43'] ;} ?>"></td>
            <td><input type="text" name="svsh43" id="" value="<?php if(isset($_REQUEST['svsh43'])){ echo $_REQUEST['svsh43'] ;} ?>"></td>
            <td><input type="text" name="svsi43" id="" value="<?php if(isset($_REQUEST['svsi43'])){ echo $_REQUEST['svsi43'] ;} ?>"></td>
            <td><input type="text" name="svsj43" id="" value="<?php if(isset($_REQUEST['svsj43'])){ echo $_REQUEST['svsj43'] ;} ?>"></td>
            <td><input type="text" name="svsk43" id="" value="<?php if(isset($_REQUEST['svsk43'])){ echo $_REQUEST['svsk43'] ;} ?>"></td>
            <td><input type="text" name="svsl43" id="" value="<?php if(isset($_REQUEST['svsl43'])){ echo $_REQUEST['svsl43'] ;} ?>"></td>
            <td><input type="text" name="svsm43" id="" value="<?php if(isset($_REQUEST['svsm43'])){ echo $_REQUEST['svsm43'] ;} ?>"></td>
            <td><input type="text" name="svsn43" id="" value="<?php if(isset($_REQUEST['svsn43'])){ echo $_REQUEST['svsn43'] ;} ?>"></td>
            <td><input type="text" name="svso43" id="" value="<?php if(isset($_REQUEST['svso43'])){ echo $_REQUEST['svso43'] ;} ?>"></td>
            <td><input type="text" name="svsp43" id="" value="<?php if(isset($_REQUEST['svsp43'])){ echo $_REQUEST['svsp43'] ;} ?>"></td>
            <td><input type="text" name="svsq43" id="" value="<?php if(isset($_REQUEST['svsq43'])){ echo $_REQUEST['svsq43'] ;} ?>"></td>
            <td><input type="text" name="svsr43" id="" value="<?php if(isset($_REQUEST['svsr43'])){ echo $_REQUEST['svsr43'] ;} ?>"></td>
            <td><input type="text" name="svss43" id="" value="<?php if(isset($_REQUEST['svss43'])){ echo $_REQUEST['svss43'] ;} ?>"></td>
            <td><input type="text" name="svst43" id="" value="<?php if(isset($_REQUEST['svst43'])){ echo $_REQUEST['svst43'] ;} ?>"></td>
            <td><input type="text" name="svsu43" id="" value="<?php if(isset($_REQUEST['svsu43'])){ echo $_REQUEST['svsu43'] ;} ?>"></td>
            <td><input type="text" name="svsv43" id="" value="<?php if(isset($_REQUEST['svsv43'])){ echo $_REQUEST['svsv43'] ;} ?>"></td>
            <td><input type="text" name="svsw43" id="" value="<?php if(isset($_REQUEST['svsw43'])){ echo $_REQUEST['svsw43'] ;} ?>"></td>
            <td><input type="text" name="svsx43" id="" value="<?php if(isset($_REQUEST['svsx43'])){ echo $_REQUEST['svsx43'] ;} ?>"></td>
            <td><input type="text" name="svsy43" id="" value="<?php if(isset($_REQUEST['svsy43'])){ echo $_REQUEST['svsy43'] ;} ?>"></td>
            <td><input type="text" name="svsz43" id="" value="<?php if(isset($_REQUEST['svsz43'])){ echo $_REQUEST['svsz43'] ;} ?>"></td>
            <td><input type="text" name="svsaa43" id="" value="<?php if(isset($_REQUEST['svsaa43'])){ echo $_REQUEST['svsaa43'] ;} ?>"></td>
            <td><input type="text" name="svsab43" id="" value="<?php if(isset($_REQUEST['svsab43'])){ echo $_REQUEST['svsab43'] ;} ?>"></td>
            <td><input type="text" name="svsac43" id="" value="<?php if(isset($_REQUEST['svsac43'])){ echo $_REQUEST['svsac43'] ;} ?>"></td>
            <td><input type="text" name="svsad43" id="" value="<?php if(isset($_REQUEST['svsad43'])){ echo $_REQUEST['svsad43'] ;} ?>"></td>
            <td><input type="text" name="svsae43" id="" value="<?php if(isset($_REQUEST['svsae43'])){ echo $_REQUEST['svsae43'] ;} ?>"></td>
            <td><input type="text" name="svsaf43" id="" value="<?php if(isset($_REQUEST['svsaf43'])){ echo $_REQUEST['svsaf43'] ;} ?>"></td>
            <td><input type="text" name="svsag43" id="" value="<?php if(isset($_REQUEST['svsag43'])){ echo $_REQUEST['svsag43'] ;} ?>"></td>
            <td><input type="text" name="svsah43" id="" value="<?php if(isset($_REQUEST['svsah43'])){ echo $_REQUEST['svsah43'] ;} ?>"></td>
            <td><input type="text" name="svsai43" id="" value="<?php if(isset($_REQUEST['svsai43'])){ echo $_REQUEST['svsai43'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">44</td>
            <td><input type="text" name="svsa44" id="" value="<?php if(isset($_REQUEST['svsa44'])){ echo $_REQUEST['svsa44'] ;} ?>"></td>
            <td><input type="text" name="svsb44" id="" value="<?php if(isset($_REQUEST['svsb44'])){ echo $_REQUEST['svsb44'] ;} ?>"></td>
            <td><input type="text" name="svsc44" id="" value="<?php if(isset($_REQUEST['svsc44'])){ echo $_REQUEST['svsc44'] ;} ?>"></td>
            <td><input type="text" name="svsd44" id="" value="<?php if(isset($_REQUEST['svsd44'])){ echo $_REQUEST['svsd44'] ;} ?>"></td>
            <td><input type="text" name="svse44" id="" value="<?php if(isset($_REQUEST['svse44'])){ echo $_REQUEST['svse44'] ;} ?>"></td>
            <td><input type="text" name="svsf44" id="" value="<?php if(isset($_REQUEST['svsf44'])){ echo $_REQUEST['svsf44'] ;} ?>"></td>
            <td><input type="text" name="svsg44" id="" value="<?php if(isset($_REQUEST['svsg44'])){ echo $_REQUEST['svsg44'] ;} ?>"></td>
            <td><input type="text" name="svsh44" id="" value="<?php if(isset($_REQUEST['svsh44'])){ echo $_REQUEST['svsh44'] ;} ?>"></td>
            <td><input type="text" name="svsi44" id="" value="<?php if(isset($_REQUEST['svsi44'])){ echo $_REQUEST['svsi44'] ;} ?>"></td>
            <td><input type="text" name="svsj44" id="" value="<?php if(isset($_REQUEST['svsj44'])){ echo $_REQUEST['svsj44'] ;} ?>"></td>
            <td><input type="text" name="svsk44" id="" value="<?php if(isset($_REQUEST['svsk44'])){ echo $_REQUEST['svsk44'] ;} ?>"></td>
            <td><input type="text" name="svsl44" id="" value="<?php if(isset($_REQUEST['svsl44'])){ echo $_REQUEST['svsl44'] ;} ?>"></td>
            <td><input type="text" name="svsm44" id="" value="<?php if(isset($_REQUEST['svsm44'])){ echo $_REQUEST['svsm44'] ;} ?>"></td>
            <td><input type="text" name="svsn44" id="" value="<?php if(isset($_REQUEST['svsn44'])){ echo $_REQUEST['svsn44'] ;} ?>"></td>
            <td><input type="text" name="svso44" id="" value="<?php if(isset($_REQUEST['svso44'])){ echo $_REQUEST['svso44'] ;} ?>"></td>
            <td><input type="text" name="svsp44" id="" value="<?php if(isset($_REQUEST['svsp44'])){ echo $_REQUEST['svsp44'] ;} ?>"></td>
            <td><input type="text" name="svsq44" id="" value="<?php if(isset($_REQUEST['svsq44'])){ echo $_REQUEST['svsq44'] ;} ?>"></td>
            <td><input type="text" name="svsr44" id="" value="<?php if(isset($_REQUEST['svsr44'])){ echo $_REQUEST['svsr44'] ;} ?>"></td>
            <td><input type="text" name="svss44" id="" value="<?php if(isset($_REQUEST['svss44'])){ echo $_REQUEST['svss44'] ;} ?>"></td>
            <td><input type="text" name="svst44" id="" value="<?php if(isset($_REQUEST['svst44'])){ echo $_REQUEST['svst44'] ;} ?>"></td>
            <td><input type="text" name="svsu44" id="" value="<?php if(isset($_REQUEST['svsu44'])){ echo $_REQUEST['svsu44'] ;} ?>"></td>
            <td><input type="text" name="svsv44" id="" value="<?php if(isset($_REQUEST['svsv44'])){ echo $_REQUEST['svsv44'] ;} ?>"></td>
            <td><input type="text" name="svsw44" id="" value="<?php if(isset($_REQUEST['svsw44'])){ echo $_REQUEST['svsw44'] ;} ?>"></td>
            <td><input type="text" name="svsx44" id="" value="<?php if(isset($_REQUEST['svsx44'])){ echo $_REQUEST['svsx44'] ;} ?>"></td>
            <td><input type="text" name="svsy44" id="" value="<?php if(isset($_REQUEST['svsy44'])){ echo $_REQUEST['svsy44'] ;} ?>"></td>
            <td><input type="text" name="svsz44" id="" value="<?php if(isset($_REQUEST['svsz44'])){ echo $_REQUEST['svsz44'] ;} ?>"></td>
            <td><input type="text" name="svsaa44" id="" value="<?php if(isset($_REQUEST['svsaa44'])){ echo $_REQUEST['svsaa44'] ;} ?>"></td>
            <td><input type="text" name="svsab44" id="" value="<?php if(isset($_REQUEST['svsab44'])){ echo $_REQUEST['svsab44'] ;} ?>"></td>
            <td><input type="text" name="svsac44" id="" value="<?php if(isset($_REQUEST['svsac44'])){ echo $_REQUEST['svsac44'] ;} ?>"></td>
            <td><input type="text" name="svsad44" id="" value="<?php if(isset($_REQUEST['svsad44'])){ echo $_REQUEST['svsad44'] ;} ?>"></td>
            <td><input type="text" name="svsae44" id="" value="<?php if(isset($_REQUEST['svsae44'])){ echo $_REQUEST['svsae44'] ;} ?>"></td>
            <td><input type="text" name="svsaf44" id="" value="<?php if(isset($_REQUEST['svsaf44'])){ echo $_REQUEST['svsaf44'] ;} ?>"></td>
            <td><input type="text" name="svsag44" id="" value="<?php if(isset($_REQUEST['svsag44'])){ echo $_REQUEST['svsag44'] ;} ?>"></td>
            <td><input type="text" name="svsah44" id="" value="<?php if(isset($_REQUEST['svsah44'])){ echo $_REQUEST['svsah44'] ;} ?>"></td>
            <td><input type="text" name="svsai44" id="" value="<?php if(isset($_REQUEST['svsai44'])){ echo $_REQUEST['svsai44'] ;} ?>"></td>
        </tr>
    </table>
            <input type="submit" class="svssubmit" name="svssubmit" value="Refresh">
    </form>
    </div>
</body>

</html>