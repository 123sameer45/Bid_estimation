<?php 
require  "navbar.html.php" ; 
if(isset($_POST['budgetsubmit'])){

    $budgetc3 = array_sum([ floatval(isset($_SESSION['estimatej90']) ? $_SESSION['estimatej90'] : '-'),
                            floatval(isset($_SESSION['estimatej89']) ? $_SESSION['estimatej89'] : '-')]);

    $budgetc5 = isset($_SESSION['estimatei84']) ? floatval($_SESSION['estimatei84']) : '-' ;
    $budgetc6 = isset($_SESSION['estimatei85']) ? floatval($_SESSION['estimatei85']) : '-' ;

    $budgetc7 = floatval(array_sum([isset($_SESSION['estimatej75']) ? $_SESSION['estimatej75'] : '' ,
                                    isset($_SESSION['estimatei71']) ? $_SESSION['estimatei71'] : '' ,
                                    isset($_SESSION['estimatei72']) ? $_SESSION['estimatei72'] : '' ,
                                    isset($_SESSION['estimatei73']) ? $_SESSION['estimatei73'] : '' ,
                                    isset($_SESSION['estimatei74']) ? $_SESSION['estimatei74'] : '' ,
                                    ])) ;
    $budgetc8 = floatval(array_sum([isset($_SESSION['estimatei78']) ? $_SESSION['estimatei78'] : '' ,
                                    isset($_SESSION['estimatei79']) ? $_SESSION['estimatei79'] : '' ]));
    $budgetc10 = (isset($_SESSION['estimatei91']) ? $_SESSION['estimatei91'] : 0) -
                 (isset($_SESSION['estimatei78']) ? $_SESSION['estimatei78'] : 0) -
                 (isset($_SESSION['estimatei79']) ? $_SESSION['estimatei79'] : 0) -
                 (isset($_SESSION['estimatei84']) ? $_SESSION['estimatei84'] : 0) -
                 (isset($_SESSION['estimatei85']) ? $_SESSION['estimatei85'] : 0) -
                 (isset($_SESSION['estimatei71']) ? $_SESSION['estimatei71'] : 0) -
                 (isset($_SESSION['estimatei72']) ? $_SESSION['estimatei72'] : 0) -
                 (isset($_SESSION['estimatei73']) ? $_SESSION['estimatei73'] : 0) -
                 (isset($_SESSION['estimatei74']) ? $_SESSION['estimatei74'] : 0) ;
    $budgetc13 = array_sum([          floatval(array_sum([ 
                                      isset($_SESSION['estimateh44']) ? $_SESSION['estimateh44'] : 0,
                                      isset($_SESSION['estimateh45']) ? $_SESSION['estimateh45'] : 0,
                                      isset($_SESSION['estimateh46']) ? $_SESSION['estimateh46'] : 0,
                                      isset($_SESSION['estimateh47']) ? $_SESSION['estimateh47'] : 0,
                                      isset($_SESSION['estimateh48']) ? $_SESSION['estimateh48'] : 0,
                                      isset($_SESSION['estimateh49']) ? $_SESSION['estimateh49'] : 0,
                                      isset($_SESSION['estimateh50']) ? $_SESSION['estimateh50'] : 0,
                                      isset($_SESSION['estimateh51']) ? $_SESSION['estimateh51'] : 0,
                                      isset($_SESSION['estimateh52']) ? $_SESSION['estimateh52'] : 0,
                                      isset($_SESSION['estimateh53']) ? $_SESSION['estimateh53'] : 0

                                        ])) ,
                                      floatval(array_sum([ 
                                      isset($_SESSION['estimateh62']) ? $_SESSION['estimateh62'] : 0,
                                      isset($_SESSION['estimateh63']) ? $_SESSION['estimateh63'] : 0,
                                      isset($_SESSION['estimateh64']) ? $_SESSION['estimateh64'] : 0,
                                      isset($_SESSION['estimateh65']) ? $_SESSION['estimateh65'] : 0,
                                      isset($_SESSION['estimateh66']) ? $_SESSION['estimateh66'] : 0,
                                      isset($_SESSION['estimateh67']) ? $_SESSION['estimateh67'] : 0, ])),
                                      
                                      floatval(isset($_SESSION['estimateh23']) ? $_SESSION['estimateh23'] : 0)
                                        ]);
    $budgetc14 =  isset($_SESSION['estimateg8']) ? $_SESSION['estimateg8'] : 0 ;
    $budgetc15 =  isset($_SESSION['estimateg13']) ? $_SESSION['estimateg13'] : 0 ; 
    $budgetc16 =  isset($_SESSION['estimateg14']) ? $_SESSION['estimateg14'] : 0 ;
    $budgetc17 =  isset($_SESSION['estimateg17']) ? $_SESSION['estimateg17'] : 0 ;
    $budgetc18 =  isset($_SESSION['estimateg40']) ? $_SESSION['estimateg40'] : 0 ;
    $budgetc19 =  isset($_SESSION['estimateh40']) ? $_SESSION['estimateh40'] : 0 ;
    $budgetc20 =  isset($_SESSION['estimateg24']) ? $_SESSION['estimateg24'] : 0 ;
    $budgetc21 =  isset($_SESSION['estimateg29']) ? $_SESSION['estimateg29'] : 0 ;
    $budgetc22 =  isset($_SESSION['estimateh38']) ? $_SESSION['estimateh38'] : 0 ;
    $budgetc23 =  isset($_SESSION['estimateg34']) ? $_SESSION['estimateg34'] : 0 ;
    $budgetc24 =  isset($_SESSION['estimateg30']) ? $_SESSION['estimateg30'] : 0 ;
    $budgetc25 =  array_sum([
        isset($_SESSION['estimateh11']) ? $_SESSION['estimateh11'] : 0,
        isset($_SESSION['estimateh12']) ? $_SESSION['estimateh12'] : 0,
        isset($_SESSION['estimateh13']) ? $_SESSION['estimateh13'] : 0,
        isset($_SESSION['estimateh14']) ? $_SESSION['estimateh14'] : 0,
        isset($_SESSION['estimateh15']) ? $_SESSION['estimateh15'] : 0,
        isset($_SESSION['estimateh16']) ? $_SESSION['estimateh16'] : 0,
        isset($_SESSION['estimateh17']) ? $_SESSION['estimateh17'] : 0,
        isset($_SESSION['estimateh18']) ? $_SESSION['estimateh18'] : 0,
        isset($_SESSION['estimateh19']) ? $_SESSION['estimateh19'] : 0,
        isset($_SESSION['estimateh20']) ? $_SESSION['estimateh20'] : 0,
        isset($_SESSION['estimateh21']) ? $_SESSION['estimateh21'] : 0,
        isset($_SESSION['estimateh22']) ? $_SESSION['estimateh22'] : 0,
        isset($_SESSION['estimateh23']) ? $_SESSION['estimateh23'] : 0,
        isset($_SESSION['estimateh24']) ? $_SESSION['estimateh24'] : 0,
        isset($_SESSION['estimateh25']) ? $_SESSION['estimateh25'] : 0,
        isset($_SESSION['estimateh26']) ? $_SESSION['estimateh26'] : 0,
        isset($_SESSION['estimateh27']) ? $_SESSION['estimateh27'] : 0,
        isset($_SESSION['estimateh28']) ? $_SESSION['estimateh28'] : 0,
        isset($_SESSION['estimateh29']) ? $_SESSION['estimateh29'] : 0,
        isset($_SESSION['estimateh30']) ? $_SESSION['estimateh30'] : 0,
        isset($_SESSION['estimateh31']) ? $_SESSION['estimateh31'] : 0,
        isset($_SESSION['estimateh32']) ? $_SESSION['estimateh32'] : 0,
        isset($_SESSION['estimateh33']) ? $_SESSION['estimateh33'] : 0,
        isset($_SESSION['estimateh34']) ? $_SESSION['estimateh34'] : 0,
        isset($_SESSION['estimateh35']) ? $_SESSION['estimateh35'] : 0,
        isset($_SESSION['estimateh36']) ? $_SESSION['estimateh36'] : 0,
        isset($_SESSION['estimateh37']) ? $_SESSION['estimateh37'] : 0,
        isset($_SESSION['estimateh38']) ? $_SESSION['estimateh38'] : 0,
        isset($_SESSION['estimateh39']) ? $_SESSION['estimateh39'] : 0,
        isset($_SESSION['estimateh40']) ? $_SESSION['estimateh40'] : 0,
        isset($_SESSION['estimateh41']) ? $_SESSION['estimateh41'] : 0,
        isset($_SESSION['estimateh42']) ? $_SESSION['estimateh42'] : 0,

    ]) - (isset($_SESSION['estimateh23']) ? $_SESSION['estimateh23'] : 0) 
       - (isset($_SESSION['estimateh40']) ? $_SESSION['estimateh40'] : 0) ;
    
    $budgetc26 = (isset($_SESSION['estimatej76']) ? $_SESSION['estimatej76'] : 0) +
                 (isset($_SESSION['estimatej77']) ? $_SESSION['estimatej77'] : 0);

    $budgetc27 = isset($_SESSION['estimateg37']) ? $_SESSION['estimateg37'] : 0;
    $budgetc28 = isset($_SESSION['estimatej58']) ? $_SESSION['estimatej58'] : 0;
    
    $budgetc29 = isset($_SESSION['estimateg69']) ? $_SESSION['estimateg69'] : 0;
    $budgetc30 = isset($_SESSION['estimateh69']) ? $_SESSION['estimateh69'] : 0;
    $budgetc31 = isset($_SESSION['estimatej69']) ? $_SESSION['estimatej69'] : 0;
    $budgetc32 = isset($_SESSION['estimatej70']) ? $_SESSION['estimatej70'] : 0;
    $budgetc33 = (isset($_SESSION['estimateh60']) ? $_SESSION['estimateh60'] : 0) + 
                 (isset($_SESSION['estimateh61']) ? $_SESSION['estimateh61'] : 0);
    $budgetc34 = isset($_SESSION['estimatej59']) ? $_SESSION['estimatej59'] : 0 ;
    $budgetc35 = isset($_SESSION['estimateg39']) ? $_SESSION['estimateg39'] : 0 ;
    $budgetc36 = isset($_SESSION['estimateh67']) ? $_SESSION['estimateh67'] : 0 ;   
    $budgetc37 = isset($_SESSION['estimateg31']) ? $_SESSION['estimateg31'] : 0 ;
    $budgetc38 = isset($_SESSION['estimateg41']) ? $_SESSION['estimateg41'] : 0 ;
    $budgetc39 = isset($_SESSION['estimatej57']) ? $_SESSION['estimatej57'] : 0 ; 
    $budgetc40 = isset($_SESSION['estimatej56']) ? $_SESSION['estimatej56'] : 0 ;
    $budgetc41 = (isset($_SESSION['estimateg25']) ? $_SESSION['estimateg25'] : 0 ) + 
                 (isset($_SESSION['estimateg26']) ? $_SESSION['estimateg26'] : 0 ) +
                 (isset($_SESSION['estimateg27']) ? $_SESSION['estimateg27'] : 0 )  ;
    $budgetc42 = isset($_SESSION['estimatej28']) ? $_SESSION['estimatej28'] : 0 ;
  
    $budgetc47 = isset($_SESSION['estimatej93']) ? $_SESSION['estimatej93'] : 0 ; 
    $budgetc61 = array_sum([
        floatval($_REQUEST['budgetc2']), $budgetc3 , floatval($_REQUEST['budgetc4']),
        $budgetc5 , $budgetc6 ,$budgetc7 ,$budgetc8 , floatval($_REQUEST['budgetc9']),
        floatval($budgetc10),$_REQUEST['budgetc11'] , floatval($_REQUEST['budgetc12']),
        $budgetc13 ,$budgetc14 ,$budgetc15 ,$budgetc16 ,$budgetc17 ,$budgetc18 ,
        $budgetc19 ,$budgetc20 ,$budgetc21 ,$budgetc22 ,$budgetc23 ,$budgetc24 ,
        $budgetc25 ,$budgetc26 ,$budgetc27 ,$budgetc28 ,$budgetc29 ,$budgetc30 ,
        $budgetc31 ,$budgetc32 ,$budgetc33 ,$budgetc34 ,$budgetc35 ,$budgetc36 ,
        $budgetc37 ,$budgetc38 ,$budgetc39 ,$budgetc40 ,$budgetc41 ,$budgetc42 ,
        floatval($_REQUEST['budgetc43']),floatval($_REQUEST['budgetc45']),
        floatval($_REQUEST['budgetc46']), $budgetc47 , floatval($_REQUEST['budgetc48']),
        floatval($_REQUEST['budgetc49']),floatval($_REQUEST['budgetc50']),
        floatval($_REQUEST['budgetc51']),floatval($_REQUEST['budgetc52']),
        floatval($_REQUEST['budgetc53']),floatval($_REQUEST['budgetc54']),
        floatval($_REQUEST['budgetc55']),floatval($_REQUEST['budgetc56']),
        floatval($_REQUEST['budgetc57']),floatval($_REQUEST['budgetc58']),
        floatval($_REQUEST['budgetc59']),floatval($_REQUEST['budgetc60'])
         ]);
    $budgetd44 = (0 - $budgetc61) + ( isset($_SESSION['estimatej98']) ? $_SESSION['estimatej98'] : 0 );
    $budgetd61 =  ($budgetc61 + $budgetd44 == 0 ) ?  1 :   $budgetc61 + $budgetd44 ;
    $budgete44 = $budgetd44 /   $budgetd61 ;
    $_SESSION['budgete44'] = $budgete44;



// For array
$_SESSION['budgetc3'] = $budgetc3;
$_SESSION['budgetc5'] = $budgetc5;
$_SESSION['budgetc6'] = $budgetc6;
$_SESSION['budgetc7'] = $budgetc7;
$_SESSION['budgetc8'] = $budgetc8;
$_SESSION['budgetc10'] = $budgetc10;
$_SESSION['budgetc13'] = $budgetc13;
$_SESSION['budgetc14'] = $budgetc14;
$_SESSION['budgetc15'] = $budgetc15;
$_SESSION['budgetc16'] = $budgetc16;
$_SESSION['budgetc17'] = $budgetc17;
$_SESSION['budgetc18'] = $budgetc18;
$_SESSION['budgetc19'] = $budgetc19;
$_SESSION['budgetc20'] = $budgetc20;
$_SESSION['budgetc21'] = $budgetc21;
$_SESSION['budgetc22'] = $budgetc22;
$_SESSION['budgetc23'] = $budgetc23;
$_SESSION['budgetc24'] = $budgetc24;
$_SESSION['budgetc25'] = $budgetc25;
$_SESSION['budgetc26'] = $budgetc26;
$_SESSION['budgetc27'] = $budgetc27;
$_SESSION['budgetc28'] = $budgetc28;
$_SESSION['budgetc29'] = $budgetc29;
$_SESSION['budgetc30'] = $budgetc30;
$_SESSION['budgetc31'] = $budgetc31;
$_SESSION['budgetc32'] = $budgetc32;
$_SESSION['budgetc33'] = $budgetc33;
$_SESSION['budgetc34'] = $budgetc34;
$_SESSION['budgetc35'] = $budgetc35;
$_SESSION['budgetc36'] = $budgetc36;
$_SESSION['budgetc37'] = $budgetc37;
$_SESSION['budgetc38'] = $budgetc38;

$_SESSION['budgetc40'] = $budgetc40;
$_SESSION['budgetc41'] = $budgetc41;
$_SESSION['budgetc42'] = $budgetc42;

$_SESSION['budgetc47'] = $budgetc47;
$_SESSION['budgetc61'] = $budgetc61;

$_SESSION['budgetd44'] = $budgetd44;
$_SESSION['budgetd61'] = $budgetd61;

$_SESSION['budgete44'] = $budgete44;



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
  
        // Array for Budget
$data = [
    'A1' => "Code",
    'A2' => "1",
    'A3' => "01-005",
    'A4' => "01-010-04",
    'A5' => "01-015-07",
    'A6' => "01-020-07",
    'A7' => "01-025-05",
    'A8' => "01-030-02",
    'A9' => "01-035-02",
    'A10' => "01-040-04",
    'A11' => "15 HVAC",
    'A12' => "23",
    'A13' => "23-105-03",
    'A14' => "23-110-01",
    'A15' => "23-115-01",
    'A16' => "23-120-01",
    'A17' => "23-125-01",
    'A18' => "23-130-01",
    'A19' => "23-130-03",
    'A20' => "23-135-01",
    'A21' => "23-140-01",
    'A22' => "23-145-01",
    'A23' => "23-155-03",
    'A24' => "23-165-03",
    'A25' => "23-170-03",
    'A26' => "23-170-06",
    'A27' => "23-185-01",
    'A28' => "23-195-07",
    'A29' => "23-200-01",
    'A30' => "23-200-03",
    'A31' => "23-210-07",
    'A32' => "23-215-07",
    'A33' => "23-225-03",
    'A34' => "23-225-07",
    'A35' => "23-230-01",
    'A36' => "23-235-06",
    'A37' => "23-240-01",
    'A38' => "23-245-01",
    'A39' => "23-300-07",
    'A40' => "23-400-07",
    'A41' => "23-500-01",
    'A42' => "23-500-07",
    'A43' => "99",
    'A44' => "99-100",
    'A45' => "99-200",
    'A46' => "99-300",
    'A47' => "100",
    'A48' => "01 Plans and Permits",
    'A49' => "01 Plans and Permits-01.3 City License",
    'A50' => "01 Plans and Permits-01.2 Building Permits",
    'A51' => "01 Plans and Permits-01.1 Plans",
    'A52' => "WIP Trans",
    'A53' => "Retention",
    'A54' => "Insurance Expense",
    'A55' => "HVAC Subcontractors",
    'A56' => "HVAC Materials",
    'A57' => "HVAC Income",
    'A58' => "Closing Costs",
    'A59' => "Building Sale",
    'A60' => "Building Cost",

    'B2' => "General Conditions",
    'B3' => "Bonds & Insurance",
    'B4' => "Submittal",
    'B5' => "Shop Drawings",
    'B6' => "BIM Coordination",
    'B7' => "Allowance",
    'B8' => "Mobilization and Demobilization",
    'B9' => "Punch List",
    'B10' => "Closeout Items",
    'B11' => "Heating & Cooling",
    'B12' => "Mechanical Division",
    'B13' => "HVAC Ductwork Rough-in (Material)",
    'B14' => "HVAC Rooftop Units (Equipment)",
    'B15' => "HVAC Curb/Iso Curb (Equipment)",
    'B16' => "HVAC Exhaust Fans (Equipment)",
    'B17' => "HVAC Split System (Equipment)",
    'B18' => "HVAC Fire Smoke Dampers (Equipment)",
    'B19' => "HVAC Fire Smoke Dampers (Material)",
    'B20' => "HVAC Makeup Air Unit (Equipment)",
    'B21' => "VAV Boxes/Zone Dampers (Equipment)",
    'B22' => "Remote Dampers (Equipment)",
    'B23' => "HVAC Finishes/Air Distribution (Material)",
    'B24' => "Vehicle Exhaust (Material)",
    'B25' => "ALL HVAC Equipment Installation (Material)",
    'B26' => "Crane & Equipment Rentals (PO)",
    'B27' => "HVAC Louvers (Equipment)",
    'B28' => "Duct Cleaning (Subcontract)",
    'B29' => "HVAC Instruments and Controls (EMS) (Equipment/Parts)",
    'B30' => "HVAC Instruments and Controls (EMS) (Material)",
    'B31' => "HVAC Instruments and Controls (EMS) (Subcontract)",
    'B32' => "HVAC Electrical Conduit & Wiring (Subcontract)",
    'B33' => "Mechanical Demo (Material)",
    'B34' => "Mechanical Demo (Subcontract)",
    'B35' => "Isolation Dampers (Equipment)",
    'B36' => "Seismic Requirement Engineering Hardware & Materials (PO)",
    'B37' => "VFD (Equipment)",
    'B38' => "Smoke Detectors Duct Mount (Equipment)",
    'B39' => "Mechanical Insulation (Subcontract)",
    'B40' => "Testing, Adjusting & Balancing (Subcontract)",
    'B41' => "Hydronics & VRF (Equipment/Parts)",
    'B42' => "Hydronic & VRF Piping (Subcontract)",
    'B43' => "Markup, Profit, & Contingency",
    'B44' => "Profit",
    'B45' => "Markup",
    'B46' => "Contingency",
    'B47' => "Sales Tax",
    'B48' => "Plans and Permits",
    'B49' => "City License Fee",
    'B50' => "Building Permits",
    'B51' => "Plans",
    'B52' => "WIP Trans",
    'B53' => "Amount of Retainage",
    'B54' => "Insurance Exprense",
    'B55' => "HVAC Subcontractors",
    'B56' => "HVAC Materials",
    'B57' => "HVAC Income",
    'B58' => "Closing Costs",
    'B59' => "Building Sale",
    'B60' => "Building Cost",

    'C1' => "Price",
    'C2' => $_REQUEST['budgetc2'],
    'C3' => isset($_SESSION['budgetc3']) ? $_SESSION['budgetc3'] : '-',
    'C4' => $_REQUEST['budgetc4'],
    'C5' => isset($_SESSION['budgetc5']) ? $_SESSION['budgetc5'] : '-',
    'C6' => isset($_SESSION['budgetc6']) ? $_SESSION['budgetc6'] : '-',
    'C7' => isset($_SESSION['budgetc7']) ? $_SESSION['budgetc7'] : '-',
    'C8' => isset($_SESSION['budgetc8']) ? $_SESSION['budgetc8'] : '-',
    'C9' => $_REQUEST['budgetc9'],
    'C10' => isset($_SESSION['budgetc10']) ? $_SESSION['budgetc10'] : '-',
    'C11' => $_REQUEST['budgetc11'],
    'C12' => $_REQUEST['budgetc12'],
    'C13' => isset($_SESSION['budgetc13']) ? $_SESSION['budgetc13'] : '-',
    'C14' => isset($_SESSION['budgetc14']) ? $_SESSION['budgetc14'] : '-',
    'C15' => isset($_SESSION['budgetc15']) ? $_SESSION['budgetc15'] : '-',
    'C16' => isset($_SESSION['budgetc16']) ? $_SESSION['budgetc16'] : '-',
    'C17' => isset($_SESSION['budgetc17']) ? $_SESSION['budgetc17'] : '-',
    'C18' => isset($_SESSION['budgetc18']) ? $_SESSION['budgetc18'] : '-',
    'C19' => isset($_SESSION['budgetc19']) ? $_SESSION['budgetc19'] : '-',
    'C20' => isset($_SESSION['budgetc20']) ? $_SESSION['budgetc20'] : '-',
    'C21' => isset($_SESSION['budgetc21']) ? $_SESSION['budgetc21'] : '-',
    'C22' => isset($_SESSION['budgetc22']) ? $_SESSION['budgetc22'] : '-',
    'C23' => isset($_SESSION['budgetc23']) ? $_SESSION['budgetc23'] : '-',
    'C24' => isset($_SESSION['budgetc24']) ? $_SESSION['budgetc24'] : '-',
    'C25' => isset($_SESSION['budgetc25']) ? $_SESSION['budgetc25'] : '-',
    'C26' => isset($_SESSION['budgetc26']) ? $_SESSION['budgetc26'] : '-',
    'C27' => isset($_SESSION['budgetc27']) ? $_SESSION['budgetc27'] : '-',
    'C28' => isset($_SESSION['budgetc28']) ? $_SESSION['budgetc28'] : '-',
    'C29' => isset($_SESSION['budgetc29']) ? $_SESSION['budgetc29'] : '-',
    'C30' => isset($_SESSION['budgetc30']) ? $_SESSION['budgetc30'] : '-',
    'C31' => isset($_SESSION['budgetc31']) ? $_SESSION['budgetc31'] : '-',
    'C32' => isset($_SESSION['budgetc32']) ? $_SESSION['budgetc32'] : '-',
    'C33' => isset($_SESSION['budgetc33']) ? $_SESSION['budgetc33'] : '-',
    'C34' => isset($_SESSION['budgetc34']) ? $_SESSION['budgetc34'] : '-',
    'C35' => isset($_SESSION['budgetc35']) ? $_SESSION['budgetc35'] : '-',
    'C36' => isset($_SESSION['budgetc36']) ? $_SESSION['budgetc36'] : '-',
    'C37' => isset($_SESSION['budgetc37']) ? $_SESSION['budgetc37'] : '-',
    'C38' => isset($_SESSION['budgetc38']) ? $_SESSION['budgetc38'] : '-',
    'C39' => $_REQUEST['budgetc39'],
    'C40' => isset($_SESSION['budgetc40']) ? $_SESSION['budgetc40'] : '-',
    'C41' => isset($_SESSION['budgetc41']) ? $_SESSION['budgetc41'] : '-',
    'C42' => isset($_SESSION['budgetc42']) ? $_SESSION['budgetc42'] : '-',
    'C43' => $_REQUEST['budgetc43'],
    'C44' => "Profit",
    'C45' => $_REQUEST['budgetc45'],
    'C46' => $_REQUEST['budgetc46'],
    'C47' => isset($_SESSION['budgetc47']) ? $_SESSION['budgetc47'] : '-',
    'C48' => $_REQUEST['budgetc48'],
    'C49' => $_REQUEST['budgetc49'],
    'C50' => $_REQUEST['budgetc50'],
    'C51' => $_REQUEST['budgetc51'],
    'C52' => $_REQUEST['budgetc52'],
    'C53' => $_REQUEST['budgetc53'],
    'C54' => $_REQUEST['budgetc54'],
    'C55' => $_REQUEST['budgetc55'],
    'C56' => $_REQUEST['budgetc56'],
    'C57' => $_REQUEST['budgetc57'],
    'C58' => $_REQUEST['budgetc58'],
    'C59' => $_REQUEST['budgetc59'],
    'C60' => $_REQUEST['budgetc60'],
    'C61' => isset($_SESSION['budgetc61']) ? $_SESSION['budgetc61'] : '-',

    'D1' => "Profit",
    'D2' => $_REQUEST['budgetd2'],
    'D3' => $_REQUEST['budgetd3'],
    'D4' => $_REQUEST['budgetd4'],
    'D5' => $_REQUEST['budgetd5'],
    'D6' => $_REQUEST['budgetd6'],
    'D7' => $_REQUEST['budgetd7'],
    'D8' => $_REQUEST['budgetd8'],
    'D9' => $_REQUEST['budgetd9'],
    'D10' => $_REQUEST['budgetd10'],
    'D11' => $_REQUEST['budgetd11'],
    'D12' => $_REQUEST['budgetd12'],
    'D13' => $_REQUEST['budgetd13'],
    'D14' => $_REQUEST['budgetd14'],
    'D15' => $_REQUEST['budgetd15'],
    'D16' => $_REQUEST['budgetd16'],
    'D17' => $_REQUEST['budgetd17'],
    'D18' => $_REQUEST['budgetd18'],
    'D19' => $_REQUEST['budgetd19'],
    'D20' => $_REQUEST['budgetd20'],
    'D21' => $_REQUEST['budgetd21'],
    'D22' => $_REQUEST['budgetd22'],
    'D23' => $_REQUEST['budgetd23'],
    'D24' => $_REQUEST['budgetd24'],
    'D25' => $_REQUEST['budgetd25'],
    'D26' => $_REQUEST['budgetd26'],
    'D27' => $_REQUEST['budgetd27'],
    'D28' => $_REQUEST['budgetd28'],
    'D29' => $_REQUEST['budgetd29'],
    'D30' => $_REQUEST['budgetd30'],
    'D31' => $_REQUEST['budgetd31'],
    'D32' => $_REQUEST['budgetd32'],
    'D33' => $_REQUEST['budgetd33'],
    'D34' => $_REQUEST['budgetd34'],
    'D35' => $_REQUEST['budgetd35'],
    'D36' => $_REQUEST['budgetd36'],
    'D37' => $_REQUEST['budgetd37'],
    'D38' => $_REQUEST['budgetd38'],
    'D39' => $_REQUEST['budgetd39'],
    'D40' => $_REQUEST['budgetd40'],
    'D41' => $_REQUEST['budgetd41'],
    'D42' => $_REQUEST['budgetd42'],
    'D43' => $_REQUEST['budgetd43'],
    'D44' => isset($_SESSION['budgetd44']) ? $_SESSION['budgetd44'] : '-',
    'D45' => $_REQUEST['budgetd45'],
    'D46' => $_REQUEST['budgetd46'],
    'D47' => $_REQUEST['budgetd47'],
    'D48' => $_REQUEST['budgetd48'],
    'D49' => $_REQUEST['budgetd49'],
    'D50' => $_REQUEST['budgetd50'],
    'D51' => $_REQUEST['budgetd51'],
    'D52' => $_REQUEST['budgetd52'],
    'D53' => $_REQUEST['budgetd53'],
    'D54' => $_REQUEST['budgetd54'],
    'D55' => $_REQUEST['budgetd55'],
    'D56' => $_REQUEST['budgetd56'],
    'D57' => $_REQUEST['budgetd57'],
    'D58' => $_REQUEST['budgetd58'],
    'D59' => $_REQUEST['budgetd59'],
    'D60' => $_REQUEST['budgetd60'],
    'D61' => isset($_SESSION['budgetd61']) ? $_SESSION['budgetd61'] : '-',

    'E44' => isset($_SESSION['budgete44']) ? $_SESSION['budgete44'] : '-',

    

    
];
         

    $filename = 'budget'; // Set your desired base filename

    generateExcel($data, $filename);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>budget</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
</head>
<style>
  
.budget 
    {
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
    <table class="table_1" border="1">
        <tr style="position:sticky;top:0;background-color:white;">
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>E</td>
        </tr>
        <tr style="position:sticky;top:5%;background-color:white;">
            <td style="position:sticky;left:0;background-color:white;">1</td>
            <td>Code</td>
            <td>Description</td>
            <td>Price</td>
            <td>Profit</td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">2</td>
            <td>1</td>
            <td>General Conditions</td>
            <td><input type="text" name="budgetc2" value = "<?php  if(isset($_REQUEST['budgetc2'])){ echo $_REQUEST['budgetc2'] ; } ?>"></td>
            <td><input type="text" name="budgetd2" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd2'])){ echo $_REQUEST['budgetd2'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">3</td>
            <td>01-005</td>
            <td>Bonds & Insurance</td>
            <td><input type="text" readonly name="budgetc3" class="custom-input" value="<?php  if(isset($budgetc3)){ echo $budgetc3 ;} ?>"></td>
            <td><input type="text" name="budgetd3" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd3'])){ echo $_REQUEST['budgetd3'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">4</td>
            <td>01-010-04</td>
            <td>Submittal</td>
            <td><input type="text" name="budgetc4" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc4'])){ echo $_REQUEST['budgetc4'] ; } ?>"></td>
            <td><input type="text" name="budgetd4" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd4'])){ echo $_REQUEST['budgetd4'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">5</td>
            <td>01-015-07</td>
            <td>Shop Drawings</td>
            <td><input type="text" readonly name="budgetc5" class="custom-input" value="<?php  if(isset($budgetc5)){ echo $budgetc5 ; } ?>"></td>
            <td><input type="text" name="budgetd5" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd5'])){ echo $_REQUEST['budgetd5'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">6</td>
            <td>01-020-07</td>
            <td>BIM Coordination</td>
            <td><input type="text" readonly name="budgetc6" class="custom-input" value="<?php  if(isset($budgetc6)){ echo $budgetc6 ; } ?>"></td>
            <td><input type="text" name="budgetd6" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd6'])){ echo $_REQUEST['budgetd6'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">7</td>
            <td>01-025-05</td>
            <td>Allowance</td>
            <td><input type="text" readonly name="budgetc7" class="custom-input" value="<?php  if(isset($budgetc7)){ echo $budgetc7 ; } ?>"></td>
            <td><input type="text" name="budgetd7" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd7'])){ echo $_REQUEST['budgetd7'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">8</td>
            <td>01-030-02</td>
            <td>Mobilization and Demobilization</td>
            <td><input type="text" readonly name="budgetc8" class="custom-input" value="<?php  if(isset($budgetc8)){ echo $budgetc8 ; } ?>"></td>
            <td><input type="text" name="budgetd8" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd8'])){ echo $_REQUEST['budgetd8'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">9</td>
            <td>01-035-02</td>
            <td>Punch List</td>
            <td><input type="text" name="budgetc9" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc9'])){ echo $_REQUEST['budgetc9'] ; } ?>"></td>
            <td><input type="text" name="budgetd9" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd9'])){ echo $_REQUEST['budgetd9'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">10</td>
            <td>01-040-04</td>
            <td>Closeout Items</td>
            <td><input type="text" readonly name="budgetc10" class="custom-input" value="<?php  if(isset($budgetc10)){ echo $budgetc10 ; } ?>"></td>
            <td><input type="text" name="budgetd10" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd10'])){ echo $_REQUEST['budgetd10'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">11</td>
            <td>15 HVAC</td>
            <td>Heating & Cooling</td>
            <td><input type="text"  name="budgetc11" class="custom-input" value="<?php  if(isset($_request['budgetc11'])){ echo $_REQUEST['budgetc11'] ; } ?>"></td>
            <td><input type="text" name="budgetd11" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd11'])){ echo $_REQUEST['budgetd11'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">12</td>
            <td>23</td>
            <td>Mechanical Division</td>
            <td><input type="text" name="budgetc12" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc12'])){ echo $_REQUEST['budgetc12'] ; } ?>"></td>
            <td><input type="text" name="budgetd12" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd12'])){ echo $_REQUEST['budgetd12'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">13</td>
            <td>23-105-03</td>
            <td>HVAC Ductwork Rough-in (Material)</td>
            <td><input type="text" readonly name="budgetc13" class="custom-input" value="<?php  if(isset($budgetc13)){ echo $budgetc13 ; } ?>"></td>
            <td><input type="text" name="budgetd13" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd13'])){ echo $_REQUEST['budgetd13'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">14</td>
            <td>23-110-01</td>
            <td>HVAC Rooftop Units (Equipment)</td>
            <td><input type="text" readonly name="budgetc14" class="custom-input" value="<?php  if(isset($budgetc14)){ echo $budgetc14 ; } ?>"></td>
            <td><input type="text" name="budgetd14" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd14'])){ echo $_REQUEST['budgetd14'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">15</td>
            <td>23-115-01</td>
            <td>HVAC Curb/Iso Curb (Equipment)</td>
            <td><input type="text" readonly name="budgetc15" class="custom-input" value="<?php  if(isset($budgetc15)){ echo $budgetc15 ; } ?>"></td>
            <td><input type="text" name="budgetd15" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd15'])){ echo $_REQUEST['budgetd15'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">16</td>
            <td>23-120-01</td>
            <td>HVAC Exhaust Fans (Equipment)</td>
            <td><input type="text" readonly name="budgetc16" class="custom-input" value="<?php  if(isset($budgetc16)){ echo $budgetc16 ; } ?>"></td>
            <td><input type="text" name="budgetd16" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd16'])){ echo $_REQUEST['budgetd16'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">17</td>
            <td>23-125-01</td>
            <td>HVAC Split System (Equipment)</td>
            <td><input type="text" readonly name="budgetc17" class="custom-input" value="<?php  if(isset($budgetc17)){ echo $budgetc17 ; } ?>"></td>
            <td><input type="text" name="budgetd17" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd17'])){ echo $_REQUEST['budgetd17'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">18</td>
            <td>23-130-01</td>
            <td>HVAC Fire Smoke Dampers (Equipment)</td>
            <td><input type="text" readonly name="budgetc18" class="custom-input" value="<?php  if(isset($budgetc18)){ echo $budgetc18 ; } ?>"></td>
            <td><input type="text" name="budgetd18" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd18'])){ echo $_REQUEST['budgetd18'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">19</td>
            <td>23-130-03</td>
            <td>HVAC Fire Smoke Dampers (Material)</td>
            <td><input type="text" readonly name="budgetc19" class="custom-input" value="<?php  if(isset($budgetc19)){ echo $budgetc19 ; } ?>"></td>
            <td><input type="text" name="budgetd19" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd19'])){ echo $_REQUEST['budgetd19'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">20</td>
            <td>23-135-01</td>
            <td>HVAC Makeup Air Unit (Equipment)</td>
            <td><input type="text" readonly name="budgetc20" class="custom-input" value="<?php  if(isset($budgetc20)){ echo $budgetc20 ; } ?>"></td>
            <td><input type="text" name="budgetd20" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd20'])){ echo $_REQUEST['budgetd20'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">21</td>
            <td>23-140-01</td>
            <td>VAV Boxes/Zone Dampers (Equipment)</td>
            <td><input type="text" readonly name="budgetc21" class="custom-input" value="<?php  if(isset($budgetc21)){ echo $budgetc21 ; } ?>"></td>
            <td><input type="text" name="budgetd21" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd21'])){ echo $_REQUEST['budgetd21'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">22</td>
            <td>23-145-01</td>
            <td>Remote Dampers (Equipment)</td>
            <td><input type="text" readonly name="budgetc22" class="custom-input" value="<?php  if(isset($budgetc22)){ echo $budgetc22 ; } ?>"></td>
            <td><input type="text" name="budgetd22" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd22'])){ echo $_REQUEST['budgetd22'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">23</td>
            <td>23-155-03</td>
            <td>HVAC Finishes/Air Distribution (Material)</td>
            <td><input type="text" readonly name="budgetc23" class="custom-input" value="<?php  if(isset($budgetc23)){ echo $budgetc23 ; } ?>"></td>
            <td><input type="text" name="budgetd23" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd23'])){ echo $_REQUEST['budgetd23'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">24</td>
            <td>23-165-03</td>
            <td>Vehicle Exhaust (Material)</td>
            <td><input type="text" readonly name="budgetc24" class="custom-input" value="<?php  if(isset($budgetc24)){ echo $budgetc24 ; } ?>"></td>
            <td><input type="text" name="budgetd24" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd24'])){ echo $_REQUEST['budgetd24'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">25</td>
            <td>23-170-03</td>
            <td>ALL HVAC Equipment Installation (Material)</td>
            <td><input type="text" readonly name="budgetc25" class="custom-input" value="<?php  if(isset($budgetc25)){ echo $budgetc25 ; } ?>"></td>
            <td><input type="text" name="budgetd25" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd25'])){ echo $_REQUEST['budgetd25'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">26</td>
            <td>23-170-06</td>
            <td>Crane & Equipment Rentals (PO)</td>
            <td><input type="text" readonly name="budgetc26" class="custom-input" value="<?php  if(isset($budgetc26)){ echo $budgetc26 ; } ?>"></td>
            <td><input type="text" name="budgetd26" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd26'])){ echo $_REQUEST['budgetd26'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">27</td>
            <td>23-185-01</td>
            <td>HVAC Louvers (Equipment)</td>
            <td><input type="text" readonly name="budgetc27" class="custom-input" value="<?php  if(isset($budgetc27)){ echo $budgetc27 ; } ?>"></td>
            <td><input type="text" name="budgetd27" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd27'])){ echo $_REQUEST['budgetd27'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">28</td>
            <td>23-195-07</td>
            <td>Duct Cleaning (Subcontract)</td>
            <td><input type="text" readonly name="budgetc28" class="custom-input" value="<?php  if(isset($budgetc28)){ echo $budgetc28 ; } ?>"></td>
            <td><input type="text" name="budgetd28" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd28'])){ echo $_REQUEST['budgetd28'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">29</td>
            <td>23-200-01</td>
            <td>HVAC Instruments and Controls (EMS) (Equipment/Parts)</td>
            <td><input type="text" readonly name="budgetc29" class="custom-input" value="<?php  if(isset($budgetc29)){ echo $budgetc29 ; } ?>"></td>
            <td><input type="text" name="budgetd29" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd29'])){ echo $_REQUEST['budgetd29'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">30</td>
            <td>23-200-03</td>
            <td>HVAC Instruments and Controls (EMS) (Material)</td>
            <td><input type="text" readonly name="budgetc30" class="custom-input" value="<?php  if(isset($budgetc30)){ echo $budgetc30 ; } ?>"></td>
            <td><input type="text" name="budgetd30" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd30'])){ echo $_REQUEST['budgetd30'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">31</td>
            <td>23-210-07</td>
            <td>HVAC Instruments and Controls (EMS) (Subcontract)</td>
            <td><input type="text" readonly name="budgetc31" class="custom-input" value="<?php  if(isset($budgetc31)){ echo $budgetc31 ; } ?>"></td>
            <td><input type="text" name="budgetd31" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd31'])){ echo $_REQUEST['budgetd31'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">32</td>
            <td>23-215-07</td>
            <td>HVAC Electrical Conduit & Wiring (Subcontract)</td>
            <td><input type="text" readonly name="budgetc32" class="custom-input" value="<?php  if(isset($budgetc32)){ echo $budgetc32 ; } ?>"></td>
            <td><input type="text" name="budgetd32" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd32'])){ echo $_REQUEST['budgetd32'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">33</td>
            <td>23-225-03</td>
            <td>Mechanical Demo (Material)</td>
            <td><input type="text" readonly name="budgetc33" class="custom-input" value="<?php  if(isset($budgetc33)){ echo $budgetc33 ; } ?>"></td>
            <td><input type="text" name="budgetd33" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd33'])){ echo $_REQUEST['budgetd33'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">34</td>
            <td>23-225-07</td>
            <td>Mechanical Demo (Subcontract)</td>
            <td><input type="text" readonly name="budgetc34" class="custom-input" value="<?php  if(isset($budgetc34)){ echo $budgetc34 ; } ?>"></td>
            <td><input type="text" name="budgetd34" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd34'])){ echo $_REQUEST['budgetd34'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">35</td>
            <td>23-230-01</td>
            <td>Isolation Dampers (Equipment)</td>
            <td><input type="text" readonly name="budgetc35" class="custom-input" value="<?php  if(isset($budgetc35)){ echo $budgetc35 ; } ?>"></td>
            <td><input type="text" name="budgetd35" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd35'])){ echo $_REQUEST['budgetd35'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">36</td>
            <td>23-235-06</td>
            <td>Seismic Requirement Engineering Hardware & Materials (PO)</td>
            <td><input type="text" readonly name="budgetc36" class="custom-input" value="<?php  if(isset($budgetc36)){ echo $budgetc36 ; } ?>"></td>
            <td><input type="text" name="budgetd36" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd36'])){ echo $_REQUEST['budgetd36'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">37</td>
            <td>23-240-01</td>
            <td>VFD (Equipment)</td>
            <td><input type="text" readonly name="budgetc37" class="custom-input" value="<?php  if(isset($budgetc37)){ echo $budgetc37 ; } ?>"></td>
            <td><input type="text" name="budgetd37" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd37'])){ echo $_REQUEST['budgetd37'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">38</td>
            <td>23-245-01</td>
            <td>Smoke Detectors Duct Mount (Equipment)</td>
            <td><input type="text" readonly name="budgetc38" class="custom-input" value="<?php  if(isset($budgetc38)){ echo $budgetc38 ; } ?>"></td>
            <td><input type="text" name="budgetd38" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd38'])){ echo $_REQUEST['budgetd38'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">39</td>
            <td>23-300-07</td>
            <td>Mechanical Insulation (Subcontract)</td>
            <td><input type="text" readonly name="budgetc39" class="custom-input" value="<?php  if(isset($budgetc39)){ echo $budgetc39 ; } ?>"></td>
            <td><input type="text" name="budgetd39" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd39'])){ echo $_REQUEST['budgetd39'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">40</td>
            <td>23-400-07</td>
            <td>Testing, Adjusting & Balancing (Subcontract)</td>
            <td><input type="text" readonly name="budgetc40" class="custom-input" value="<?php  if(isset($budgetc40)){ echo $budgetc40 ; } ?>"></td>
            <td><input type="text" name="budgetd40" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd40'])){ echo $_REQUEST['budgetd40'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">41</td>
            <td>23-500-01</td>
            <td>Hydronics & VRF (Equipment/Parts)</td>
            <td><input type="text" readonly name="budgetc41" class="custom-input" value="<?php  if(isset($budgetc41)){ echo $budgetc41 ; } ?>"></td>
            <td><input type="text" name="budgetd41" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd41'])){ echo $_REQUEST['budgetd41'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">42</td>
            <td>23-500-07</td>
            <td>Hydronic & VRF Piping (Subcontract)</td>
            <td><input type="text" readonly name="budgetc42" class="custom-input" value="<?php  if(isset($budgetc42)){ echo $budgetc42 ; } ?>"></td>
            <td><input type="text" name="budgetd42" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd42'])){ echo $_REQUEST['budgetd42'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">43</td>
            <td>99</td>
            <td>Markup, Profit, & Contingency</td>
            <td><input type="text"  name="budgetc43" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc43'])){ echo $_REQUEST['budgetc43'] ; } ?>"></td>
            <td><input type="text" name="budgetd43" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd43'])){ echo $_REQUEST['budgetd43'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">44</td>
            <td>99-100</td>
            <td>Profit</td>
            <td>Profit</td>
            <td><input type="text" readonly name="budgetd44" class="custom-input" value="<?php  if(isset($budgetd44)){ echo $budgetd44 ; } ?>"></td>
            <td><input type="text" readonly name="budgete44" class="custom-input" value="<?php  if(isset($budgete44)){ echo $budgete44 ; } ?>"></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">45</td>
            <td>99-200</td>
            <td>Markup</td>
            <td><input type="text" name="budgetc45" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc45'])){ echo $_REQUEST['budgetc45'] ; } ?>"></td>
            <td><input type="text" name="budgetd45" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd45'])){ echo $_REQUEST['budgetd45'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">46</td>
            <td>99-300</td>
            <td>Contingency</td>
            <td><input type="text" name="budgetc46" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc46'])){ echo $_REQUEST['budgetc46'] ; } ?>"></td>
            <td><input type="text" name="budgetd46" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd46'])){ echo $_REQUEST['budgetd46'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">47</td>
            <td>100</td>
            <td>Sales Tax</td>
            <td><input type="text" readonly name="budgetc47" class="custom-input" value="<?php  if(isset($budgetc47)){ echo $budgetc47 ; } ?>"></td>
            <td><input type="text" name="budgetd47" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd47'])){ echo $_REQUEST['budgetd47'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">48</td>
            <td>01 Plans and Permits</td>
            <td>Plans and Permits</td>
            <td><input type="text" name="budgetc48" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc48'])){ echo $_REQUEST['budgetc48'] ; } ?>"></td>
            <td><input type="text" name="budgetd48" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd48'])){ echo $_REQUEST['budgetd48'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">49</td>
            <td>01 Plans and Permits-01.3 City License</td>
            <td>City License Fee</td>
            <td><input type="text" name="budgetc49" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc49'])){ echo $_REQUEST['budgetc49'] ; } ?>"></td>
            <td><input type="text" name="budgetd49" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd49'])){ echo $_REQUEST['budgetd49'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">50</td>
            <td>01 Plans and Permits-01.2 Building Permits</td>
            <td>Building Permits</td>
            <td><input type="text" name="budgetc50" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc50'])){ echo $_REQUEST['budgetc50'] ; } ?>"></td>
            <td><input type="text" name="budgetd50" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd50'])){ echo $_REQUEST['budgetd50'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">51</td>
            <td>01 Plans and Permits-01.1 Plans</td>
            <td>Plans</td>
            <td><input type="text" name="budgetc51" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc51'])){ echo $_REQUEST['budgetc51'] ; } ?>"></td>
            <td><input type="text" name="budgetd51" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd51'])){ echo $_REQUEST['budgetd51'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">52</td>
            <td>WIP Trans</td>
            <td>WIP Trans</td>
            <td><input type="text" name="budgetc52" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc52'])){ echo $_REQUEST['budgetc52'] ; } ?>"></td>
            <td><input type="text" name="budgetd52" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd52'])){ echo $_REQUEST['budgetd52'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">53</td>
            <td>Retention</td>
            <td>Amount Retainage</td>
            <td><input type="text" name="budgetc53" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc53'])){ echo $_REQUEST['budgetc53'] ; } ?>"></td>
            <td><input type="text" name="budgetd53" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd53'])){ echo $_REQUEST['budgetd53'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">54</td>
            <td>Insurance Expense</td>
            <td>Insurance Expense</td>
            <td><input type="text" name="budgetc54" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc54'])){ echo $_REQUEST['budgetc54'] ; } ?>"></td>
            <td><input type="text" name="budgetd54" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd54'])){ echo $_REQUEST['budgetd54'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">55</td>
            <td>HVAC Subcontractors</td>
            <td>HVAC Subcontractors</td>
            <td><input type="text" name="budgetc55" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc55'])){ echo $_REQUEST['budgetc55'] ; } ?>"></td>
            <td><input type="text" name="budgetd55" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd55'])){ echo $_REQUEST['budgetd55'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">56</td>
            <td>HVAC Materials</td>
            <td>HVAC Materials</td>
            <td><input type="text" name="budgetc56" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc56'])){ echo $_REQUEST['budgetc56'] ; } ?>"></td>
            <td><input type="text" name="budgetd56" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd56'])){ echo $_REQUEST['budgetd56'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">57</td>
            <td>HVAC Income</td>
            <td>HVAC Income</td>
            <td><input type="text" name="budgetc57" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc57'])){ echo $_REQUEST['budgetc57'] ; } ?>"></td>
            <td><input type="text" name="budgetd57" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd57'])){ echo $_REQUEST['budgetd57'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">58</td>
            <td>Closing Costs</td>
            <td>Closing Costs</td>
            <td><input type="text" name="budgetc58" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc58'])){ echo $_REQUEST['budgetc58'] ; } ?>"></td>
            <td><input type="text" name="budgetd58" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd58'])){ echo $_REQUEST['budgetd58'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">59</td>
            <td>Building Sale</td>
            <td>Building Sale</td>
            <td><input type="text" name="budgetc59" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc59'])){ echo $_REQUEST['budgetc59'] ; } ?>"></td>
            <td><input type="text" name="budgetd59" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd59'])){ echo $_REQUEST['budgetd59'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">60</td>
            <td>Building Cost</td>
            <td>Building Cost</td>
            <td><input type="text" name="budgetc60" class="custom-input" value="<?php  if(isset($_REQUEST['budgetc60'])){ echo $_REQUEST['budgetc60'] ; } ?>"></td>
            <td><input type="text" name="budgetd60" class="custom-input" value="<?php  if(isset($_REQUEST['budgetd60'])){ echo $_REQUEST['budgetd60'] ; } ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td style="position:sticky;left:0;background-color:white;">61</td>
            <td></td>
            <td></td>
            <td><input type="text" readonly name="budgetc61" class="custom-input" value="<?php  if(isset($budgetc61)){ echo $budgetc61 ; } ?>"></td>
            <td><input type="text" readonly name="budgetd61" class="custom-input" value="<?php  if(isset($budgetd61)){ echo $budgetd61 ; } ?>"></td>
            <td></td>
        </tr>
    </table>
    <input type="submit" name="budgetsubmit" class="budget" value="Refresh">
    <?php if(isset($_REQUEST['budgetsubmit'])) { ?>
       <input type="submit" value="Download Budget" class="downloadexcel" name="downloadexcel">
       <?php  }  ?>
    </form>
    </div>
</body>
</html>