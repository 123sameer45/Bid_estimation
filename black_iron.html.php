<?php 
require  "navbar.html.php" ; 
if(isset($_REQUEST['black_ironsubmit'])){
    // Column 2
    $blackb41array=[floatval($_REQUEST['blackb11']), floatval($_REQUEST['blackb12']), floatval($_REQUEST['blackb13']), floatval($_REQUEST['blackb14']), floatval($_REQUEST['blackb15']),
                    floatval($_REQUEST['blackb16']), floatval($_REQUEST['blackb17']), floatval($_REQUEST['blackb18']), floatval($_REQUEST['blackb19']), floatval($_REQUEST['blackb20']),
                    floatval($_REQUEST['blackb21']), floatval($_REQUEST['blackb22']), floatval($_REQUEST['blackb23']), floatval($_REQUEST['blackb24']), floatval($_REQUEST['blackb25']),
                    floatval($_REQUEST['blackb26']), floatval($_REQUEST['blackb27']), floatval($_REQUEST['blackb28']), floatval($_REQUEST['blackb29']), floatval($_REQUEST['blackb30']),
                    floatval($_REQUEST['blackb31']), floatval($_REQUEST['blackb32']), floatval($_REQUEST['blackb33']), floatval($_REQUEST['blackb34']), floatval($_REQUEST['blackb35']),
                    floatval($_REQUEST['blackb36']), floatval($_REQUEST['blackb37']), floatval($_REQUEST['blackb38']), floatval($_REQUEST['blackb39']), floatval($_REQUEST['blackb40'])];
    $blackb41 = array_sum($blackb41array);

    // Column 3
    $blackc41array=[floatval($_REQUEST['blackc11']), floatval($_REQUEST['blackc12']), floatval($_REQUEST['blackc13']), floatval($_REQUEST['blackc14']), floatval($_REQUEST['blackc15']),
                    floatval($_REQUEST['blackc16']), floatval($_REQUEST['blackc17']), floatval($_REQUEST['blackc18']), floatval($_REQUEST['blackc19']), floatval($_REQUEST['blackc20']),
                    floatval($_REQUEST['blackc21']), floatval($_REQUEST['blackc22']), floatval($_REQUEST['blackc23']), floatval($_REQUEST['blackc24']), floatval($_REQUEST['blackc25']),
                    floatval($_REQUEST['blackc26']), floatval($_REQUEST['blackc27']), floatval($_REQUEST['blackc28']), floatval($_REQUEST['blackc29']), floatval($_REQUEST['blackc30']),
                    floatval($_REQUEST['blackc31']), floatval($_REQUEST['blackc32']), floatval($_REQUEST['blackc33']), floatval($_REQUEST['blackc34']), floatval($_REQUEST['blackc35']),
                    floatval($_REQUEST['blackc36']), floatval($_REQUEST['blackc37']), floatval($_REQUEST['blackc38']), floatval($_REQUEST['blackc39']), floatval($_REQUEST['blackc40'])];
    $blackc41 = array_sum($blackc41array);

    // Column 4
    $blackd41array=[floatval($_REQUEST['blackd11']), floatval($_REQUEST['blackd12']), floatval($_REQUEST['blackd13']), floatval($_REQUEST['blackd14']), floatval($_REQUEST['blackd15']),
                    floatval($_REQUEST['blackd16']), floatval($_REQUEST['blackd17']), floatval($_REQUEST['blackd18']), floatval($_REQUEST['blackd19']), floatval($_REQUEST['blackd20']),
                    floatval($_REQUEST['blackd21']), floatval($_REQUEST['blackd22']), floatval($_REQUEST['blackd23']), floatval($_REQUEST['blackd24']), floatval($_REQUEST['blackd25']),
                    floatval($_REQUEST['blackd26']), floatval($_REQUEST['blackd27']), floatval($_REQUEST['blackd28']), floatval($_REQUEST['blackd29']), floatval($_REQUEST['blackd30']),
                    floatval($_REQUEST['blackd31']), floatval($_REQUEST['blackd32']), floatval($_REQUEST['blackd33']), floatval($_REQUEST['blackd34']), floatval($_REQUEST['blackd35']),
                    floatval($_REQUEST['blackd36']), floatval($_REQUEST['blackd37']), floatval($_REQUEST['blackd38']), floatval($_REQUEST['blackd39']), floatval($_REQUEST['blackd40'])];
    $blackd41 = array_sum($blackd41array);

    // Column E
    $blacke11 = round(((floatval($_REQUEST['blackd11']) * (floatval($_REQUEST['blackb11']) + floatval($_REQUEST['blackc11']))) / 6), 2);
    $blacke12 = round(((floatval($_REQUEST['blackd12']) * (floatval($_REQUEST['blackb12']) + floatval($_REQUEST['blackc12']))) / 6), 2);
    $blacke13 = round(((floatval($_REQUEST['blackd13']) * (floatval($_REQUEST['blackb13']) + floatval($_REQUEST['blackc13']))) / 6), 2);
    $blacke14 = round(((floatval($_REQUEST['blackd14']) * (floatval($_REQUEST['blackb14']) + floatval($_REQUEST['blackc14']))) / 6), 2);
    $blacke15 = round(((floatval($_REQUEST['blackd15']) * (floatval($_REQUEST['blackb15']) + floatval($_REQUEST['blackc15']))) / 6), 2);
    $blacke16 = round(((floatval($_REQUEST['blackd16']) * (floatval($_REQUEST['blackb16']) + floatval($_REQUEST['blackc16']))) / 6), 2);
    $blacke17 = round(((floatval($_REQUEST['blackd17']) * (floatval($_REQUEST['blackb17']) + floatval($_REQUEST['blackc17']))) / 6), 2);
    $blacke18 = round(((floatval($_REQUEST['blackd18']) * (floatval($_REQUEST['blackb18']) + floatval($_REQUEST['blackc18']))) / 6), 2);
    $blacke19 = round(((floatval($_REQUEST['blackd19']) * (floatval($_REQUEST['blackb19']) + floatval($_REQUEST['blackc19']))) / 6), 2);
    $blacke20 = round(((floatval($_REQUEST['blackd20']) * (floatval($_REQUEST['blackb20']) + floatval($_REQUEST['blackc20']))) / 6), 2);
    $blacke21 = round(((floatval($_REQUEST['blackd21']) * (floatval($_REQUEST['blackb21']) + floatval($_REQUEST['blackc21']))) / 6), 2);
    $blacke22 = round(((floatval($_REQUEST['blackd22']) * (floatval($_REQUEST['blackb22']) + floatval($_REQUEST['blackc22']))) / 6), 2);
    $blacke23 = round(((floatval($_REQUEST['blackd23']) * (floatval($_REQUEST['blackb23']) + floatval($_REQUEST['blackc23']))) / 6), 2);
    $blacke24 = round(((floatval($_REQUEST['blackd24']) * (floatval($_REQUEST['blackb24']) + floatval($_REQUEST['blackc24']))) / 6), 2);
    $blacke25 = round(((floatval($_REQUEST['blackd25']) * (floatval($_REQUEST['blackb25']) + floatval($_REQUEST['blackc25']))) / 6), 2);
    $blacke26 = round(((floatval($_REQUEST['blackd26']) * (floatval($_REQUEST['blackb26']) + floatval($_REQUEST['blackc26']))) / 6), 2);
    $blacke27 = round(((floatval($_REQUEST['blackd27']) * (floatval($_REQUEST['blackb27']) + floatval($_REQUEST['blackc27']))) / 6), 2);
    $blacke28 = round(((floatval($_REQUEST['blackd28']) * (floatval($_REQUEST['blackb28']) + floatval($_REQUEST['blackc28']))) / 6), 2);
    $blacke29 = round(((floatval($_REQUEST['blackd29']) * (floatval($_REQUEST['blackb29']) + floatval($_REQUEST['blackc29']))) / 6), 2);
    $blacke30 = round(((floatval($_REQUEST['blackd30']) * (floatval($_REQUEST['blackb30']) + floatval($_REQUEST['blackc30']))) / 6), 2);
    $blacke31 = round(((floatval($_REQUEST['blackd31']) * (floatval($_REQUEST['blackb31']) + floatval($_REQUEST['blackc31']))) / 6), 2);
    $blacke32 = round(((floatval($_REQUEST['blackd32']) * (floatval($_REQUEST['blackb32']) + floatval($_REQUEST['blackc32']))) / 6), 2);
    $blacke33 = round(((floatval($_REQUEST['blackd33']) * (floatval($_REQUEST['blackb33']) + floatval($_REQUEST['blackc33']))) / 6), 2);
    $blacke34 = round(((floatval($_REQUEST['blackd34']) * (floatval($_REQUEST['blackb34']) + floatval($_REQUEST['blackc34']))) / 6), 2);
    $blacke35 = round(((floatval($_REQUEST['blackd35']) * (floatval($_REQUEST['blackb35']) + floatval($_REQUEST['blackc35']))) / 6), 2);
    $blacke36 = round(((floatval($_REQUEST['blackd36']) * (floatval($_REQUEST['blackb36']) + floatval($_REQUEST['blackc36']))) / 6), 2);
    $blacke37 = round(((floatval($_REQUEST['blackd37']) * (floatval($_REQUEST['blackb37']) + floatval($_REQUEST['blackc37']))) / 6), 2);
    $blacke38 = round(((floatval($_REQUEST['blackd38']) * (floatval($_REQUEST['blackb38']) + floatval($_REQUEST['blackc38']))) / 6), 2);
    $blacke39 = round(((floatval($_REQUEST['blackd39']) * (floatval($_REQUEST['blackb39']) + floatval($_REQUEST['blackc39']))) / 6), 2);
    $blacke40 = round(((floatval($_REQUEST['blackd40']) * (floatval($_REQUEST['blackb40']) + floatval($_REQUEST['blackc40']))) / 6), 2);

    // Column F
    $blackf11 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke11']) : 0), 2);
    $blackf12 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke12']) : 0), 2);
    $blackf13 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke13']) : 0), 2);
    $blackf14 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke14']) : 0), 2);
    $blackf15 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke15']) : 0), 2);
    $blackf16 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke16']) : 0), 2);
    $blackf17 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke17']) : 0), 2);
    $blackf18 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke18']) : 0), 2);
    $blackf19 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke19']) : 0), 2);
    $blackf20 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke20']) : 0), 2);
    $blackf21 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke21']) : 0), 2);
    $blackf22 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke22']) : 0), 2);
    $blackf23 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke23']) : 0), 2);
    $blackf24 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke24']) : 0), 2);
    $blackf25 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke25']) : 0), 2);
    $blackf26 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke26']) : 0), 2);
    $blackf27 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke27']) : 0), 2);
    $blackf28 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke28']) : 0), 2);
    $blackf29 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke29']) : 0), 2);
    $blackf30 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke30']) : 0), 2);
    $blackf31 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke31']) : 0), 2);
    $blackf32 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke32']) : 0), 2);
    $blackf33 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke33']) : 0), 2);
    $blackf34 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke34']) : 0), 2);
    $blackf35 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke35']) : 0), 2);
    $blackf36 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke36']) : 0), 2);
    $blackf37 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke37']) : 0), 2);
    $blackf38 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke38']) : 0), 2);
    $blackf39 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke39']) : 0), 2);
    $blackf40 = round(((floatval($_REQUEST['blacki2']) == 2.7) ? 1 * floatval($_REQUEST['blacke40']) : 0), 2);

    // Column G
    $blackg11 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke11']) : 0), 2);
    $blackg12 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke12']) : 0), 2);
    $blackg13 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke13']) : 0), 2);
    $blackg14 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke14']) : 0), 2);
    $blackg15 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke15']) : 0), 2);
    $blackg16 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke16']) : 0), 2);
    $blackg17 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke17']) : 0), 2);
    $blackg18 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke18']) : 0), 2);
    $blackg19 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke19']) : 0), 2);
    $blackg20 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke20']) : 0), 2);
    $blackg21 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke21']) : 0), 2);
    $blackg22 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke22']) : 0), 2);
    $blackg23 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke23']) : 0), 2);
    $blackg24 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke24']) : 0), 2);
    $blackg25 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke25']) : 0), 2);
    $blackg26 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke26']) : 0), 2);
    $blackg27 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke27']) : 0), 2);
    $blackg28 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke28']) : 0), 2);
    $blackg29 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke29']) : 0), 2);
    $blackg30 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke30']) : 0), 2);
    $blackg31 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke31']) : 0), 2);
    $blackg32 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke32']) : 0), 2);
    $blackg33 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke33']) : 0), 2);
    $blackg34 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke34']) : 0), 2);
    $blackg35 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke35']) : 0), 2);
    $blackg36 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke36']) : 0), 2);
    $blackg37 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke37']) : 0), 2);
    $blackg38 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke38']) : 0), 2);
    $blackg39 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke39']) : 0), 2);
    $blackg40 = round(((floatval($_REQUEST['blacki2']) == 3.125) ? 1 * floatval($_REQUEST['blacke40']) : 0), 2);

    // ROW 7
    $blacke7array = [$blacke11, $blacke12, $blacke13, $blacke14, $blacke15,
                     $blacke16, $blacke17, $blacke18, $blacke19, $blacke20, $blacke21,
                     $blacke22, $blacke23, $blacke24, $blacke25, $blacke26, $blacke27,
                     $blacke28, $blacke29, $blacke30, $blacke31, $blacke32, $blacke33,
                     $blacke34, $blacke35, $blacke36, $blacke37, $blacke38, $blacke39,
                     $blacke40];
    $blacke7 = round(array_sum($blacke7array), 2);
    $_SESSION['blacke7'] = $blacke7;

    // ROW 5
    $blackf6array = [$blackf11, $blackf12, $blackf13, $blackf14, $blackf15,
                     $blackf16, $blackf17, $blackf18, $blackf19, $blackf20, $blackf21,
                     $blackf22, $blackf23, $blackf24, $blackf25, $blackf26, $blackf27,
                     $blackf28, $blackf29, $blackf30, $blackf31, $blackf32, $blackf33,
                     $blackf34, $blackf35, $blackf36, $blackf37, $blackf38, $blackf39,
                     $blackf40];
    $blackf6 = round(array_sum($blackf6array), 2);

    $blackf5 = round($blackf6 * 2.5, 2);

    $blackg6array = [$blackg11, $blackg12, $blackg13, $blackg14, $blackg15,
                     $blackg16, $blackg17, $blackg18, $blackg19, $blackg20, $blackg21,
                     $blackg22, $blackg23, $blackg24, $blackg25, $blackg26, $blackg27,
                     $blackg28, $blackg29, $blackg30, $blackg31, $blackg32, $blackg33,
                     $blackg34, $blackg35, $blackg36, $blackg37, $blackg38, $blackg39,
                     $blackg40];
    $blackg6 = round(array_sum($blackg6array), 2);

    $blackg5 = round($blackg6 * 3.7, 2);

    $blacki6 = round(($blackf5 * 3.85) * 1.03, 2);
    $blacki5 = round(($blackf5 * 1.15) * 1.07, 2);

    // ROW 4
    $blacke4 = round((($blackf6 * 0.24) + $blackf6), 2);
    $blacke3 = round((($blacki5 * 0.24) + $blacki5), 2);

    $blacki4 = round(($blacke3 * 3.85) * 1.03 * 1.25, 2);
    $_SESSION['blacki4'] = $blacki4;


    // ROW 3
    $blacki3 = round(((((($blacke3 * 1.15) * 1.1) * 1.1) * 1.1) * 1.1) * 1.07 * 2.5, 2);
    $_SESSION['blacki3'] = $blacki3;

    $blacki41array =   [floatval($_REQUEST['blacki11']), floatval($_REQUEST['blacki12']), floatval($_REQUEST['blacki13']), floatval($_REQUEST['blacki14']), floatval($_REQUEST['blacki15']),
                        floatval($_REQUEST['blacki16']), floatval($_REQUEST['blacki17']), floatval($_REQUEST['blacki18']), floatval($_REQUEST['blacki19']), floatval($_REQUEST['blacki20']),
                        floatval($_REQUEST['blacki21']), floatval($_REQUEST['blacki22']), floatval($_REQUEST['blacki23']), floatval($_REQUEST['blacki24']), floatval($_REQUEST['blacki25']),
                        floatval($_REQUEST['blacki26']), floatval($_REQUEST['blacki27']), floatval($_REQUEST['blacki28']), floatval($_REQUEST['blacki29']), floatval($_REQUEST['blacki30']),
                        floatval($_REQUEST['blacki31']), floatval($_REQUEST['blacki32']), floatval($_REQUEST['blacki33']), floatval($_REQUEST['blacki34']), floatval($_REQUEST['blacki35']),
                        floatval($_REQUEST['blacki36']), floatval($_REQUEST['blacki37']), floatval($_REQUEST['blacki38']), floatval($_REQUEST['blacki39']), floatval($_REQUEST['blacki40'])];
    $blacki41 = round(array_sum($blacki41array), 2);

    $blackc1 = isset($_SESSION['jobinfoe13']) ? $_SESSION['jobinfoe13'] : '-';


}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Black Iron</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="table.css">
</head>


<body>
    <div class="section">
        <form action="" method="POST">
            <table border="1" style="border-collapse:collapse;" class="table_1">
                <!-- <tr style="text-align: center;position:sticky;top:0; background-color:white;">
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
                </tr> -->
                <tr class="blackIronTableHeader">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">1</td>
                    <td style="background : white"></td>
                    <td>Job name:</td>
                    <td><input type="text" name="blackc1" readonly value="<?php if(isset($blackc1)){ echo $blackc1 ;} ?>"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="blackIronTableHeaderTwo">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">2</td>
                    <td style="background : white"></td>
                    <td>Enter Gage</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="blacki2"
                            value="<?php if(isset($_REQUEST['blacki2'])){ echo $_REQUEST['blacki2'] ;} ?>"></td>
                </tr>
                <tr class="blackIronTableHeader">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">3</td>
                    <td style="background : white"></td>
                    <td>Net Total LBS.</td>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="blacke3" readonly
                            value="<?php if(isset($blacke3)){ echo $blacke3 ;} else{ echo 0 ;} ?>"></td>
                    <td></td>
                    <td>Material Cost</td>
                    <td></td>
                    <td><input type="text" name="blacki3" readonly
                            value="<?php if(isset($blacki3)){ echo $blacki3 ;} else{ echo 0 ;} ?>"></td>
                </tr>
                <tr class="blackIronTableHeader">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">4</td>
                    <td style="background : white"></td>
                    <td>Net Total SQ. FT.</td>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="blacke4" readonly
                            value="<?php if(isset($blacke4)){ echo $blacke4 ;} else{ echo 0 ;} ?>"></td>
                    <td></td>
                    <td>Labor Cost</td>
                    <td></td>
                    <td><input type="text" name="blacki4" readonly
                            value="<?php if(isset($blacki4)){ echo $blacki4 ;} else{ echo 0 ;} ?>"></td>
                </tr>
                <tr class="blackIronTableHeaderTwo">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">5</td>
                    <td style="background : white"></td>
                    <td>Total LBS.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="blackf5" readonly
                            value="<?php if(isset($blackf5)){ echo $blackf5 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg5" readonly
                            value="<?php if(isset($blackg5)){ echo $blackg5 ;} else{ echo 0 ;} ?>"></td>
                    <td>Material Cost</td>
                    <td><input type="text" name="blacki5" readonly
                            value="<?php if(isset($blacki5)){ echo $blacki5 ;} else{ echo 0 ;} ?>"></td>
                </tr>
                <tr class="blackIronTableHeaderTwo">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">6</td>
                    <td style="background : white"></td>
                    <td>Total SQ. FT.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="blackf6" readonly
                            value="<?php if(isset($blackf6)){ echo $blackf6 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg6" readonly
                            value="<?php if(isset($blackg6)){ echo $blackg6 ;} else{ echo 0 ;} ?>"></td>
                    <td>Labor Cost</td>
                    <td><input type="text" name="blacki6" readonly
                            value="<?php if(isset($blacki6)){ echo $blacki6 ;} else{ echo 0 ;} ?>"></td>
                </tr>
                <tr class="blackIronTableHeader">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">7</td>
                    <td style="background : white"></td>
                    <td>Total LF</td>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="blacke7" readonly
                            value="<?php if(isset($blacke7)){ echo $blacke7 ;} else{ echo 0 ;} ?>"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr style="position: sticky; top:5%; background-color:#D4D4D4;">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">9</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>lineal feet</td>
                    <td>16G</td>
                    <td>14G</td>
                    <td></td>
                    <td>Notes</td>
                </tr>
                <tr>
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">8</td>
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
                
                <tr style="position: sticky; top:9%; background: #D3D3D3;">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">10</td>
                    <td>Column1</td>
                    <td>Column2</td>
                    <td>Column3</td>
                    <td>Column4</td>
                    <td>0</td>
                    <td>05</td>
                    <td>06</td>
                    <td>Column7</td>
                    <td>Column8</td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">11</td>
                    <td></td>
                    <td><input type="text" name="blackb11"
                            value="<?php if(isset($_REQUEST['blackb11'])){ echo $_REQUEST['blackb11'] ;}?>"></td>
                    <td><input type="text" name="blackc11"
                            value="<?php if(isset($_REQUEST['blackc11'])){ echo $_REQUEST['blackc11'] ;}?>"></td>
                    <td><input type="text" name="blackd11"
                            value="<?php if(isset($_REQUEST['blackd11'])){ echo $_REQUEST['blackd11'] ;}?>"></td>
                    <td><input type="text" name="blacke11" readonly
                            value="<?php if(isset($blacke11)){ echo $blacke11 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf11" readonly
                            value="<?php if(isset($blackf11)){ echo $blackf11 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg11" readonly
                            value="<?php if(isset($blackg11)){ echo $blackg11 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh11"
                            value="<?php if(isset($_REQUEST['blackh11'])){ echo $_REQUEST['blackh11'] ;}?>"></td>
                    <td><input type="text" name="blacki11"
                            value="<?php if(isset($_REQUEST['blacki11'])){ echo $_REQUEST['blacki11'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">12</td>
                    <td></td>
                    <td><input type="text" name="blackb12"
                            value="<?php if(isset($_REQUEST['blackb12'])){ echo $_REQUEST['blackb12'] ; } ?>"></td>
                    <td><input type="text" name="blackc12"
                            value="<?php if(isset($_REQUEST['blackc12'])){ echo $_REQUEST['blackc12'] ; } ?>"></td>
                    <td><input type="text" name="blackd12"
                            value="<?php if(isset($_REQUEST['blackd12'])){ echo $_REQUEST['blackd12'] ; } ?>"></td>
                    <td><input type="text" name="blacke12" readonly
                            value="<?php if(isset($blacke12)){ echo $blacke12 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf12" readonly
                            value="<?php if(isset($blackf12)){ echo $blackf12 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg12" readonly
                            value="<?php if(isset($blackg12)){ echo $blackg12 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh12"
                            value="<?php if(isset($_REQUEST['blackh12'])){ echo $_REQUEST['blackh12'] ;}?>"></td>
                    <td><input type="text" name="blacki12"
                            value="<?php if(isset($_REQUEST['blacki12'])){ echo $_REQUEST['blacki12'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">13</td>
                    <td></td>
                    <td><input type="text" name="blackb13"
                            value="<?php if(isset($_REQUEST['blackb13'])){ echo $_REQUEST['blackb13'] ; } ?>"></td>
                    <td><input type="text" name="blackc13"
                            value="<?php if(isset($_REQUEST['blackc13'])){ echo $_REQUEST['blackc13'] ; } ?>"></td>
                    <td><input type="text" name="blackd13"
                            value="<?php if(isset($_REQUEST['blackd13'])){ echo $_REQUEST['blackd13'] ; } ?>"></td>
                    <td><input type="text" name="blacke13" readonly
                            value="<?php if(isset($blacke13)){ echo $blacke13 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf13" readonly
                            value="<?php if(isset($blackf13)){ echo $blackf13 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg13" readonly
                            value="<?php if(isset($blackg13)){ echo $blackg13 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh13"
                            value="<?php if(isset($_REQUEST['blackh13'])){ echo $_REQUEST['blackh13'] ;}?>"></td>
                    <td><input type="text" name="blacki13"
                            value="<?php if(isset($_REQUEST['blacki13'])){ echo $_REQUEST['blacki13'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">14</td>
                    <td></td>
                    <td><input type="text" name="blackb14"
                            value="<?php if(isset($_REQUEST['blackb14'])){ echo $_REQUEST['blackb14'] ; } ?>"></td>
                    <td><input type="text" name="blackc14"
                            value="<?php if(isset($_REQUEST['blackc14'])){ echo $_REQUEST['blackc14'] ; } ?>"></td>
                    <td><input type="text" name="blackd14"
                            value="<?php if(isset($_REQUEST['blackd14'])){ echo $_REQUEST['blackd14'] ; } ?>"></td>
                    <td><input type="text" name="blacke14" readonly
                            value="<?php if(isset($blacke14)){ echo $blacke14 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf14" readonly
                            value="<?php if(isset($blackf14)){ echo $blackf14 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg14" readonly
                            value="<?php if(isset($blackg14)){ echo $blackg14 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh14"
                            value="<?php if(isset($_REQUEST['blackh14'])){ echo $_REQUEST['blackh14'] ;}?>"></td>
                    <td><input type="text" name="blacki14"
                            value="<?php if(isset($_REQUEST['blacki14'])){ echo $_REQUEST['blacki14'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">15</td>
                    <td></td>
                    <td><input type="text" name="blackb15"
                            value="<?php if(isset($_REQUEST['blackb15'])){ echo $_REQUEST['blackb15'] ; } ?>"></td>
                    <td><input type="text" name="blackc15"
                            value="<?php if(isset($_REQUEST['blackc15'])){ echo $_REQUEST['blackc15'] ; } ?>"></td>
                    <td><input type="text" name="blackd15"
                            value="<?php if(isset($_REQUEST['blackd15'])){ echo $_REQUEST['blackd15'] ; } ?>"></td>
                    <td><input type="text" name="blacke15" readonly
                            value="<?php if(isset($blacke15)){ echo $blacke15 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf15" readonly
                            value="<?php if(isset($blackf15)){ echo $blackf15 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg15" readonly
                            value="<?php if(isset($blackg15)){ echo $blackg15 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh15"
                            value="<?php if(isset($_REQUEST['blackh15'])){ echo $_REQUEST['blackh15'] ;}?>"></td>
                    <td><input type="text" name="blacki15"
                            value="<?php if(isset($_REQUEST['blacki15'])){ echo $_REQUEST['blacki15'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">16</td>
                    <td></td>
                    <td><input type="text" name="blackb16"
                            value="<?php if(isset($_REQUEST['blackb16'])){ echo $_REQUEST['blackb16'] ; } ?>"></td>
                    <td><input type="text" name="blackc16"
                            value="<?php if(isset($_REQUEST['blackc16'])){ echo $_REQUEST['blackc16'] ; } ?>"></td>
                    <td><input type="text" name="blackd16"
                            value="<?php if(isset($_REQUEST['blackd16'])){ echo $_REQUEST['blackd16'] ; } ?>"></td>
                    <td><input type="text" name="blacke16" readonly
                            value="<?php if(isset($blacke16)){ echo $blacke16 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf16" readonly
                            value="<?php if(isset($blackf16)){ echo $blackf16 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg16" readonly
                            value="<?php if(isset($blackg16)){ echo $blackg16 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh16" 
                            value="<?php if(isset($_REQUEST['blackh16'])){ echo $_REQUEST['blackh16'] ;}?>"></td>
                    <td><input type="text" name="blacki16"
                            value="<?php if(isset($_REQUEST['blacki16'])){ echo $_REQUEST['blacki16'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">17</td>
                    <td></td>
                    <td><input type="text" name="blackb17"
                            value="<?php if(isset($_REQUEST['blackb17'])){ echo $_REQUEST['blackb17'] ; } ?>"></td>
                    <td><input type="text" name="blackc17"
                            value="<?php if(isset($_REQUEST['blackc17'])){ echo $_REQUEST['blackc17'] ; } ?>"></td>
                    <td><input type="text" name="blackd17"
                            value="<?php if(isset($_REQUEST['blackd17'])){ echo $_REQUEST['blackd17'] ; } ?>"></td>
                    <td><input type="text" name="blacke17" readonly
                            value="<?php if(isset($blacke17)){ echo $blacke17 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf17" readonly
                            value="<?php if(isset($blackf17)){ echo $blackf17 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg17" readonly
                            value="<?php if(isset($blackg17)){ echo $blackg17 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh17"
                            value="<?php if(isset($_REQUEST['blackh17'])){ echo $_REQUEST['blackh17'] ;}?>"></td>
                    <td><input type="text" name="blacki17"
                            value="<?php if(isset($_REQUEST['blacki17'])){ echo $_REQUEST['blacki17'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">18</td>
                    <td></td>
                    <td><input type="text" name="blackb18"
                            value="<?php if(isset($_REQUEST['blackb18'])){ echo $_REQUEST['blackb18'] ; } ?>"></td>
                    <td><input type="text" name="blackc18"
                            value="<?php if(isset($_REQUEST['blackc18'])){ echo $_REQUEST['blackc18'] ; } ?>"></td>
                    <td><input type="text" name="blackd18"
                            value="<?php if(isset($_REQUEST['blackd18'])){ echo $_REQUEST['blackd18'] ; } ?>"></td>
                    <td><input type="text" name="blacke18" readonly
                            value="<?php if(isset($blacke18)){ echo $blacke18 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf18" readonly
                            value="<?php if(isset($blackf18)){ echo $blackf18 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg18" readonly
                            value="<?php if(isset($blackg18)){ echo $blackg18 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh18"
                            value="<?php if(isset($_REQUEST['blackh18'])){ echo $_REQUEST['blackh18'] ;}?>"></td>
                    <td><input type="text" name="blacki18"
                            value="<?php if(isset($_REQUEST['blacki18'])){ echo $_REQUEST['blacki18'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">19</td>
                    <td></td>
                    <td><input type="text" name="blackb19"
                            value="<?php if(isset($_REQUEST['blackb19'])){ echo $_REQUEST['blackb19'] ; } ?>"></td>
                    <td><input type="text" name="blackc19"
                            value="<?php if(isset($_REQUEST['blackc19'])){ echo $_REQUEST['blackc19'] ; } ?>"></td>
                    <td><input type="text" name="blackd19"
                            value="<?php if(isset($_REQUEST['blackd19'])){ echo $_REQUEST['blackd19'] ; } ?>"></td>
                    <td><input type="text" name="blacke19" readonly
                            value="<?php if(isset($blacke19)){ echo $blacke19 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf19" readonly
                            value="<?php if(isset($blackf19)){ echo $blackf19 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg19" readonly
                            value="<?php if(isset($blackg19)){ echo $blackg19 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh19"
                            value="<?php if(isset($_REQUEST['blackh19'])){ echo $_REQUEST['blackh19'] ;}?>"></td>
                    <td><input type="text" name="blacki19"
                            value="<?php if(isset($_REQUEST['blacki19'])){ echo $_REQUEST['blacki19'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">20</td>
                    <td></td>
                    <td><input type="text" name="blackb20"
                            value="<?php if(isset($_REQUEST['blackb20'])){ echo $_REQUEST['blackb20'] ; } ?>"></td>
                    <td><input type="text" name="blackc20"
                            value="<?php if(isset($_REQUEST['blackc20'])){ echo $_REQUEST['blackc20'] ; } ?>"></td>
                    <td><input type="text" name="blackd20"
                            value="<?php if(isset($_REQUEST['blackd20'])){ echo $_REQUEST['blackd20'] ; } ?>"></td>
                    <td><input type="text" name="blacke20" readonly
                            value="<?php if(isset($blacke20)){ echo $blacke20 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf20" readonly
                            value="<?php if(isset($blackf20)){ echo $blackf20 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg20" readonly
                            value="<?php if(isset($blackg20)){ echo $blackg20 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh20"
                            value="<?php if(isset($_REQUEST['blackh20'])){ echo $_REQUEST['blackh20'] ;}?>"></td>
                    <td><input type="text" name="blacki20"
                            value="<?php if(isset($_REQUEST['blacki20'])){ echo $_REQUEST['blacki20'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">21</td>
                    <td></td>
                    <td><input type="text" name="blackb21"
                            value="<?php if(isset($_REQUEST['blackb21'])){ echo $_REQUEST['blackb21'] ; } ?>"></td>
                    <td><input type="text" name="blackc21"
                            value="<?php if(isset($_REQUEST['blackc21'])){ echo $_REQUEST['blackc21'] ; } ?>"></td>
                    <td><input type="text" name="blackd21"
                            value="<?php if(isset($_REQUEST['blackd21'])){ echo $_REQUEST['blackd21'] ; } ?>"></td>
                    <td><input type="text" name="blacke21" readonly
                            value="<?php if(isset($blacke21)){ echo $blacke21 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf21" readonly
                            value="<?php if(isset($blackf21)){ echo $blackf21 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg21" readonly
                            value="<?php if(isset($blackg21)){ echo $blackg21 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh21"
                            value="<?php if(isset($_REQUEST['blackh21'])){ echo $_REQUEST['blackh21'] ;}?>"></td>
                    <td><input type="text" name="blacki21"
                            value="<?php if(isset($_REQUEST['blacki21'])){ echo $_REQUEST['blacki21'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">22</td>
                    <td></td>
                    <td><input type="text" name="blackb22"
                            value="<?php if(isset($_REQUEST['blackb22'])){ echo $_REQUEST['blackb22'] ; } ?>"></td>
                    <td><input type="text" name="blackc22"
                            value="<?php if(isset($_REQUEST['blackc22'])){ echo $_REQUEST['blackc22'] ; } ?>"></td>
                    <td><input type="text" name="blackd22"
                            value="<?php if(isset($_REQUEST['blackd22'])){ echo $_REQUEST['blackd22'] ; } ?>"></td>
                    <td><input type="text" name="blacke22" readonly
                            value="<?php if(isset($blacke22)){ echo $blacke22 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf22" readonly
                            value="<?php if(isset($blackf22)){ echo $blackf22 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg22" readonly
                            value="<?php if(isset($blackg22)){ echo $blackg22 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh22"
                            value="<?php if(isset($_REQUEST['blackh22'])){ echo $_REQUEST['blackh22'] ;}?>"></td>
                    <td><input type="text" name="blacki22"
                            value="<?php if(isset($_REQUEST['blacki22'])){ echo $_REQUEST['blacki22'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">23</td>
                    <td></td>
                    <td><input type="text" name="blackb23"
                            value="<?php if(isset($_REQUEST['blackb23'])){ echo $_REQUEST['blackb23'] ; } ?>"></td>
                    <td><input type="text" name="blackc23"
                            value="<?php if(isset($_REQUEST['blackc23'])){ echo $_REQUEST['blackc23'] ; } ?>"></td>
                    <td><input type="text" name="blackd23"
                            value="<?php if(isset($_REQUEST['blackd23'])){ echo $_REQUEST['blackd23'] ; } ?>"></td>
                    <td><input type="text" name="blacke23" readonly
                            value="<?php if(isset($blacke23)){ echo $blacke23 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf23" readonly
                            value="<?php if(isset($blackf23)){ echo $blackf23 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg23" readonly
                            value="<?php if(isset($blackg23)){ echo $blackg23 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh23"
                            value="<?php if(isset($_REQUEST['blackh23'])){ echo $_REQUEST['blackh23'] ;}?>"></td>
                    <td><input type="text" name="blacki23"
                            value="<?php if(isset($_REQUEST['blacki23'])){ echo $_REQUEST['blacki23'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">24</td>
                    <td></td>
                    <td><input type="text" name="blackb24"
                            value="<?php if(isset($_REQUEST['blackb24'])){ echo $_REQUEST['blackb24'] ; } ?>"></td>
                    <td><input type="text" name="blackc24"
                            value="<?php if(isset($_REQUEST['blackc24'])){ echo $_REQUEST['blackc24'] ; } ?>"></td>
                    <td><input type="text" name="blackd24"
                            value="<?php if(isset($_REQUEST['blackd24'])){ echo $_REQUEST['blackd24'] ; } ?>"></td>
                    <td><input type="text" name="blacke24" readonly
                            value="<?php if(isset($blacke24)){ echo $blacke24 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf24" readonly
                            value="<?php if(isset($blackf24)){ echo $blackf24 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg24" readonly
                            value="<?php if(isset($blackg24)){ echo $blackg24 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh24"
                            value="<?php if(isset($_REQUEST['blackh24'])){ echo $_REQUEST['blackh24'] ;}?>"></td>
                    <td><input type="text" name="blacki24"
                            value="<?php if(isset($_REQUEST['blacki24'])){ echo $_REQUEST['blacki24'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">25</td>
                    <td></td>
                    <td><input type="text" name="blackb25"
                            value="<?php if(isset($_REQUEST['blackb25'])){ echo $_REQUEST['blackb25'] ; } ?>"></td>
                    <td><input type="text" name="blackc25"
                            value="<?php if(isset($_REQUEST['blackc25'])){ echo $_REQUEST['blackc25'] ; } ?>"></td>
                    <td><input type="text" name="blackd25"
                            value="<?php if(isset($_REQUEST['blackd25'])){ echo $_REQUEST['blackd25'] ; } ?>"></td>
                    <td><input type="text" name="blacke25" readonly
                            value="<?php if(isset($blacke25)){ echo $blacke25 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf25" readonly
                            value="<?php if(isset($blackf25)){ echo $blackf25 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg25" readonly
                            value="<?php if(isset($blackg25)){ echo $blackg25 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh25"
                            value="<?php if(isset($_REQUEST['blackh25'])){ echo $_REQUEST['blackh25'] ;}?>"></td>
                    <td><input type="text" name="blacki25"
                            value="<?php if(isset($_REQUEST['blacki25'])){ echo $_REQUEST['blacki25'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">26</td>
                    <td></td>
                    <td><input type="text" name="blackb26"
                            value="<?php if(isset($_REQUEST['blackb26'])){ echo $_REQUEST['blackb26'] ; } ?>"></td>
                    <td><input type="text" name="blackc26"
                            value="<?php if(isset($_REQUEST['blackc26'])){ echo $_REQUEST['blackc26'] ; } ?>"></td>
                    <td><input type="text" name="blackd26"
                            value="<?php if(isset($_REQUEST['blackd26'])){ echo $_REQUEST['blackd26'] ; } ?>"></td>
                    <td><input type="text" name="blacke26" readonly
                            value="<?php if(isset($blacke26)){ echo $blacke26 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf26" readonly
                            value="<?php if(isset($blackf26)){ echo $blackf26 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg26" readonly
                            value="<?php if(isset($blackg26)){ echo $blackg26 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh26"
                            value="<?php if(isset($_REQUEST['blackh26'])){ echo $_REQUEST['blackh26'] ;}?>"></td>
                    <td><input type="text" name="blacki26"
                            value="<?php if(isset($_REQUEST['blacki26'])){ echo $_REQUEST['blacki26'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">27</td>
                    <td></td>
                    <td><input type="text" name="blackb27"
                            value="<?php if(isset($_REQUEST['blackb27'])){ echo $_REQUEST['blackb27'] ; } ?>"></td>
                    <td><input type="text" name="blackc27"
                            value="<?php if(isset($_REQUEST['blackc27'])){ echo $_REQUEST['blackc27'] ; } ?>"></td>
                    <td><input type="text" name="blackd27"
                            value="<?php if(isset($_REQUEST['blackd27'])){ echo $_REQUEST['blackd27'] ; } ?>"></td>
                    <td><input type="text" name="blacke27" readonly
                            value="<?php if(isset($blacke27)){ echo $blacke27 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf27" readonly
                            value="<?php if(isset($blackf27)){ echo $blackf27 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg27" readonly
                            value="<?php if(isset($blackg27)){ echo $blackg27 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh27"
                            value="<?php if(isset($_REQUEST['blackh27'])){ echo $_REQUEST['blackh27'] ;}?>"></td>
                    <td><input type="text" name="blacki27"
                            value="<?php if(isset($_REQUEST['blacki27'])){ echo $_REQUEST['blacki27'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">28</td>
                    <td></td>
                    <td><input type="text" name="blackb28"
                            value="<?php if(isset($_REQUEST['blackb28'])){ echo $_REQUEST['blackb28'] ; } ?>"></td>
                    <td><input type="text" name="blackc28"
                            value="<?php if(isset($_REQUEST['blackc28'])){ echo $_REQUEST['blackc28'] ; } ?>"></td>
                    <td><input type="text" name="blackd28"
                            value="<?php if(isset($_REQUEST['blackd28'])){ echo $_REQUEST['blackd28'] ; } ?>"></td>
                    <td><input type="text" name="blacke28" readonly
                            value="<?php if(isset($blacke28)){ echo $blacke28 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf28" readonly
                            value="<?php if(isset($blackf28)){ echo $blackf28 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg28" readonly
                            value="<?php if(isset($blackg28)){ echo $blackg28 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh28"
                            value="<?php if(isset($_REQUEST['blackh28'])){ echo $_REQUEST['blackh28'] ;}?>"></td>
                    <td><input type="text" name="blacki28"
                            value="<?php if(isset($_REQUEST['blacki28'])){ echo $_REQUEST['blacki28'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">29</td>
                    <td></td>
                    <td><input type="text" name="blackb29"
                            value="<?php if(isset($_REQUEST['blackb29'])){ echo $_REQUEST['blackb29'] ; } ?>"></td>
                    <td><input type="text" name="blackc29"
                            value="<?php if(isset($_REQUEST['blackc29'])){ echo $_REQUEST['blackc29'] ; } ?>"></td>
                    <td><input type="text" name="blackd29"
                            value="<?php if(isset($_REQUEST['blackd29'])){ echo $_REQUEST['blackd29'] ; } ?>"></td>
                    <td><input type="text" name="blacke29" readonly
                            value="<?php if(isset($blacke29)){ echo $blacke29 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf29" readonly
                            value="<?php if(isset($blackf29)){ echo $blackf29 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg29" readonly
                            value="<?php if(isset($blackg29)){ echo $blackg29 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh29"
                            value="<?php if(isset($_REQUEST['blackh29'])){ echo $_REQUEST['blackh29'] ;}?>"></td>
                    <td><input type="text" name="blacki29"
                            value="<?php if(isset($_REQUEST['blacki29'])){ echo $_REQUEST['blacki29'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">30</td>
                    <td></td>
                    <td><input type="text" name="blackb30"
                            value="<?php if(isset($_REQUEST['blackb30'])){ echo $_REQUEST['blackb30'] ; } ?>"></td>
                    <td><input type="text" name="blackc30"
                            value="<?php if(isset($_REQUEST['blackc30'])){ echo $_REQUEST['blackc30'] ; } ?>"></td>
                    <td><input type="text" name="blackd30"
                            value="<?php if(isset($_REQUEST['blackd30'])){ echo $_REQUEST['blackd30'] ; } ?>"></td>
                    <td><input type="text" name="blacke30" readonly
                            value="<?php if(isset($blacke30)){ echo $blacke30 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf30" readonly
                            value="<?php if(isset($blackf30)){ echo $blackf30 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg30" readonly
                            value="<?php if(isset($blackg30)){ echo $blackg30 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh30"
                            value="<?php if(isset($_REQUEST['blackh30'])){ echo $_REQUEST['blackh30'] ;}?>"></td>
                    <td><input type="text" name="blacki30"
                            value="<?php if(isset($_REQUEST['blacki30'])){ echo $_REQUEST['blacki30'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">31</td>
                    <td></td>
                    <td><input type="text" name="blackb31"
                            value="<?php if(isset($_REQUEST['blackb31'])){ echo $_REQUEST['blackb31'] ; } ?>"></td>
                    <td><input type="text" name="blackc31"
                            value="<?php if(isset($_REQUEST['blackc31'])){ echo $_REQUEST['blackc31'] ; } ?>"></td>
                    <td><input type="text" name="blackd31"
                            value="<?php if(isset($_REQUEST['blackd31'])){ echo $_REQUEST['blackd31'] ; } ?>"></td>
                    <td><input type="text" name="blacke31" readonly
                            value="<?php if(isset($blacke31)){ echo $blacke31 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf31" readonly
                            value="<?php if(isset($blackf31)){ echo $blackf31 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg31" readonly
                            value="<?php if(isset($blackg31)){ echo $blackg31 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh31"
                            value="<?php if(isset($_REQUEST['blackh31'])){ echo $_REQUEST['blackh31'] ;}?>"></td>
                    <td><input type="text" name="blacki31"
                            value="<?php if(isset($_REQUEST['blacki31'])){ echo $_REQUEST['blacki31'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">32</td>
                    <td></td>
                    <td><input type="text" name="blackb32"
                            value="<?php if(isset($_REQUEST['blackb32'])){ echo $_REQUEST['blackb32'] ; } ?>"></td>
                    <td><input type="text" name="blackc32"
                            value="<?php if(isset($_REQUEST['blackc32'])){ echo $_REQUEST['blackc32'] ; } ?>"></td>
                    <td><input type="text" name="blackd32"
                            value="<?php if(isset($_REQUEST['blackd32'])){ echo $_REQUEST['blackd32'] ; } ?>"></td>
                    <td><input type="text" name="blacke32" readonly
                            value="<?php if(isset($blacke32)){ echo $blacke32 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf32" readonly
                            value="<?php if(isset($blackf32)){ echo $blackf32 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg32" readonly
                            value="<?php if(isset($blackg32)){ echo $blackg32 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh32"
                            value="<?php if(isset($_REQUEST['blackh32'])){ echo $_REQUEST['blackh32'] ;}?>"></td>
                    <td><input type="text" name="blacki32"
                            value="<?php if(isset($_REQUEST['blacki32'])){ echo $_REQUEST['blacki32'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">33</td>
                    <td></td>
                    <td><input type="text" name="blackb33"
                            value="<?php if(isset($_REQUEST['blackb33'])){ echo $_REQUEST['blackb33'] ; } ?>"></td>
                    <td><input type="text" name="blackc33"
                            value="<?php if(isset($_REQUEST['blackc33'])){ echo $_REQUEST['blackc33'] ; } ?>"></td>
                    <td><input type="text" name="blackd33"
                            value="<?php if(isset($_REQUEST['blackd33'])){ echo $_REQUEST['blackd33'] ; } ?>"></td>
                    <td><input type="text" name="blacke33" readonly
                            value="<?php if(isset($blacke33)){ echo $blacke33 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf33" readonly
                            value="<?php if(isset($blackf33)){ echo $blackf33 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg33" readonly
                            value="<?php if(isset($blackg33)){ echo $blackg33 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh33"
                            value="<?php if(isset($_REQUEST['blackh33'])){ echo $_REQUEST['blackh33'] ;}?>"></td>
                    <td><input type="text" name="blacki33"
                            value="<?php if(isset($_REQUEST['blacki33'])){ echo $_REQUEST['blacki33'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">34</td>
                    <td></td>
                    <td><input type="text" name="blackb34"
                            value="<?php if(isset($_REQUEST['blackb34'])){ echo $_REQUEST['blackb34'] ; } ?>"></td>
                    <td><input type="text" name="blackc34"
                            value="<?php if(isset($_REQUEST['blackc34'])){ echo $_REQUEST['blackc34'] ; } ?>"></td>
                    <td><input type="text" name="blackd34"
                            value="<?php if(isset($_REQUEST['blackd34'])){ echo $_REQUEST['blackd34'] ; } ?>"></td>
                    <td><input type="text" name="blacke34" readonly
                            value="<?php if(isset($blacke34)){ echo $blacke34 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf34" readonly
                            value="<?php if(isset($blackf34)){ echo $blackf34 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg34" readonly
                            value="<?php if(isset($blackg34)){ echo $blackg34 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh34"
                            value="<?php if(isset($_REQUEST['blackh34'])){ echo $_REQUEST['blackh34'] ;}?>"></td>
                    <td><input type="text" name="blacki34"
                            value="<?php if(isset($_REQUEST['blacki34'])){ echo $_REQUEST['blacki34'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">35</td>
                    <td></td>
                    <td><input type="text" name="blackb35"
                            value="<?php if(isset($_REQUEST['blackb35'])){ echo $_REQUEST['blackb35'] ; } ?>"></td>
                    <td><input type="text" name="blackc35"
                            value="<?php if(isset($_REQUEST['blackc35'])){ echo $_REQUEST['blackc35'] ; } ?>"></td>
                    <td><input type="text" name="blackd35"
                            value="<?php if(isset($_REQUEST['blackd35'])){ echo $_REQUEST['blackd35'] ; } ?>"></td>
                    <td><input type="text" name="blacke35" readonly
                            value="<?php if(isset($blacke35)){ echo $blacke35 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf35" readonly
                            value="<?php if(isset($blackf35)){ echo $blackf35 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg35" readonly
                            value="<?php if(isset($blackg35)){ echo $blackg35 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh35"
                            value="<?php if(isset($_REQUEST['blackh35'])){ echo $_REQUEST['blackh35'] ;}?>"></td>
                    <td><input type="text" name="blacki35"
                            value="<?php if(isset($_REQUEST['blacki35'])){ echo $_REQUEST['blacki35'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">36</td>
                    <td></td>
                    <td><input type="text" name="blackb36"
                            value="<?php if(isset($_REQUEST['blackb36'])){ echo $_REQUEST['blackb36'] ; } ?>"></td>
                    <td><input type="text" name="blackc36"
                            value="<?php if(isset($_REQUEST['blackc36'])){ echo $_REQUEST['blackc36'] ; } ?>"></td>
                    <td><input type="text" name="blackd36"
                            value="<?php if(isset($_REQUEST['blackd36'])){ echo $_REQUEST['blackd36'] ; } ?>"></td>
                    <td><input type="text" name="blacke36" readonly
                            value="<?php if(isset($blacke36)){ echo $blacke36 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf36" readonly
                            value="<?php if(isset($blackf36)){ echo $blackf36 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg36" readonly
                            value="<?php if(isset($blackg36)){ echo $blackg36 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh36"
                            value="<?php if(isset($_REQUEST['blackh36'])){ echo $_REQUEST['blackh36'] ;}?>"></td>
                    <td><input type="text" name="blacki36"
                            value="<?php if(isset($_REQUEST['blacki36'])){ echo $_REQUEST['blacki36'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">37</td>
                    <td></td>
                    <td><input type="text" name="blackb37"
                            value="<?php if(isset($_REQUEST['blackb37'])){ echo $_REQUEST['blackb37'] ; } ?>"></td>
                    <td><input type="text" name="blackc37"
                            value="<?php if(isset($_REQUEST['blackc37'])){ echo $_REQUEST['blackc37'] ; } ?>"></td>
                    <td><input type="text" name="blackd37"
                            value="<?php if(isset($_REQUEST['blackd37'])){ echo $_REQUEST['blackd37'] ; } ?>"></td>
                    <td><input type="text" name="blacke37" readonly
                            value="<?php if(isset($blacke37)){ echo $blacke37 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf37" readonly
                            value="<?php if(isset($blackf37)){ echo $blackf37 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg37" readonly
                            value="<?php if(isset($blackg37)){ echo $blackg37 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh37"
                            value="<?php if(isset($_REQUEST['blackh37'])){ echo $_REQUEST['blackh37'] ;}?>"></td>
                    <td><input type="text" name="blacki37"
                            value="<?php if(isset($_REQUEST['blacki37'])){ echo $_REQUEST['blacki37'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">38</td>
                    <td></td>
                    <td><input type="text" name="blackb38"
                            value="<?php if(isset($_REQUEST['blackb38'])){ echo $_REQUEST['blackb38'] ; } ?>"></td>
                    <td><input type="text" name="blackc38"
                            value="<?php if(isset($_REQUEST['blackc38'])){ echo $_REQUEST['blackc38'] ; } ?>"></td>
                    <td><input type="text" name="blackd38"
                            value="<?php if(isset($_REQUEST['blackd38'])){ echo $_REQUEST['blackd38'] ; } ?>"></td>
                    <td><input type="text" name="blacke38" readonly
                            value="<?php if(isset($blacke38)){ echo $blacke38 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf38" readonly
                            value="<?php if(isset($blackf38)){ echo $blackf38 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg38" readonly
                            value="<?php if(isset($blackg38)){ echo $blackg38 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh38"
                            value="<?php if(isset($_REQUEST['blackh38'])){ echo $_REQUEST['blackh38'] ;}?>"></td>
                    <td><input type="text" name="blacki38"
                            value="<?php if(isset($_REQUEST['blacki38'])){ echo $_REQUEST['blacki38'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">39</td>
                    <td></td>
                    <td><input type="text" name="blackb39"
                            value="<?php if(isset($_REQUEST['blackb39'])){ echo $_REQUEST['blackb39'] ; } ?>"></td>
                    <td><input type="text" name="blackc39"
                            value="<?php if(isset($_REQUEST['blackc39'])){ echo $_REQUEST['blackc39'] ; } ?>"></td>
                    <td><input type="text" name="blackd39"
                            value="<?php if(isset($_REQUEST['blackd39'])){ echo $_REQUEST['blackd39'] ; } ?>"></td>
                    <td><input type="text" name="blacke39" readonly
                            value="<?php if(isset($blacke39)){ echo $blacke39 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf39" readonly
                            value="<?php if(isset($blackf39)){ echo $blackf39 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg39" readonly
                            value="<?php if(isset($blackg39)){ echo $blackg39 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh39"
                            value="<?php if(isset($_REQUEST['blackh39'])){ echo $_REQUEST['blackh39'] ;}?>"></td>
                    <td><input type="text" name="blacki39"
                            value="<?php if(isset($_REQUEST['blacki39'])){ echo $_REQUEST['blacki39'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">40</td>
                    <td></td>
                    <td><input type="text" name="blackb40"
                            value="<?php if(isset($_REQUEST['blackb40'])){ echo $_REQUEST['blackb40'] ; } ?>"></td>
                    <td><input type="text" name="blackc40"
                            value="<?php if(isset($_REQUEST['blackc40'])){ echo $_REQUEST['blackc40'] ; } ?>"></td>
                    <td><input type="text" name="blackd40"
                            value="<?php if(isset($_REQUEST['blackd40'])){ echo $_REQUEST['blackd40'] ; } ?>"></td>
                    <td><input type="text" name="blacke40" readonly
                            value="<?php if(isset($blacke40)){ echo $blacke40 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf40" readonly
                            value="<?php if(isset($blackf40)){ echo $blackf40 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg40" readonly
                            value="<?php if(isset($blackg40)){ echo $blackg40 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh40"
                            value="<?php if(isset($_REQUEST['blackh40'])){ echo $_REQUEST['blackh40'] ;}?>"></td>
                    <td><input type="text" name="blacki40"
                            value="<?php if(isset($_REQUEST['blacki40'])){ echo $_REQUEST['blacki40'] ;}?>"></td>
                </tr>
                <tr class="blackIronTableFooter">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">41</td>
                    <td></td>
                    <td><input type="text" name="blackb41" readonly
                            value="<?php if(isset($blackb41)){ echo $blackb41 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackc41" readonly
                            value="<?php if(isset($blackc41)){ echo $blackc41 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackd41" readonly
                            value="<?php if(isset($blackd41)){ echo $blackd41 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blacke41" readonly
                            value="<?php if(isset($blacke41)){ echo $blacke41 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackf41" readonly
                            value="<?php if(isset($blackf41)){ echo $blackf41 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackg41" readonly
                            value="<?php if(isset($blackg41)){ echo $blackg41 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blackh41" readonly
                            value="<?php if(isset($blackh41)){ echo $blackh41 ;} else{ echo 0 ;} ?>"></td>
                    <td><input type="text" name="blacki41" readonly
                            value="<?php if(isset($blacki41)){ echo $blacki41 ;} else{ echo 0 ;} ?>"></td>
                </tr>
            </table>
            <input type="submit" value="Refresh" name="black_ironsubmit" class="black_ironsubmit">
        </form>
    </div>
</body>

</html>