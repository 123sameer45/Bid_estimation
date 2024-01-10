<?php 
require  "navbar.html.php" ; 

if (isset($_POST['mansubmit'])) {

    $mana5 = floatval(isset($_SESSION['estimatem6']) ? $_SESSION['estimatem6'] : '-') / 60 ;
    $mana6 = $mana5 * 0.1;
    $mana7 = $mana5 - $mana6;

    $mana10 = array_sum([floatval(isset($_SESSION['estimatei8']) ? $_SESSION['estimatei8'] : '-'),
                         floatval(isset($_SESSION['estimatei9']) ? $_SESSION['estimatei9'] : '-'),
                         floatval(isset($_SESSION['estimatei10']) ? $_SESSION['estimatei10'] : '-'),
                         floatval(isset($_SESSION['estimatei11']) ? $_SESSION['estimatei11'] : '-'),
                         floatval(isset($_SESSION['estimatei12']) ? $_SESSION['estimatei12'] : '-'),
                         floatval(isset($_SESSION['estimatei13']) ? $_SESSION['estimatei13'] : '-'),
                         floatval(isset($_SESSION['estimatei14']) ? $_SESSION['estimatei14'] : '-'),
                         floatval(isset($_SESSION['estimatei15']) ? $_SESSION['estimatei15'] : '-'),
                         floatval(isset($_SESSION['estimatei16']) ? $_SESSION['estimatei16'] : '-'),
                         floatval(isset($_SESSION['estimatei17']) ? $_SESSION['estimatei17'] : '-'),
                         floatval(isset($_SESSION['estimatei18']) ? $_SESSION['estimatei18'] : '-'),
                         floatval(isset($_SESSION['estimatei19']) ? $_SESSION['estimatei19'] : '-'),
                         floatval(isset($_SESSION['estimatei20']) ? $_SESSION['estimatei20'] : '-'),
                         floatval(isset($_SESSION['estimatei21']) ? $_SESSION['estimatei21'] : '-'),
                         floatval(isset($_SESSION['estimatei22']) ? $_SESSION['estimatei22'] : '-'),
                         floatval(isset($_SESSION['estimatei23']) ? $_SESSION['estimatei23'] : '-'),
                         floatval(isset($_SESSION['estimatei24']) ? $_SESSION['estimatei24'] : '-'),
                         floatval(isset($_SESSION['estimatei25']) ? $_SESSION['estimatei25'] : '-'),
                         floatval(isset($_SESSION['estimatei26']) ? $_SESSION['estimatei26'] : '-'),
                         floatval(isset($_SESSION['estimatei27']) ? $_SESSION['estimatei27'] : '-'),
                         floatval(isset($_SESSION['estimatei28']) ? $_SESSION['estimatei28'] : '-'),
                         floatval(isset($_SESSION['estimatei29']) ? $_SESSION['estimatei29'] : '-'),
                         floatval(isset($_SESSION['estimatei30']) ? $_SESSION['estimatei30'] : '-'),
                         floatval(isset($_SESSION['estimatei31']) ? $_SESSION['estimatei31'] : '-'),
                         floatval(isset($_SESSION['estimatei32']) ? $_SESSION['estimatei32'] : '-'),
                         floatval(isset($_SESSION['estimatei33']) ? $_SESSION['estimatei33'] : '-'),
                         floatval(isset($_SESSION['estimatei34']) ? $_SESSION['estimatei34'] : '-'),
                         floatval(isset($_SESSION['estimatei35']) ? $_SESSION['estimatei35'] : '-'),
                         floatval(isset($_SESSION['estimatei36']) ? $_SESSION['estimatei36'] : '-'),
                         floatval(isset($_SESSION['estimatei37']) ? $_SESSION['estimatei37'] : '-'),
                         floatval(isset($_SESSION['estimatei38']) ? $_SESSION['estimatei38'] : '-'),
                         floatval(isset($_SESSION['estimatei39']) ? $_SESSION['estimatei39'] : '-'),
                         floatval(isset($_SESSION['estimatei40']) ? $_SESSION['estimatei40'] : '-'),
                         floatval(isset($_SESSION['estimatei41']) ? $_SESSION['estimatei41'] : '-'),
                         floatval(isset($_SESSION['estimatei42']) ? $_SESSION['estimatei42'] : '-'),
                         floatval(isset($_SESSION['estimatei43']) ? $_SESSION['estimatei43'] : '-'),
                         floatval(isset($_SESSION['estimatei44']) ? $_SESSION['estimatei44'] : '-'),
                         floatval(isset($_SESSION['estimatei45']) ? $_SESSION['estimatei45'] : '-'),
                         floatval(isset($_SESSION['estimatei46']) ? $_SESSION['estimatei46'] : '-'),
                         floatval(isset($_SESSION['estimatei47']) ? $_SESSION['estimatei47'] : '-'),
                         floatval(isset($_SESSION['estimatei48']) ? $_SESSION['estimatei48'] : '-'),
                         floatval(isset($_SESSION['estimatei49']) ? $_SESSION['estimatei49'] : '-'),
                         floatval(isset($_SESSION['estimatei50']) ? $_SESSION['estimatei50'] : '-'),
                         floatval(isset($_SESSION['estimatei51']) ? $_SESSION['estimatei51'] : '-'),
                         floatval(isset($_SESSION['estimatei52']) ? $_SESSION['estimatei52'] : '-'),
                         floatval(isset($_SESSION['estimatei53']) ? $_SESSION['estimatei53'] : '-'),
                         floatval(isset($_SESSION['estimatei54']) ? $_SESSION['estimatei54'] : '-'),
                         floatval(isset($_SESSION['estimatei55']) ? $_SESSION['estimatei55'] : '-'),
                         floatval(isset($_SESSION['estimatei56']) ? $_SESSION['estimatei56'] : '-'),
                         floatval(isset($_SESSION['estimatei57']) ? $_SESSION['estimatei57'] : '-'),
                         floatval(isset($_SESSION['estimatei58']) ? $_SESSION['estimatei58'] : '-'),
                         floatval(isset($_SESSION['estimatei59']) ? $_SESSION['estimatei59'] : '-'),
                         floatval(isset($_SESSION['estimatei60']) ? $_SESSION['estimatei60'] : '-'),
                         floatval(isset($_SESSION['estimatei61']) ? $_SESSION['estimatei61'] : '-'),
                         floatval(isset($_SESSION['estimatei62']) ? $_SESSION['estimatei62'] : '-'),
                         floatval(isset($_SESSION['estimatei63']) ? $_SESSION['estimatei63'] : '-'),
                         floatval(isset($_SESSION['estimatei64']) ? $_SESSION['estimatei64'] : '-'),
                         floatval(isset($_SESSION['estimatei65']) ? $_SESSION['estimatei65'] : '-'),
                         floatval(isset($_SESSION['estimatei66']) ? $_SESSION['estimatei66'] : '-'),
                         floatval(isset($_SESSION['estimatei67']) ? $_SESSION['estimatei67'] : '-'),
                         floatval(isset($_SESSION['estimatei68']) ? $_SESSION['estimatei68'] : '-'),
                         floatval(isset($_SESSION['estimatei69']) ? $_SESSION['estimatei69'] : '-'),
                         floatval(isset($_SESSION['estimatei70']) ? $_SESSION['estimatei70'] : '-'),
                         floatval(isset($_SESSION['estimatei71']) ? $_SESSION['estimatei71'] : '-'),
                         floatval(isset($_SESSION['estimatei72']) ? $_SESSION['estimatei72'] : '-'),
                         floatval(isset($_SESSION['estimatei73']) ? $_SESSION['estimatei73'] : '-'),
                         floatval(isset($_SESSION['estimatei74']) ? $_SESSION['estimatei74'] : '-'),
                         floatval(isset($_SESSION['estimatei75']) ? $_SESSION['estimatei75'] : '-'),
                         floatval(isset($_SESSION['estimatei76']) ? $_SESSION['estimatei76'] : '-'),
                         floatval(isset($_SESSION['estimatei77']) ? $_SESSION['estimatei77'] : '-'),
                         floatval(isset($_SESSION['estimatei78']) ? $_SESSION['estimatei78'] : '-'),
                         floatval(isset($_SESSION['estimatei79']) ? $_SESSION['estimatei79'] : '-'),
                         floatval(isset($_SESSION['estimatei80']) ? $_SESSION['estimatei80'] : '-'),
                         floatval(isset($_SESSION['estimatei81']) ? $_SESSION['estimatei81'] : '-'),
                         floatval(isset($_SESSION['estimatei82']) ? $_SESSION['estimatei82'] : '-'),
                         floatval(isset($_SESSION['estimatei83']) ? $_SESSION['estimatei83'] : '-'),
                         floatval(isset($_SESSION['estimatei84']) ? $_SESSION['estimatei84'] : '-'),
                         floatval(isset($_SESSION['estimatei85']) ? $_SESSION['estimatei85'] : '-'),
                         floatval(isset($_SESSION['estimatei86']) ? $_SESSION['estimatei86'] : '-'),
                         floatval(isset($_SESSION['estimatei87']) ? $_SESSION['estimatei87'] : '-'),
                         floatval(isset($_SESSION['estimatei88']) ? $_SESSION['estimatei88'] : '-'),
                         floatval(isset($_SESSION['estimatei89']) ? $_SESSION['estimatei89'] : '-'),
                         floatval(isset($_SESSION['estimatei90']) ? $_SESSION['estimatei90'] : '-')]);

    $mana12 = floatval(isset($_SESSION['estimatei79']) ? $_SESSION['estimatei79'] : '-') * 0.5;
    $mana11 = $mana10 - (array_sum([ floatval(isset($_SESSION['estimatei78']) ? $_SESSION['estimatei78'] : '-') , floatval(isset($_SESSION['estimatei80']) ? $_SESSION['estimatei80'] : '-') ,
                                     floatval(isset($_SESSION['estimatei84']) ? $_SESSION['estimatei84'] : '-') , floatval(isset($_SESSION['estimatei86']) ? $_SESSION['estimatei86'] : '-')]) + $mana12);
    $mana13 = $mana11 - floatval(isset($_SESSION['estimatel10']) ? $_SESSION['estimatel10'] : '-');
    $mana14 = $mana13 / floatval(isset($_SESSION['estimatee26']) ? $_SESSION['estimatee26'] : 1);
    $mana15 = $mana14 * 0.1;
    $mana16 = $mana14 - $mana15;

    $mana19 = array_sum([floatval(isset($_SESSION['estimateh44']) ? $_SESSION['estimateh44'] : '-'),
                         floatval(isset($_SESSION['estimateh45']) ? $_SESSION['estimateh45'] : '-'),
                         floatval(isset($_SESSION['estimateh46']) ? $_SESSION['estimateh46'] : '-'),
                         floatval(isset($_SESSION['estimateh47']) ? $_SESSION['estimateh47'] : '-'),
                         floatval(isset($_SESSION['estimateh48']) ? $_SESSION['estimateh48'] : '-'),
                         floatval(isset($_SESSION['estimateh49']) ? $_SESSION['estimateh49'] : '-')]);
    $mana20 = $mana19 - ($mana19 * 0.2);

    $estimatel10 = floatval(isset($_SESSION['jobinfoe26']) ? $_SESSION['jobinfoe26'] : '-');
    $mana23 = $estimatel10 * floatval($_REQUEST['mang23']);
    $mana24 = $estimatel10 - $mana23;

    // for manhours array
    $_SESSION['mana6'] = $mana6;
    $_SESSION['mana7'] = $mana7;
    $_SESSION['mana10'] = $mana10;
    $_SESSION['mana11'] = $mana11;
    $_SESSION['mana12'] = $mana12;
    $_SESSION['mana13'] = $mana13;
    $_SESSION['mana14'] = $mana14;
    $_SESSION['mana15'] = $mana15;
    $_SESSION['mana16'] = $mana16;
    $_SESSION['mana19'] = $mana19;
    $_SESSION['mana20'] = $mana20;
    $_SESSION['mana23'] = $mana23;
    $_SESSION['mana24'] = $mana24;


}

?>

<?php
// Include PhpSpreadsheet autoload
require 'vendor/autoload.php';

// Function to generate Excel file
function generateExcel($data, $filename) {
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Assuming the data array has keys corresponding to cell references
    foreach ($data as $cellReference => $cellValue) {
        $sheet->setCellValue($cellReference, $cellValue);
    }

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    
    // Use a timestamp to make the file name unique
    $timestamp = date('YmdHis');
    $fullFilename = "C:\\Users\\work\\Downloads\\{$filename}_{$timestamp}.xlsx";
    
    $writer->save($fullFilename);
    
    echo "<script>alert('Check your download folder. The file is downloaded as {$filename}_{$timestamp}.xlsx');</script>";
}

if (isset($_POST['downloadexcel'])) {
    // Assuming the form fields have names corresponding to cell references
 // Array for man hours
$data = [
    'A1' => "Man Hours",

    'A3' => "SHOP HOURS",

    'A5' => isset($_SESSION['estimatem6']) ? $_SESSION['estimatem6'] : '-',
    'D5' => "Hours",

    'A6' => isset($_SESSION['mana6']) ? $_SESSION['mana6'] : '-',
    'D6' => "Contingency Hours",

    'A7' => isset($_SESSION['mana7']) ? $_SESSION['mana7'] : '-',
    'D7' => "Shop Hours Total",

    'A9' => "FIELD HOURS",

    'A10' => isset($_SESSION['mana10']) ? $_SESSION['mana10'] : '-',

    'A11' => isset($_SESSION['mana11']) ? $_SESSION['mana11'] : '-',

    'A12' => isset($_SESSION['mana12']) ? $_SESSION['mana12'] : '-',
    'D12' => "Clean-up",

    'A13' => isset($_SESSION['mana13']) ? $_SESSION['mana13'] : '-',
    
    'A14' => isset($_SESSION['mana14']) ? $_SESSION['mana14'] : '-',
    'D14' => "Hours",

    'A15' => isset($_SESSION['mana15']) ? $_SESSION['mana15'] : '-',
    'D15' => "Contingency Hours",

    'A16' => isset($_SESSION['mana16']) ? $_SESSION['mana16'] : '-',
    'D16' => "Field Hours Total",

    'A18' => "TO LOG BID ESTIMATE ON DUCTWORK MATERIAL ONLY",

    'A19' => isset($_SESSION['mana19']) ? $_SESSION['mana19'] : '-',

    'A20' => isset($_SESSION['mana20']) ? $_SESSION['mana20'] : '-',
    'D20' => "Cost of Material Fab",

    'A22' => "LOG BID ESTIMATE ON DUCTWORK LABOR FABRICATION ONLY (NO FIELD) ",

    'A23' => isset($_SESSION['mana23']) ? $_SESSION['mana23'] : '-',
    'G23' => $_REQUEST['mang23'],

    'A24' => isset($_SESSION['mana24']) ? $_SESSION['mana24'] : '-',
    'D24' => "Cost of Labor Fab",
];
        
         

    $filename = 'man_hours'; // Set your desired base filename

    generateExcel($data, $filename);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Man Hours</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .mansubmit {
        padding: 10px 20px;
        display: inline-block;
        margin: auto;
        border-radius: 50px !important;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset;
        background: linear-gradient(-45deg, #037ffc, #0b11bf);
        color: white;
        text-align: center;
        line-height: normal;
        font-family: 'Raleway', sans-serif;
        font-size: 1em;
        font-weight: bold;
        text-decoration: none;
        text-shadow: 0 1px 0 rgba(255, 255, 255, .8);
        vertical-align: middle;
        outline: none;
        position: fixed;
        bottom: 10px;
        right: 10px;
    }
</style>
<body>
    <div class="section" download>
        <form action="" method="POST">
            <table class="table1" border="1" style="border-collapse: collapse;">
                <tr style="text-align: center;position:sticky;top:0; background-color:white;">
                    <td style="text-align: center;position:sticky;left:0; background-color:white;"></td>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>E</td>
                    <td>F</td>
                    <td>G</td>
                </tr>
                <tr>
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">1</td>
                    <th colspan="4">Man Hours</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">2</td>
                    <td colspan="4"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">3</td>
                    <th colspan="4">Shop Hours</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: center;position:sticky;left:0; background-color:white;">4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">5</td>
                    <td colspan="2"><input type="text" readonly name="mana5" id="" value="<?php if(isset($mana5)){ echo $mana5 ;}?>"></td>
                    <td colspan="2">Hours</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">6</td>
                    <td colspan="2"><input type="text" readonly name="mana6" id="" value="<?php if(isset($mana6)){ echo $mana6 ;}?>"></td>
                    <td colspan="2">Contingency Hours</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">7</td>
                    <td colspan="2"><input type="text" readonly name="mana7" id="" value="<?php if(isset($mana7)){ echo $mana7 ;}?>"></td>
                    <td colspan="2">Shop Hours Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">9</td>
                    <th colspan="4">Field Hours</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">10</td>
                    <td colspan="2"><input type="text" readonly name="mana10" id="" value="<?php if(isset($mana10)){ echo $mana10 ;}?>"></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">11</td>
                    <td colspan="2"><input type="text" readonly name="mana11" id="" value="<?php if(isset($mana11)){ echo $mana11 ;}?>"></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">12</td>
                    <td colspan="2"><input type="text" readonly name="mana12" id="" value="<?php if(isset($mana12)){ echo $mana12 ;}?>"></td>
                    <td colspan="2">Clean-up</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">13</td>
                    <td colspan="2"><input type="text" readonly name="mana13" id="" value="<?php if(isset($mana13)){ echo $mana13 ;}?>"></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">14</td>
                    <td colspan="2"><input type="text" readonly name="mana14" id="" value="<?php if(isset($mana14)){ echo $mana14 ;}?>"></td>
                    <td colspan="2">Hours</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">15</td>
                    <td colspan="2"><input type="text" readonly name="mana15" id="" value="<?php if(isset($mana15)){ echo $mana15 ;}?>"></td>
                    <td colspan="2">Contingency Hours</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">16</td>
                    <td colspan="2"><input type="text" readonly name="mana16" id="" value="<?php if(isset($mana16)){ echo $mana16 ;}?>"></td>
                    <td colspan="2">Field Hours Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">17</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">18</td>
                    <th colspan="4" name="man18">TO LOG BID ESTIMATE ON DUCTWORK MATERIAL ONLY</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">19</td>
                    <td colspan="2"><input type="text" readonly name="mana19" id="" value="<?php if(isset($mana19)){ echo $mana19 ;}?>"></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">20</td>
                    <td colspan="2"><input type="text" readonly name="mana20" id="" value="<?php if(isset($mana20)){ echo $mana20 ;}?>"></td>
                    <td colspan="2">Cost of Material Fab</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">21</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">22</td>
                    <th colspan="4" name="mana22">LOG BID ESTIMATE ON DUCTWORK LABOR FABRICATION ONLY (NO FIELD)</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">23</td>
                    <td colspan="2"><input type="text" readonly name="mana23" class="custom-input" value="<?php if(isset($mana23)){ echo $mana23 ;} ?>"></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                   
                    <td><input type="text" name="mang23"  class="custom-input" value="<?php if(isset($_REQUEST['mang23'])){ echo $_REQUEST['mang23'] ;} ?>"></td>
                </tr>
                <tr>
                <td style="text-align: center;position:sticky;left:0; background-color:white;">24</td>
                    <td colspan="2"><input type="text" readonly name="mana24" id="custom-input" value="<?php if(isset($mana24)){ echo $mana24 ;} ?>"></td>
                    <td colspan="2">Cost of Labor Fab</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <input type="submit" name="mansubmit" value='Refresh' class="mansubmit">
            <?php if(isset($_REQUEST['mansubmit'])) { ?>
            <input type="submit" value="Download Man Hours" class="downloadexcel" name="downloadexcel">
            <?php  } ?>
        </form>
    </div>
</body>

</html>
