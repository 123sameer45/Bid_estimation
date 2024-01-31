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
    $notes = (isset($_REQUEST['notes']) ? $_REQUEST['notes'] : ' - ');
    $description = (isset($_REQUEST['description']) ? $_REQUEST['description'] : ' - ');
    $historyshow = "INSERT INTO `revision_history` (`Notes`, `Description`) VALUES ('$notes', '$description')";
    $historyresult = mysqli_query($conn, $historyshow);
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
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <style>
    .revisionNotesInput {
      width: calc(110% - 1px) !important;
      font-size: 14px !important;
    }

    input::placeholder,
    textarea::placeholder {
      font-size: 14px;
      padding-left: .5rem;
      padding-top: .2rem;
    }
    
    input,
    textarea {
      font-size: 14px;
      padding-left: .5rem;
      padding-top: .2rem;
      border-radius: 10px;
      width : 150% !important;
    }

    .historysubmit {
      margin-top: 0.7rem;
    }

    .responsive-table {
      position: relative !important;
      left: 10px !important;
      width: 180% !important;
      padding: 1rem;
      border-collapse: collapse;
      margin-top: 20px;
      overflow-x: auto;
      max-width: 955px !important;
    }
    .container{
      margin-top : 8rem !important;
    }
    .search-form{
      max-width: 1210px !important;
    }
    .search-form input{
      width : 200% !important;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Revision History</h2>

    <form action="" method="POST" class="search-form" style="padding : 1rem">
      <input class="revisionNotesInput" type="text" name="notes" placeholder="Notes..." required
       >

      <textarea placeholder="Description..." name="description" required id="" cols="150" rows="3"></textarea>
      <!-- <br> -->
      <input type="submit" value="Add" name="historysubmit" class="historysubmit">
    </form>

    <table class="responsive-table">
      <thead>
        <tr class="table-header">
          <th>Sno</th>
          <th>Notes</th>
          <th>Description</th>
          <th></th>
          <th>DELETE</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if ($historyresult && mysqli_num_rows($historyresult) > 0) {
          $sno = 0;
          while ($row = mysqli_fetch_assoc($historyresult)) { ?>
            <tr class="table-row">
              <td data-label="SNO">
                <?php echo ++$sno; ?>
              </td>
              <td>
                <?php if (isset($row["Notes"])) {
                  echo $row["Notes"];
                } ?>
              </td>
              <td colspan="2" data-label="Description">
                <?php if (isset($row["Description"])) {
                  echo $row["Description"];
                } ?>
              </td>

              <td data-label="Delete">
                <form action="" method="post">
                  <input type="hidden" name="delete_row" value="<?php echo $row['sno']; ?>">
                  <button type="submit"
                    style="background-color: rgb(220, 0, 0); color: white; padding:4% 6%; border-radius: 20%;"
                    onclick="return confirm('Are you sure you want to delete this row?');">Delete</button>
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