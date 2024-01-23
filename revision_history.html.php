<<<<<<< HEAD
<?php
require "navbar.html.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "persons";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
    
  if (isset($_POST['delete_row'])) {
    $delete_id = $_POST['delete_row'];
    $delete_query = "DELETE FROM revision_history WHERE sno = '$delete_id'";
    $result = mysqli_query($conn, $delete_query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

if (isset($_REQUEST['historysubmit'])) {
    $notes = (isset($_REQUEST['notes'])  ? $_REQUEST['notes'] : ' - ');
    $description = (isset($_REQUEST['description'])  ? $_REQUEST['description'] : ' - ');
    $historyshow = "INSERT INTO `revision_history` (`Notes`, `Description`) VALUES ('$notes', '$description')";
    $historyresult = mysqli_query($conn, $historyshow);
} else {
    echo 'empty';
}

$historyshow = "SELECT * FROM revision_history";
$historyresult = mysqli_query($conn, $historyshow);
    
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

<div class="container"><br><br>
  <h2>Revision History</h2>

  <form action="" method="POST" class="search-form">
    <input type="text" name="notes" placeholder="Notes..." required>
    
    <textarea  placeholder="Description..." name="description" required id="" cols="60" rows="10"></textarea>
   
    <input type="submit" value="Add" name="historysubmit" class="historysubmit">
  </form>

  <table class="responsive-table">
    <thead>
      <tr class="table-header">
        <th>Sno</th>
        <th>Notes</th>
        <th>Description</th>
        
        
        <th>DELETE</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    if ($historyresult && mysqli_num_rows($historyresult) > 0) {
        $sno = 0 ;
        while ($row = mysqli_fetch_assoc($historyresult)) { ?>
            <tr class="table-row">
                <td data-label="SNO"><?php echo ++$sno ; ?></td>
                <td><?php if (isset($row["Notes"])) { echo $row["Notes"]; } ?></td>
                <td data-label="Description"><?php if (isset($row["Description"])) { echo $row["Description"]; } ?></td>
                
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

</html>
=======
<?php
require "navbar.html.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "persons";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
    
  if (isset($_POST['delete_row'])) {
    $delete_id = $_POST['delete_row'];
    $delete_query = "DELETE FROM revision_history WHERE sno = '$delete_id'";
    $result = mysqli_query($conn, $delete_query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

if (isset($_REQUEST['historysubmit'])) {
    $notes = (isset($_REQUEST['notes'])  ? $_REQUEST['notes'] : ' - ');
    $description = (isset($_REQUEST['description'])  ? $_REQUEST['description'] : ' - ');
    $historyshow = "INSERT INTO `revision_history` (`Notes`, `Description`) VALUES ('$notes', '$description')";
    $historyresult = mysqli_query($conn, $historyshow);
} else {
    echo 'empty';
}

$historyshow = "SELECT * FROM revision_history";
$historyresult = mysqli_query($conn, $historyshow);
    
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

<div class="container"><br><br>
  <h2>Revision History</h2>

  <form action="" method="POST" class="search-form">
    <input type="text" name="notes" placeholder="Notes..." required>
    
    <textarea  placeholder="Description..." name="description" required id="" cols="60" rows="10"></textarea>
   
    <input type="submit" value="Add" name="historysubmit" class="historysubmit">
  </form>

  <table class="responsive-table">
    <thead>
      <tr class="table-header">
        <th>Sno</th>
        <th>Notes</th>
        <th>Description</th>
        
        
        <th>DELETE</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    if ($historyresult && mysqli_num_rows($historyresult) > 0) {
        $sno = 0 ;
        while ($row = mysqli_fetch_assoc($historyresult)) { ?>
            <tr class="table-row">
                <td data-label="SNO"><?php echo ++$sno ; ?></td>
                <td><?php if (isset($row["Notes"])) { echo $row["Notes"]; } ?></td>
                <td data-label="Description"><?php if (isset($row["Description"])) { echo $row["Description"]; } ?></td>
                
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

</html>
>>>>>>> afd24e9 (Sameer)
