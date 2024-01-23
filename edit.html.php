<<<<<<< HEAD
<?php
if (isset($_GET['id'])) {
  // Retrieve the 'id' value
  $id = $_GET['id'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "persons";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    $update = "SELECT * FROM addperson WHERE sno = '$id' ";

    $upd_result = mysqli_query($conn , $update);
    if(mysqli_num_rows($upd_result) > 0){
      $upd_row = mysqli_fetch_assoc($upd_result);

      
    }  
}

}

if (isset($_POST['upd'])) {
  // Retrieve data from the form
  $id = $_GET['id'];
  $new_name = $_POST['upd_name'];
  $new_email = $_POST['upd_email'];
  $new_access = $_POST['upd_access'];
  $new_password = $_POST['upd_password'];

  // Update the database with the new data
  $update_query = "UPDATE addperson SET name='$new_name', email='$new_email', access='$new_access' , password = '$new_password' WHERE sno='$id'";
  $update_result = mysqli_query($conn, $update_query);
  echo "<script>window.location.replace('http://localhost/erp/allpersons.html.php');</script>";

  if (!$update_result) {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update Registration </title>
 
    <link rel="stylesheet" href="edit.css" />
  </head>
  <body>
    <section class="container">
      <header>Update Information</header>
      <form action="#" class="form" method="POST">
        <div class="input-box">
          <label>Name</label>
          <input type="text" name="upd_name" value="<?php if(isset( $upd_row['name'])){ echo  $upd_row['name'];}   ?>" placeholder="Enter  name" required />
        </div>

        <div class="input-box">
          <label>Email</label>
          <input type="text" name="upd_email" value="<?php if(isset( $upd_row['email'])){ echo  $upd_row['email'];}   ?>"  placeholder="Enter email address" required />
        </div>

       
        <div class="input-box address">
         
          <div class="column">
            <div class="select-box">
              <select name="upd_access" required  >
              <option value="">----</option>
                <option value="admin" >Admin</option>
                <option value="manager"> Manager</option>
                <option value="engr">Engr </option>
                <option value="visitor"> Visitor</option>
              </select>
            </div>
          
          </div>
          
          <div class="input-box">
          <label for="">Password</label>
          <input type="text" name="upd_password" value="<?php if(isset( $upd_row['password'])){ echo  $upd_row['password'];}   ?>" placeholder="Enter your password" required />
            </div>
            
           
          </div>
        </div>
       <input type="submit" name="upd" value="Update">
        
        <a href="http://localhost/erp/allpersons.html.php">Admin Panel</a> 
      </form>
    </section>
  </body>

=======
<?php
if (isset($_GET['id'])) {
  // Retrieve the 'id' value
  $id = $_GET['id'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "persons";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    $update = "SELECT * FROM addperson WHERE sno = '$id' ";

    $upd_result = mysqli_query($conn , $update);
    if(mysqli_num_rows($upd_result) > 0){
      $upd_row = mysqli_fetch_assoc($upd_result);

      
    }  
}

}

if (isset($_POST['upd'])) {
  // Retrieve data from the form
  $id = $_GET['id'];
  $new_name = $_POST['upd_name'];
  $new_email = $_POST['upd_email'];
  $new_access = $_POST['upd_access'];
  $new_password = $_POST['upd_password'];

  // Update the database with the new data
  $update_query = "UPDATE addperson SET name='$new_name', email='$new_email', access='$new_access' , password = '$new_password' WHERE sno='$id'";
  $update_result = mysqli_query($conn, $update_query);
  echo "<script>window.location.replace('http://localhost/erp/allpersons.html.php');</script>";

  if (!$update_result) {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update Registration </title>
 
    <link rel="stylesheet" href="edit.css" />
  </head>
  <body>
    <section class="container">
      <header>Update Information</header>
      <form action="#" class="form" method="POST">
        <div class="input-box">
          <label>Name</label>
          <input type="text" name="upd_name" value="<?php if(isset( $upd_row['name'])){ echo  $upd_row['name'];}   ?>" placeholder="Enter  name" required />
        </div>

        <div class="input-box">
          <label>Email</label>
          <input type="text" name="upd_email" value="<?php if(isset( $upd_row['email'])){ echo  $upd_row['email'];}   ?>"  placeholder="Enter email address" required />
        </div>

       
        <div class="input-box address">
         
          <div class="column">
            <div class="select-box">
              <select name="upd_access" required  >
              <option value="">----</option>
                <option value="admin" >Admin</option>
                <option value="manager"> Manager</option>
                <option value="engr">Engr </option>
                <option value="visitor"> Visitor</option>
              </select>
            </div>
          
          </div>
          
          <div class="input-box">
          <label for="">Password</label>
          <input type="text" name="upd_password" value="<?php if(isset( $upd_row['password'])){ echo  $upd_row['password'];}   ?>" placeholder="Enter your password" required />
            </div>
            
           
          </div>
        </div>
       <input type="submit" name="upd" value="Update">
        
        <a href="http://localhost/erp/allpersons.html.php">Admin Panel</a> 
      </form>
    </section>
  </body>

>>>>>>> afd24e9 (Sameer)
</html>