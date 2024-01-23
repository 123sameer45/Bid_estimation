<<<<<<< HEAD
<?php
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
    
  if (isset($_POST['delete_row'])) {
    $delete_id = $_POST['delete_row'];
    $delete_query = "DELETE FROM addperson WHERE sno = '$delete_id'";
    $result = mysqli_query($conn, $delete_query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

        if(isset($_REQUEST['adminsearch'])){
            $search_access = (isset($_REQUEST['search_access'])  ? $_REQUEST['search_access'] : ' ');
            $search_email = (isset($_REQUEST['search_email'])  ? $_REQUEST['search_email'] : ' ');
            $search_name = (isset($_REQUEST['search_name'])  ? $_REQUEST['search_name'] : ' '); 
            $search_date = (isset($_REQUEST['search_date'])  ? $_REQUEST['search_date'] : ' ');  
            $adminshow = "SELECT * FROM addperson  WHERE access = '$search_access' OR email = '$search_email' OR name = '$search_name' OR entry_date = ' $search_date'   ";
            $adminresult = mysqli_query($conn, $adminshow);
        } else if (isset($_REQUEST['all_data'])) {
            $adminshow = "SELECT * FROM addperson";
            $adminresult = mysqli_query($conn, $adminshow);
        } 
        else {
            $adminshow = "SELECT * FROM addperson";
            $adminresult = mysqli_query($conn, $adminshow);
        }
 

       
      
mysqli_close($conn);
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allpersons.css">
    <title>Document</title>
</head>

<body>

<div class="container">
  <h2>Admin Panel <small>West Tech</small></h2>

  <form action="" method="POST" class="search-form">
    <select name="search_access">
      <option value="">---</option>
      <option value="Admin">Admin</option>
      <option value="Manager">Manager</option>
      <option value="Engr">Engr</option>
      <option value="Visitor">Visitor</option>
      <option value="Tester">Tester</option>
    </select>
    <input type="text" placeholder="Name" name="search_name">
    <input type="text" placeholder="Email" name="search_email">
    <input type="text" placeholder="Entry Date" name="search_date">
    <button name="all_data">All Data</button>
    <button name="sheets"><a href="http://localhost/erp/jobinfo.html.php" style="text-decoration:none;color:black;">Sheets</a></button>
   
    <input type="submit" value="Search" name="adminsearch">
  </form>

  <table class="responsive-table">
    <thead>
      <tr class="table-header">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Access</th>
        <th>Entry Date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (mysqli_num_rows($adminresult) > 0) {
        while ($row = mysqli_fetch_assoc($adminresult)) { ?>
          <tr class="table-row">
            <td data-label="ID"><?php if (isset($row["sno"])) { echo $row["sno"]; } ?></td>
            <td data-label="Name"><?php if (isset($row["name"])) { echo $row["name"]; } ?></td>
            <td data-label="Email"><?php if (isset($row["email"])) { echo $row["email"]; } ?></td>
            <td data-label="Password"><?php if (isset($row["password"])) { echo $row["password"]; } ?></td>
            <td data-label="Access"><?php if (isset($row["access"])) { echo $row["access"]; } ?></td>
            <td data-label="Entry Date" ><?php if (isset($row["entry_date"])) { echo $row["entry_date"]; } ?></td>
            <td data-label="Edit"><a href="http://localhost/erp/edit.html.php?id=<?php echo $row['sno'] ; ?>"  style="text-decoration:none; background-color: rgb(24, 119, 24); color:white; padding: 20%; border-radius: 20%;">Edit</a></td>
            <td data-label="Delete">
                <form action="" method="post">
                    <input type="hidden" name="delete_row" value="<?php echo $row['sno']; ?>">
                    <button type="submit" style="background-color: rgb(255, 0, 0); color: white; padding: 12%; border-radius: 20%;" onclick="return confirm('Are you sure you want to delete this row?');">Delete</button>
                </form>
            </td>
          </tr>
      <?php
        }
      } else {
        echo "0 results";
      }
      ?>
    </tbody>
  </table>
</div>


</body>

=======
<?php
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
    
  if (isset($_POST['delete_row'])) {
    $delete_id = $_POST['delete_row'];
    $delete_query = "DELETE FROM addperson WHERE sno = '$delete_id'";
    $result = mysqli_query($conn, $delete_query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

        if(isset($_REQUEST['adminsearch'])){
            $search_access = (isset($_REQUEST['search_access'])  ? $_REQUEST['search_access'] : ' ');
            $search_email = (isset($_REQUEST['search_email'])  ? $_REQUEST['search_email'] : ' ');
            $search_name = (isset($_REQUEST['search_name'])  ? $_REQUEST['search_name'] : ' '); 
            $search_date = (isset($_REQUEST['search_date'])  ? $_REQUEST['search_date'] : ' ');  
            $adminshow = "SELECT * FROM addperson  WHERE access = '$search_access' OR email = '$search_email' OR name = '$search_name' OR entry_date = ' $search_date'   ";
            $adminresult = mysqli_query($conn, $adminshow);
        } else if (isset($_REQUEST['all_data'])) {
            $adminshow = "SELECT * FROM addperson";
            $adminresult = mysqli_query($conn, $adminshow);
        } 
        else {
            $adminshow = "SELECT * FROM addperson";
            $adminresult = mysqli_query($conn, $adminshow);
        }
 

       
      
mysqli_close($conn);
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allpersons.css">
    <title>Document</title>
</head>

<body>

<div class="container">
  <h2>Admin Panel <small>West Tech</small></h2>

  <form action="" method="POST" class="search-form">
    <select name="search_access">
      <option value="">---</option>
      <option value="Admin">Admin</option>
      <option value="Manager">Manager</option>
      <option value="Engr">Engr</option>
      <option value="Visitor">Visitor</option>
      <option value="Tester">Tester</option>
    </select>
    <input type="text" placeholder="Name" name="search_name">
    <input type="text" placeholder="Email" name="search_email">
    <input type="text" placeholder="Entry Date" name="search_date">
    <button name="all_data">All Data</button>
    <button name="sheets"><a href="http://localhost/erp/jobinfo.html.php" style="text-decoration:none;color:black;">Sheets</a></button>
   
    <input type="submit" value="Search" name="adminsearch">
  </form>

  <table class="responsive-table">
    <thead>
      <tr class="table-header">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Access</th>
        <th>Entry Date</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (mysqli_num_rows($adminresult) > 0) {
        while ($row = mysqli_fetch_assoc($adminresult)) { ?>
          <tr class="table-row">
            <td data-label="ID"><?php if (isset($row["sno"])) { echo $row["sno"]; } ?></td>
            <td data-label="Name"><?php if (isset($row["name"])) { echo $row["name"]; } ?></td>
            <td data-label="Email"><?php if (isset($row["email"])) { echo $row["email"]; } ?></td>
            <td data-label="Password"><?php if (isset($row["password"])) { echo $row["password"]; } ?></td>
            <td data-label="Access"><?php if (isset($row["access"])) { echo $row["access"]; } ?></td>
            <td data-label="Entry Date" ><?php if (isset($row["entry_date"])) { echo $row["entry_date"]; } ?></td>
            <td data-label="Edit"><a href="http://localhost/erp/edit.html.php?id=<?php echo $row['sno'] ; ?>"  style="text-decoration:none; background-color: rgb(24, 119, 24); color:white; padding: 20%; border-radius: 20%;">Edit</a></td>
            <td data-label="Delete">
                <form action="" method="post">
                    <input type="hidden" name="delete_row" value="<?php echo $row['sno']; ?>">
                    <button type="submit" style="background-color: rgb(255, 0, 0); color: white; padding: 12%; border-radius: 20%;" onclick="return confirm('Are you sure you want to delete this row?');">Delete</button>
                </form>
            </td>
          </tr>
      <?php
        }
      } else {
        echo "0 results";
      }
      ?>
    </tbody>
  </table>
</div>


</body>

>>>>>>> afd24e9 (Sameer)
</html>