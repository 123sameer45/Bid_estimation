<<<<<<< HEAD
<?php 
require  "navbar.html.php" ; 

if(isset($_POST['liner'])) {

    $linerb2 = floatval($_REQUEST['linerb2']) / 100;

    $linerb5 = 2.2 * $linerb2;
    $linerc5 = 1.58 * $linerb2;

    $linerd5 = $_REQUEST['linerd5'];

    $linerb6 = $_REQUEST['linerb6'];
    $linerc6 = $_REQUEST['linerc6'];
    $linerd6 = $_REQUEST['linerd6'];

    $linerb7 = 4.46 * $linerb2;
    $linerc7 = 1.58 * $linerb2;
    $linerd7 = $_REQUEST['linerd7'];

    $linerb10 = 1.3 * $linerb2;
    $linerc10 = 1.2 * $linerb2;
    $linerd10 = $_REQUEST['linerd10'];

    $linerb11 = 2.42 * $linerb2;
    $linerc11 = 1.5 * $linerb2;
    $linerd11 = $_REQUEST['linerd11'];

    // For Liner Array
    $_SESSION['linerd3'] = $_REQUEST['linerd3'];

    $_SESSION['linerb5'] = $linerb5 ;
    $_SESSION['linerc5'] = $linerc5 ;
    $_SESSION['linerd5'] = $linerd5;

    $_SESSION['linerb6'] = $linerb6;
    $_SESSION['linerc6'] = $linerc6;
    $_SESSION['linerd6'] = $linerd6;

    $_SESSION['linerb7'] = $linerb7 ;
    $_SESSION['linerc7'] = $linerc7 ;
    $_SESSION['linerd7'] = $linerd7;

    $_SESSION['linerb10'] = $linerb10;
    $_SESSION['linerc10'] = $linerc10;
    $_SESSION['linerd10'] = $linerd10;

    $_SESSION['linerb11'] = $linerb11;
    $_SESSION['linerc11'] = $linerc11;
    $_SESSION['linerd11'] = $linerd11;

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
 // Array for Liner
$data = [
    'A1' => "LINER",

    'A2' => "Increase",
    'B2' => $_REQUEST['linerb2'],

    'D3' => isset($_SESSION['linerd3']) ? $_SESSION['linerd3'] : '-',

    'B4' => "Material",
    'C4' => "Labor",
    'D4' => "Rubber Insulation",

    'A5' => 'Elastomeric 1" ',
    'B5' => isset($_SESSION['linerb5']) ? $_SESSION['linerb5'] : '-',
    'C5' => isset($_SESSION['linerc5']) ? $_SESSION['linerc5'] : '-',
    'D5' => isset($_SESSION['linerd5']) ? $_SESSION['linerd5'] : '-',  

    'A6' => 'Elastomeric 1.5" ',
    'B6' => isset($_SESSION['linerb6']) ? $_SESSION['linerb6'] : '-',
    'C6' => isset($_SESSION['linerc6']) ? $_SESSION['linerc6'] : '-',
    'D6' => isset($_SESSION['linerd6']) ? $_SESSION['linerd6'] : '-',

    'A7' => 'Elastomeric 2" ',
    'B7' => isset($_SESSION['linerb7']) ? $_SESSION['linerb7'] : '-',
    'C7' => isset($_SESSION['linerc7']) ? $_SESSION['linerc7'] : '-',
    'D7' => isset($_SESSION['linerd7']) ? $_SESSION['linerd7'] : '-',

    'B9' => "Material",
    'C9' => "Labor",
    'D9' => "Fiber Glass Rigid Board",

    'A10' => 'Rigid R300 1" ',
    'B10' => isset($_SESSION['linerb10']) ? $_SESSION['linerb10'] : '-',
    'C10' => isset($_SESSION['linerc10']) ? $_SESSION['linerc10'] : '-',
    'D10' => isset($_SESSION['linerd10']) ? $_SESSION['linerd10'] : '-',

    'A11' => 'Rigid R300 2" ',
    'B11' => isset($_SESSION['linerb11']) ? $_SESSION['linerb11'] : '-',
    'C11' => isset($_SESSION['linerc11']) ? $_SESSION['linerc11'] : '-',
    'D11' => isset($_SESSION['linerd11']) ? $_SESSION['linerd11'] : '-',
]; 
         

    $filename = 'liner'; // Set your desired base filename

    generateExcel($data, $filename);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liner</title>
    
    <link rel="stylesheet" href="style.css">
   
    <style>
        .linersubmit{
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
    <table class="table1" border="1" >
        <tr style="text-align: center;position:sticky;top:0; background-color:white;">
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">1</td>
            <th colspan="4">LINER</th>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">2</td>
            <td>Increase</td>
            <td><input type="text" name="linerb2" id="" value="<?php if(isset($_REQUEST['linerb2'])){ echo $_REQUEST['linerb2'] ;} ?>">%</td>
            <td colspan="2"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">3</td>
            <td colspan="3"></td>
            <td><input type="date"  name="linerd3" value="<?php if(isset($_REQUEST['linerd3'])){ echo $_REQUEST['linerd3'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">4</td>
            <td></td>
            <td><b>Material</b></td>
            <td><b>Labor</b></td>
            <td><b>Rubber Insualtion</b></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">5</td>
            <td>elastomeric 1"</td>
            <td><input type="text" readonly name="linerb5" id="" value="<?php if(isset($linerb5)){ echo $linerb5 ;} ?>"></td>
            <td><input type="text" readonly name="linerc5" id="" value="<?php if(isset($linerc5)){ echo $linerc5 ;} ?>"></td>
            <td><input type="text"  name="linerd5" value="<?php if(isset($_REQUEST_['linerd5'])){ echo $_REQUEST_['linerd5'] ;} else { echo "K-Flex, Armacel, Aeroflex" ;} ?>" id=""></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">6</td>
            <td>elastomeric 1.5"</td>
            <td><input type="text" name="linerb6" id="" value="<?php if(isset($_REQUEST['linerb6'])){ echo $_REQUEST['linerb6'] ;} else{ echo 'N/A' ;} ?>"></td>
            <td><input type="text" name="linerc6" id="" value="<?php if(isset($_REQUEST['linerc6'])){ echo $_REQUEST['linerc6'] ;} else{ echo 'N/A' ;} ?>"></td>
            <td><input type="text" name="linerd6" value="<?php if(isset($_REQUEST_['linerd6'])){ echo $_REQUEST_['linerd6'] ;} else { echo "K-Flex, Armacel, Aeroflex" ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">7</td>
            <td>elastomeric 2"</td>
            <td><input type="text" readonly name="linerb7" id="" value="<?php if(isset($linerb7)){ echo $linerb7 ;} ?>"></td>
            <td><input type="text" readonly name="linerc7" id="" value="<?php if(isset($linerc7)){ echo $linerc7 ;} ?>"></td>
            <td><input type="text"  name="linerd7" value="<?php if(isset($_REQUEST_['linerd7'])){ echo $_REQUEST_['linerd7'] ;} else { echo "K-Flex, Armacel, Aeroflex" ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">9</td>
            <td></td>
            <td><b>Material</b></td>
            <td><b>Labor</b></td>
            <td><b>Fiber Glass Rigid Board</b></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">10</td>
            <td>Rigid R300 1"</td>
            <td><input type="text" readonly name="linerb10" id="" value="<?php if(isset($linerb10)){ echo $linerb10 ;} ?>"></td>
            <td><input type="text" readonly name="linerc10" id="" value="<?php if(isset($linerc10)){ echo $linerc10 ;} ?>"></td>
            <td><input type="text" name="linerd10" value="<?php if(isset($_REQUEST_['linerd10'])){ echo $_REQUEST_['linerd10'] ;} else { echo "Permacote Linacoustic R-300" ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">11</td>
            <td>Rigid R300 2"</td>
            <td><input type="text" readonly name="linerb11" id="" value="<?php if(isset($linerb11)){ echo $linerb11 ;} ?>"></td>
            <td><input type="text" readonly name="linerc11" id="" value="<?php if(isset($linerc11)){ echo $linerc11 ;} ?>"></td>
            <td><input type="text" name="linerd11" value="<?php if(isset($_REQUEST_['linerd11'])){ echo $_REQUEST_['linerd11'] ;} else { echo "Permacote Linacoustic R-300" ;} ?>"></td>
        </tr>
    </table>
    <input type="submit" class="linersubmit" name="liner" value="Refresh">
    <?php if(isset($_REQUEST['liner'])) { ?>
        <input type="submit" value="Download Liner" class="downloadexcel" name="downloadexcel">
            <?php  } ?>
    </form>
    </div>
</body>
=======
<?php 
require  "navbar.html.php" ; 

if(isset($_POST['liner'])) {

    $linerb2 = floatval($_REQUEST['linerb2']) / 100;

    $linerb5 = 2.2 * $linerb2;
    $linerc5 = 1.58 * $linerb2;

    $linerd5 = $_REQUEST['linerd5'];

    $linerb6 = $_REQUEST['linerb6'];
    $linerc6 = $_REQUEST['linerc6'];
    $linerd6 = $_REQUEST['linerd6'];

    $linerb7 = 4.46 * $linerb2;
    $linerc7 = 1.58 * $linerb2;
    $linerd7 = $_REQUEST['linerd7'];

    $linerb10 = 1.3 * $linerb2;
    $linerc10 = 1.2 * $linerb2;
    $linerd10 = $_REQUEST['linerd10'];

    $linerb11 = 2.42 * $linerb2;
    $linerc11 = 1.5 * $linerb2;
    $linerd11 = $_REQUEST['linerd11'];

    // For Liner Array
    $_SESSION['linerd3'] = $_REQUEST['linerd3'];

    $_SESSION['linerb5'] = $linerb5 ;
    $_SESSION['linerc5'] = $linerc5 ;
    $_SESSION['linerd5'] = $linerd5;

    $_SESSION['linerb6'] = $linerb6;
    $_SESSION['linerc6'] = $linerc6;
    $_SESSION['linerd6'] = $linerd6;

    $_SESSION['linerb7'] = $linerb7 ;
    $_SESSION['linerc7'] = $linerc7 ;
    $_SESSION['linerd7'] = $linerd7;

    $_SESSION['linerb10'] = $linerb10;
    $_SESSION['linerc10'] = $linerc10;
    $_SESSION['linerd10'] = $linerd10;

    $_SESSION['linerb11'] = $linerb11;
    $_SESSION['linerc11'] = $linerc11;
    $_SESSION['linerd11'] = $linerd11;

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
 // Array for Liner
$data = [
    'A1' => "LINER",

    'A2' => "Increase",
    'B2' => $_REQUEST['linerb2'],

    'D3' => isset($_SESSION['linerd3']) ? $_SESSION['linerd3'] : '-',

    'B4' => "Material",
    'C4' => "Labor",
    'D4' => "Rubber Insulation",

    'A5' => 'Elastomeric 1" ',
    'B5' => isset($_SESSION['linerb5']) ? $_SESSION['linerb5'] : '-',
    'C5' => isset($_SESSION['linerc5']) ? $_SESSION['linerc5'] : '-',
    'D5' => isset($_SESSION['linerd5']) ? $_SESSION['linerd5'] : '-',  

    'A6' => 'Elastomeric 1.5" ',
    'B6' => isset($_SESSION['linerb6']) ? $_SESSION['linerb6'] : '-',
    'C6' => isset($_SESSION['linerc6']) ? $_SESSION['linerc6'] : '-',
    'D6' => isset($_SESSION['linerd6']) ? $_SESSION['linerd6'] : '-',

    'A7' => 'Elastomeric 2" ',
    'B7' => isset($_SESSION['linerb7']) ? $_SESSION['linerb7'] : '-',
    'C7' => isset($_SESSION['linerc7']) ? $_SESSION['linerc7'] : '-',
    'D7' => isset($_SESSION['linerd7']) ? $_SESSION['linerd7'] : '-',

    'B9' => "Material",
    'C9' => "Labor",
    'D9' => "Fiber Glass Rigid Board",

    'A10' => 'Rigid R300 1" ',
    'B10' => isset($_SESSION['linerb10']) ? $_SESSION['linerb10'] : '-',
    'C10' => isset($_SESSION['linerc10']) ? $_SESSION['linerc10'] : '-',
    'D10' => isset($_SESSION['linerd10']) ? $_SESSION['linerd10'] : '-',

    'A11' => 'Rigid R300 2" ',
    'B11' => isset($_SESSION['linerb11']) ? $_SESSION['linerb11'] : '-',
    'C11' => isset($_SESSION['linerc11']) ? $_SESSION['linerc11'] : '-',
    'D11' => isset($_SESSION['linerd11']) ? $_SESSION['linerd11'] : '-',
]; 
         

    $filename = 'liner'; // Set your desired base filename

    generateExcel($data, $filename);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liner</title>
    
    <link rel="stylesheet" href="style.css">
   
    <style>
        .linersubmit{
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
    <table class="table1" border="1" >
        <tr style="text-align: center;position:sticky;top:0; background-color:white;">
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
        </tr>
        <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">1</td>
            <th colspan="4">LINER</th>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">2</td>
            <td>Increase</td>
            <td><input type="text" name="linerb2" id="" value="<?php if(isset($_REQUEST['linerb2'])){ echo $_REQUEST['linerb2'] ;} ?>">%</td>
            <td colspan="2"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">3</td>
            <td colspan="3"></td>
            <td><input type="date"  name="linerd3" value="<?php if(isset($_REQUEST['linerd3'])){ echo $_REQUEST['linerd3'] ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">4</td>
            <td></td>
            <td><b>Material</b></td>
            <td><b>Labor</b></td>
            <td><b>Rubber Insualtion</b></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">5</td>
            <td>elastomeric 1"</td>
            <td><input type="text" readonly name="linerb5" id="" value="<?php if(isset($linerb5)){ echo $linerb5 ;} ?>"></td>
            <td><input type="text" readonly name="linerc5" id="" value="<?php if(isset($linerc5)){ echo $linerc5 ;} ?>"></td>
            <td><input type="text"  name="linerd5" value="<?php if(isset($_REQUEST_['linerd5'])){ echo $_REQUEST_['linerd5'] ;} else { echo "K-Flex, Armacel, Aeroflex" ;} ?>" id=""></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">6</td>
            <td>elastomeric 1.5"</td>
            <td><input type="text" name="linerb6" id="" value="<?php if(isset($_REQUEST['linerb6'])){ echo $_REQUEST['linerb6'] ;} else{ echo 'N/A' ;} ?>"></td>
            <td><input type="text" name="linerc6" id="" value="<?php if(isset($_REQUEST['linerc6'])){ echo $_REQUEST['linerc6'] ;} else{ echo 'N/A' ;} ?>"></td>
            <td><input type="text" name="linerd6" value="<?php if(isset($_REQUEST_['linerd6'])){ echo $_REQUEST_['linerd6'] ;} else { echo "K-Flex, Armacel, Aeroflex" ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">7</td>
            <td>elastomeric 2"</td>
            <td><input type="text" readonly name="linerb7" id="" value="<?php if(isset($linerb7)){ echo $linerb7 ;} ?>"></td>
            <td><input type="text" readonly name="linerc7" id="" value="<?php if(isset($linerc7)){ echo $linerc7 ;} ?>"></td>
            <td><input type="text"  name="linerd7" value="<?php if(isset($_REQUEST_['linerd7'])){ echo $_REQUEST_['linerd7'] ;} else { echo "K-Flex, Armacel, Aeroflex" ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">9</td>
            <td></td>
            <td><b>Material</b></td>
            <td><b>Labor</b></td>
            <td><b>Fiber Glass Rigid Board</b></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">10</td>
            <td>Rigid R300 1"</td>
            <td><input type="text" readonly name="linerb10" id="" value="<?php if(isset($linerb10)){ echo $linerb10 ;} ?>"></td>
            <td><input type="text" readonly name="linerc10" id="" value="<?php if(isset($linerc10)){ echo $linerc10 ;} ?>"></td>
            <td><input type="text" name="linerd10" value="<?php if(isset($_REQUEST_['linerd10'])){ echo $_REQUEST_['linerd10'] ;} else { echo "Permacote Linacoustic R-300" ;} ?>"></td>
        </tr>
        <tr>
        <td style="text-align: center;position:sticky;left:0; background-color:white;">11</td>
            <td>Rigid R300 2"</td>
            <td><input type="text" readonly name="linerb11" id="" value="<?php if(isset($linerb11)){ echo $linerb11 ;} ?>"></td>
            <td><input type="text" readonly name="linerc11" id="" value="<?php if(isset($linerc11)){ echo $linerc11 ;} ?>"></td>
            <td><input type="text" name="linerd11" value="<?php if(isset($_REQUEST_['linerd11'])){ echo $_REQUEST_['linerd11'] ;} else { echo "Permacote Linacoustic R-300" ;} ?>"></td>
        </tr>
    </table>
    <input type="submit" class="linersubmit" name="liner" value="Refresh">
    <?php if(isset($_REQUEST['liner'])) { ?>
        <input type="submit" value="Download Liner" class="downloadexcel" name="downloadexcel">
            <?php  } ?>
    </form>
    </div>
</body>
>>>>>>> afd24e9 (Sameer)
</html>