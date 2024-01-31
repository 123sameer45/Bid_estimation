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
    $delete_query = "DELETE FROM price_increase WHERE sno = '$delete_id'";
    $result = mysqli_query($conn, $delete_query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

if (isset($_REQUEST['pricesubmit'])) {
    $date = (isset($_REQUEST['date'])  ? $_REQUEST['date'] : ' ');
    $notified_by = (isset($_REQUEST['notified_by'])  ? $_REQUEST['notified_by'] : ' ');
    $product = (isset($_REQUEST['product'])  ? $_REQUEST['product'] : ' '); 
    $email_aj = (isset($_REQUEST['email_aj'])  ? $_REQUEST['email_aj'] : ' '); 
    $comments = (isset($_REQUEST['comments'])  ? $_REQUEST['comments'] : ' ');  
    $priceshow = "INSERT INTO `price_increase` (`DATE`, `NOTIFIED_BY`, `PRODUCT`, `EMAIL_AJ`, `COMMENTS`) VALUES ('$date', '$notified_by', '$product', '$email_aj', '$comments')";
    $priceresult = mysqli_query($conn, $priceshow);
} 

$priceshow = "SELECT * FROM price_increase";
$priceresult = mysqli_query($conn, $priceshow);
    
mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allpersons.css">
    <link rel="stylesheet" href="style.css">
    <title>Price Increase</title>
</head>
<style>
  /* Adjust these styles based on your design */


</style>
<body>
  <div class="container" ><br><br>
    <h2 style="margin-top : 3rem !important;">Price Increase</h2>

    <form action="" method="POST" class="search-forms" >
      <input type="date" name="date" placeholder="DATE" required>
      <input type="text" placeholder="NOTIFIED BY" name="notified_by" required>
      <input type="text" placeholder="PRODUCT" name="product" required>
      <input type="text" placeholder="EMAIL AJ" name="email_aj" required>
      <input type="text" placeholder="COMMENTS" name="comments" required>
    
    
      <input type="submit" value="Add" name="pricesubmit" class="pricesubmits">
    </form>

    <table class="responsive-table" style="position : relative !important; right : 12.5rem !important; overflow-y : scroll;">
      <thead>
        <tr class="table-header" style="background-color:  #48494B !important">
          <th>ID</th>
          <th>DATE</th>
          <th>NOTIFIED BY</th>
          <th>PRODUCT </th>
          <th>EMAIL AJ</th>
          <th>COMMENTS</th>
          
          <th>DELETE</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
      if ($priceresult && mysqli_num_rows($priceresult) > 0) {
          // $sno = 0 ;
          while ($row = mysqli_fetch_assoc($priceresult)) { ?>
              <tr class="table-row">
                
                  <td data-label="SNO"><?php echo $row['sno'] ; ?></td>
                  <td data-label="DATE"><?php if (isset($row["DATE"])) { echo $row["DATE"]; } ?></td>
                  <td data-label="NOTIFIED BY"><?php if (isset($row["NOTIFIED_BY"])) { echo $row["NOTIFIED_BY"]; } ?></td>
                  <td data-label="PRODUCT"><?php if (isset($row["PRODUCT"])) { echo $row["PRODUCT"]; } ?></td>
                  <td data-label="EMAIL AJ"><?php if (isset($row["EMAIL_AJ"])) { echo $row["EMAIL_AJ"]; } ?></td>
                  <td data-label="COMMENTS" ><?php if (isset($row["COMMENTS"])) { echo $row["COMMENTS"]; } ?></td>
                  <td data-label="Delete">
                      <form action="" method="post">
                          <input type="hidden" hidden name="delete_row" onclick="return confirm('Are you sure you want to delete this row?');" value="<?php echo $row['sno']; ?>">
                          <button type="submit" style="background-color: rgb(190, 0, 0); color: white; padding: 12%; border-radius: 20%;" onclick="return confirm('Are you sure you want to delete this row?');">Delete</button>
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