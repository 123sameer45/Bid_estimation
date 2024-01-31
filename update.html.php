<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_SESSION['job_name'];
if(isset($_POST['upd_job_info'])){
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    
    $upd_location = $_POST['upd_location'];
    $upd_distance_to_site = $_POST['upd_distance_to_site'];
    $upd_contractor = $_POST['upd_contractor'];
    $upd_engr = $_POST['upd_engr'];
    $upd_published_budget = $_POST['upd_published_budget'];
    $upd_due_date = $_POST['upd_due_date'];
    $upd_time = $_POST['upd_time'];
    $upd_project_start = $_POST['upd_project_start'];
    $upd_project_finish = $_POST['upd_project_finish'];
    $upd_days = $_POST['upd_days'];
    $upd_weeks = $_POST['upd_weeks'];
    $upd_estimated_field_labor_hourly_cost = $_POST['upd_estimated_field_labor_hourly_cost'];
    $upd_new_steel_pricing = $_POST['upd_new_steel_pricing'];
    $upd_rtu_3to10 = $_POST['upd_rtu_3to10'];
    $upd_rtu_10andabove = $_POST['upd_rtu_10andabove'];
    $upd_rtuwithpe_3to10 = $_POST['upd_rtuwithpe_3to10'];
    $upd_rtuwithpe_10andabove = $_POST['upd_rtuwithpe_10andabove']; 
    $upd_entirejobtotalton_3to10 = $_POST['upd_entirejobtotalton_3to10'];
    $upd_entirejobtotalton_10andabove = $_POST['upd_entirejobtotalton_10andabove'];
    $upd_floors_3to10 = $_POST['upd_floors_3to10'];
    $upd_floors_10andabove = $_POST['upd_floors_10andabove'];

    $update = "UPDATE job_info SET  
    LOCATION = '$upd_location', 
    DISTANCE_TO_SITE = '$upd_distance_to_site',
    CONTRACTOR = '$upd_contractor',
    ENGR = '$upd_engr',
    PUBLISHED_BUDGET = '$upd_published_budget',
    DUE_DATE = '$upd_due_date',
    TIME = '$upd_time',
    PROJECT_START = '$upd_project_start',
    PROJECT_FINISH = '$upd_project_finish',
    Days = '$upd_days',
    Weeks = '$upd_weeks',
    Estimated_Field_Labor_Hourly_Cost = '$upd_estimated_field_labor_hourly_cost',
    New_steel_Pricing_lb = '$upd_new_steel_pricing',
    Rtu_3to10 = '$upd_rtu_3to10',
    Rtu_10andabove = '$upd_rtu_10andabove',
    Rtuwithpe_3to10 = '$upd_rtuwithpe_3to10',
    Rtuwithpe_10andabove = '$upd_rtuwithpe_10andabove',
    EntireJobTotalTon_3to10 = '$upd_entirejobtotalton_3to10',
    EntireJobTotalTon_10andabove = '$upd_entirejobtotalton_10andabove',
    Floors_3to10 = '$upd_floors_3to10',
    Floors_10andabove = '$upd_floors_10andabove'
WHERE JOB_NAME = '$dbname'";

$result = mysqli_query($conn,$update);
if($result){
   echo "<script>alert('Data Updated Successfully');</script>";
   echo "<script>window.location.replace('index.html.php');</script>";
} else{
   echo "<script>alert('Error Updating Data');</script>";
}


mysqli_close($conn);

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update job info</title>
</head>
<body>
<div class="container">
      <div class="text" style="color:white;">
         <p>UPDATE "<b><?php echo $_SESSION['job_name']; ?></b>"</p>
        
      </div>
      
      <form action="#" method="POST">
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="job_name" readonly value=<?php echo $_SESSION['job_name'];  ?>>
               <div class="underline"></div>
               <!-- <label for="">JOB NAME</label> -->
            </div>
            <div class="input-data">
               <input type="text" name="upd_location" required>
               <div class="underline"></div>
               <label for="">LOCATION</label>
            </div>
            
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_distance_to_site" required>
               <div class="underline"></div>
               <label for="">DISTANCE TO SITE</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_contractor" required>
               <div class="underline"></div>
               <label for="">CONTRACTOR</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_engr" required>
               <div class="underline"></div>
               <label for="">ENGR</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_published_budget" required>
               <div class="underline"></div>
               <label for="">PUBLISHED BUDGET</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_due_date" required>
               <div class="underline"></div>
               <label for="">DUE DATE</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_time" required>
               <div class="underline"></div>
               <label for="">TIME</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_project_start" required>
               <div class="underline"></div>
               <label for="">PROJECT START</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_project_finish" required>
               <div class="underline"></div>
               <label for="">PROJECT FINISH</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_days" required>
               <div class="underline"></div>
               <label for="">Days</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_weeks" required>
               <div class="underline"></div>
               <label for="">Weeks</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_estimated_field_labor_hourly_cost" required>
               <div class="underline"></div>
               <label for="">Estimated Field Labor Hourly Cost</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_new_steel_pricing" required>
               <div class="underline"></div>
               <label for="">New steel Pricing $/lb</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_rtu_3to10" required>
               <div class="underline"></div>
               <label for=""># RTU (3-10) Ton</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_rtu_10andabove" required>
               <div class="underline"></div>
               <label for=""># RTU 10 and above Ton</label>
            </div>
         </div>
        
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_rtuwithpe_3to10" required>
               <div class="underline"></div>
               <label for=""># RTU with PE  (3-10) Ton</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_rtuwithpe_10andabove" required>
               <div class="underline"></div>
               <label for=""># RTU with PE  10 and above Ton</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_entirejobtotalton_3to10" required>
               <div class="underline"></div>
               <label for="">Entire job Total Ton  (3-10) Ton</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_entirejobtotalton_10andabove" required>
               <div class="underline"></div>
               <label for="">Entire job Total Ton   10 and above Ton</label>
            </div>
         </div>

         <div class="form-row">
            <div class="input-data">
               <input type="text" name="upd_floors_3to10" required>
               <div class="underline"></div>
               <label for="">Floors  (3-10) Ton</label>
            </div>
            <div class="input-data">
               <input type="text" name="upd_floors_10andabove" required>
               <div class="underline"></div>
               <label for="">Floors   10 and above Ton</label>
            </div>
         </div>

           
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="upd_job_info" value="Update">
               </div>
            </div>
      </form>
      </div>
</body>
</html>