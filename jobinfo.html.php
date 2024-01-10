<?php 
// require  "navbar.html.php" ;

// if(isset($_POST['jobinfo'])){

// $jobinfoe24 = round((floatval($_REQUEST['jobinfoe23']) / 7) , 1) ;
// $_SESSION['jobinfoe24'] = $jobinfoe24;

// $_SESSION['jobinfod6'] = $_REQUEST['jobinfod6'];
// $_SESSION['jobinfoe13'] = $_REQUEST['jobinfoe13'];
// $_SESSION['jobinfoe14'] = $_REQUEST['jobinfoe14'];
// $_SESSION['jobinfoe15'] = $_REQUEST['jobinfoe15'];
// $_SESSION['jobinfoe16'] = $_REQUEST['jobinfoe16'];
// $_SESSION['jobinfoe17'] = $_REQUEST['jobinfoe17'];

// $_SESSION['jobinfoh13'] = floatval($_REQUEST['jobinfoh13']);
// $_SESSION['jobinfoh14'] = floatval($_REQUEST['jobinfoh14']);
// $_SESSION['jobinfoh15'] = floatval($_REQUEST['jobinfoh15']);
// $_SESSION['jobinfoh16'] = floatval($_REQUEST['jobinfoh16']);

// $_SESSION['jobinfoi13'] = floatval($_REQUEST['jobinfoi13']);
// $_SESSION['jobinfoi14'] = floatval($_REQUEST['jobinfoi14']);

// $_SESSION['jobinfoe18'] = $_REQUEST['jobinfoe18'];
// $_SESSION['jobinfoe19'] = $_REQUEST['jobinfoe19'];
// $_SESSION['jobinfoe20'] = $_REQUEST['jobinfoe20'];
// $_SESSION['jobinfoe21'] = $_REQUEST['jobinfoe21'];
// $_SESSION['jobinfoe22'] = $_REQUEST['jobinfoe22'];
// $_SESSION['jobinfoe26'] = floatval($_REQUEST['jobinfoe26']);
// $_SESSION['jobinfoe28'] = $_REQUEST['jobinfoe28'];


// }

?>
<?php require  "navbar.html.php" ;

if(isset($_POST['jobinfo'])){

$jobinfoe24 = floatval($_REQUEST['jobinfoe23']) / 7 ;
$_SESSION['jobinfoe24'] = $jobinfoe24;

$_SESSION['jobinfod6'] = $_REQUEST['jobinfod6'];
$_SESSION['jobinfoe13'] = $_REQUEST['jobinfoe13'];
$_SESSION['jobinfoe14'] = $_REQUEST['jobinfoe14'];
$_SESSION['jobinfoe15'] = $_REQUEST['jobinfoe15'];
$_SESSION['jobinfoe16'] = $_REQUEST['jobinfoe16'];
$_SESSION['jobinfoe17'] = $_REQUEST['jobinfoe17'];

$_SESSION['jobinfoh13'] = floatval($_REQUEST['jobinfoh13']);
$_SESSION['jobinfoh14'] = floatval($_REQUEST['jobinfoh14']);
$_SESSION['jobinfoh15'] = floatval($_REQUEST['jobinfoh15']);
$_SESSION['jobinfoh16'] = floatval($_REQUEST['jobinfoh16']);

$_SESSION['jobinfoi13'] = floatval($_REQUEST['jobinfoi13']);
$_SESSION['jobinfoi14'] = floatval($_REQUEST['jobinfoi14']);

$_SESSION['jobinfoe18'] = $_REQUEST['jobinfoe18'];
$_SESSION['jobinfoe19'] = $_REQUEST['jobinfoe19'];
$_SESSION['jobinfoe20'] = $_REQUEST['jobinfoe20'];
$_SESSION['jobinfoe21'] = $_REQUEST['jobinfoe21'];
$_SESSION['jobinfoe22'] = $_REQUEST['jobinfoe22'];
$_SESSION['jobinfoe26'] = floatval($_REQUEST['jobinfoe26']);
$_SESSION['jobinfoe28'] = $_REQUEST['jobinfoe28'];


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
    $data = [
        
      'D6' => $_REQUEST['jobinfod6'],
      'E6' => "small change where I have added a new cost code for Crane and Equipment rental",
  
      'D7' => "REVISION FORM 9/1/2023",
      'E7' => "Added date calculator, added 2' duct for indoor Vs Outdoor & siesmic - cleaned up the colors on the estimate sheet",
  
      'D8' => "REVISION FORM 2/1/2023",
      'E8' => "Updated drop down list for all the vendors and subcontractors",
  
      'B9' => "Previous Version",
      'D9' => "REVISION FORM 1/26/2023",
      'E9' => "We have added the Budget sheet, fixed the startup cost for the RTU, Auto add for the RTU and the PE",
  
      'D10' => "REVISION FORM 11/07/2022",
      'E10' => "Moderate revision to change some formula on the Specified Vendor sheet",
  
      'D11' => "REVISION FORM 10/13/2022",
  
      'D12' => "West Tech Mechanical Estimate Sheet",
      'H12' => "3-10 TON",
      'I12' => "10 and above",
      
      'D13' => "JOB NAME:",
      'E13' => $_REQUEST['jobinfoe13'],
      'G13' => "#RTU",
      'H13' => $_REQUEST['jobinfoh13'],
      'I13' => $_REQUEST['jobinfoi13'],
  
      'D14' => "LOCATION:",
      'E14' => $_REQUEST['jobinfoe14'],
      'G14' => "#RTU with PE",
      'H14' => $_REQUEST['jobinfoh14'],
      'I14' => $_REQUEST['jobinfoi14'],
  
      'D15' => "DISTANCE TO SITE:",
      'E15' => $_REQUEST['jobinfoe15'],
      'G15' => "Entire job Total Ton",
      'H15' => $_REQUEST['jobinfoh15'],
  
      'D16' => "CONTRACTOR:",
      'E16' => $_REQUEST['jobinfoe16'],
      'G16' => "Floors",
      'H16' => $_REQUEST['jobinfoh16'],
  
      'D17' => "ENGR.",
      'E17' => $_REQUEST['jobinfoe17'],
  
      'D18' => "PUBLISHED BUDGET",
      'E18' => $_REQUEST['jobinfoe18'],
  
      'D19' => "DUE DATE:",
      'E19' => $_REQUEST['jobinfoe19'],
  
      'D20' => "TIME:",
      'E20' => $_REQUEST['jobinfoe20'],
  
      'D21' => "PROJECT START:",
      'E21' => $_REQUEST['jobinfoe21'],
  
      'D22' => "PROJECT FINISH:",
      'E22' => $_REQUEST['jobinfoe22'],
  
      'E23' => $_REQUEST['jobinfoe23'],
      'F23' => "Days",
      
  
      'E24' => isset($_SESSION['jobinfoe24']) ? $_SESSION['jobinfoe24'] : '-',
      'F24' => "Weeks",
  
      'D26' => "Estimated Field Labor Hourly Cost",
      'E26' => $_REQUEST['jobinfoe26'],
  
      'D28' => "New Steel Pricing $/lb",
      'E28' => $_REQUEST['jobinfoe28'],
  ];
        
         

    $filename = 'jobinfo'; // Set your desired base filename

    generateExcel($data, $filename);
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Job Info</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="table.css">
</head>
<style>



.table_2 , .table_1{
    overflow: auto;
    height: 50%;
    
    width: 100%;
}

</style>
<body>
<div class="section">
   <form action="" method = "POST">
      <table border="1" style="border-collapse:collapse;" class="table_1">
      <tr style="text-align: center;position:sticky;top:0; background-color:white;">
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
      </tr>
      <tr>
         <td style="text-align: center;position:sticky;left:0; background-color:white;">1</td>
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
         <td style="text-align: center;position:sticky;left:0; background-color:white;">3</td>
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
         <td style="text-align: center;position:sticky;left:0; background-color:white;">4</td>
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
         <td style="text-align: center;position:sticky;left:0; background-color:white;">5</td>
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
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" name="jobinfod6" value="<?php if(isset($_REQUEST['jobinfod6'])){ echo $_REQUEST['jobinfod6'] ;} ?>"></td>
            <td>small change where I have added a new cost code for Crane and Equipment rental</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">7</td>
            <td></td>
            <td></td>
            <td></td>
            <td>REVISION FORM 9/1/2023</td>
            <td>Added date calculator, added 2" duct for indoor Vs Outdoor & siesmic - cleaned up the colors on the estimate sheet</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">8</td>
            <td></td>
            <td></td>
            <td></td>
            <td>REVISION FORM 2/1/2023</td>
            <td>Updated drop down list for all the vendors and subcontractors</td>
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
            <td></td>
            <td>Previous Version</td>
            <td>REVISION FORM 1/26/2023</td>
            <td>We have added the Budget sheet, fixed the startup cost for the RTU, Auto add for the RTU and the PE</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">10</td>
            <td></td>
            <td></td>
            <td></td>
            <td>REVISION FORM 11/07/2022</td>
            <td>Moderate revision to change some formula on the Specified Vendor sheet</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">11</td>
            <td></td>
            <td></td>
            <td></td>
            <td>REVISION FORM 10/13/2022</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">12</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="1">West Tech Mechanical Estimate Sheet</td>
            <td></td>
            <td></td>
            <td></td>
            <td>3-10 Ton</td>
            <td> 10 and above</td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">13</td>
            <td></td>
            <td></td>
            <td></td>
            <td>JOB NAME:</td>
            <td><input type="text" value = "<?php if(isset($_REQUEST['jobinfoe13'])){ echo $_REQUEST['jobinfoe13'] ;} ?>"  name="jobinfoe13"></td>
            <td></td>
            <td># RTU</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoh13'])){ echo $_REQUEST['jobinfoh13'] ;} ?>" name="jobinfoh13"></td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoi13'])){ echo $_REQUEST['jobinfoi13'] ;} ?>" name="jobinfoi13"></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">14</td>
            <td></td>
            <td></td>
            <td></td>
            <td>Location</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe14'])){ echo $_REQUEST['jobinfoe14'] ;} ?>" name="jobinfoe14"></td>
            <td></td>
            <td># RTU with PE</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoh14'])){ echo $_REQUEST['jobinfoh14'] ;} ?>" name="jobinfoh14"></td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoi14'])){ echo $_REQUEST['jobinfoi14'] ;} ?>" name="jobinfoi14"></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">15</td>
            <td></td>
            <td></td>
            <td></td>
            <td>DISTANCE TO SITE: </td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe15'])){ echo $_REQUEST['jobinfoe15'] ;} ?>" name="jobinfoe15"></td>
            <td></td>
            <td>Entire job Total Ton</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoh15'])){ echo $_REQUEST['jobinfoh15'] ;} ?>" name="jobinfoh15"></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">16</td>
            <td></td>
            <td></td>
            <td></td>
            <td>CONTRACTOR</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe16'])){ echo $_REQUEST['jobinfoe16'] ;} ?>" name="jobinfoe16"></td>
            <td></td>
            <td>Floors</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoh16'])){ echo $_REQUEST['jobinfoh16'] ;} ?>" name="jobinfoh16"></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">17</td>
            <td></td>
            <td></td>
            <td></td>
            <td>ENGR</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe17'])){ echo $_REQUEST['jobinfoe17'] ;} ?>" name="jobinfoe17"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">18</td>
            <td></td>
            <td></td>
            <td></td>
            <td>PUBLISHED BUDGET</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe18'])){ echo $_REQUEST['jobinfoe18'] ;} ?>" name="jobinfoe18"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">19</td>
            <td></td>
            <td></td>
            <td></td>
            <td>DUE DATE: </td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe19'])){ echo $_REQUEST['jobinfoe19'] ;} ?>" name="jobinfoe19"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">20</td>
            <td></td>
            <td></td>
            <td></td>
            <td>TIME:</td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe20'])){ echo $_REQUEST['jobinfoe20'] ;} ?>" name="jobinfoe20"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">21</td>
            <td></td>
            <td></td>
            <td></td>
            <td>PROJECT START: </td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe21'])){ echo $_REQUEST['jobinfoe21'] ;} ?>" name="jobinfoe21"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">22</td>
            <td></td>
            <td></td>
            <td></td>
            <td>PROJECT FINISH: </td>
            <td><input type="text" value="<?php if(isset($_REQUEST['jobinfoe22'])){ echo $_REQUEST['jobinfoe22'] ;} ?>" name="jobinfoe22"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">23</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text"  name="jobinfoe23" value="<?php if(isset($_REQUEST['jobinfoe23'])){ echo $_REQUEST['jobinfoe23'] ;  } else { echo 0 ;} ?>"></td>
            <td>DAYS</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">24</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" readonly  name="jobinfoe24" value="<?php  if (isset($jobinfoe24)){ echo $jobinfoe24 ;} else { echo 0 ;} ?>"></td>
            <td>weeks</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">25</td>
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
            <td style="text-align: center;position:sticky;left:0; background-color:white;">26</td>
            <td></td>
            <td></td>
            <td></td>
            <td>Estimated Field Labor Hourly Cost</td>
            <td><input type="text" name="jobinfoe26" class="quantity" step="any" value="<?php if(isset($_REQUEST['jobinfoe26'])){ echo $_REQUEST['jobinfoe26'] ;} else{ echo 1 ;}?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
         <tr>
            <td style="text-align: center;position:sticky;left:0; background-color:white;">27</td>
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
            <td style="text-align: center;position:sticky;left:0; background-color:white;">28</td>
            <td></td>
            <td></td>
            <td></td>
            <td>New steel Pricing $/lb</td>
            <td><input type="text" name="jobinfoe28" value="<?php if(isset($_REQUEST['jobinfoe28'])){ echo $_REQUEST['jobinfoe28'] ;} else{ echo 1 ;}?>"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
      </table>
      <input type="submit" value="Bid" class="jobinfosubmit" name="jobinfo">
      <?php if(isset($_REQUEST['jobinfo'])) { ?>
       <input type="submit" value="Download Job Info" class="downloadexcel" name="downloadexcel">
       <?php  }  ?>
   </form>
</div>
      
</body>
</html>

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
// ---------------------------------------------------------------------
      
    </script>