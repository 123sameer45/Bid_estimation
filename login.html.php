<?php
if(isset($_SESSION['username'])){
  echo "<script>window.location.replace('http://localhost/erp/GrowMark-1.0.0/index.html');</script>" ;
}

session_start();

if(isset($_REQUEST['login'])){
  $host = 'localhost' ;
$username = 'root' ;
$pass = '' ;
$db = 'persons' ;

$conn = mysqli_connect($host , $username , $pass ,$db ) ;


  if(empty($_REQUEST['email']) OR empty($_REQUEST['password']) ){
   
        echo "<script>alert('some fields are  missing');</script>" ;
  } else{

            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            $login = "SELECT * FROM addperson WHERE email = '$email' ";
            $result = mysqli_query($conn , $login);
            $row = mysqli_fetch_assoc($result);
            
            
            if($row >0){
                if($password == $row['password'] &&   $email == $row['email']){
                      $_SESSION['username'] = $row['name'];
                      $_SESSION['sno'] = $row['sno'] ;
                      $_SESSION['access'] = $row['access'];
                      $_SESSION['email'] = $row['email'];
                     
                      


                      // header("location : https://www.google.com");
                     echo "<script>window.location.replace('http://localhost/erp/jobinfo.html.php');</script>" ;
                      
            } else{
              echo "<script>alert('invalid user ');</script>" ;
            }
          } else {
            echo "<script>alert('invalid user  ');</script>" ;
          }

  } 
}
?>

<!-- Rest of your HTML code remains unchanged -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  <form method="POST" >
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" name="email" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="password" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
     
    </div>

   
  </div>

  <!-- Submit button -->
  <input type="submit" class="btn btn-primary btn-block mb-4 login" name="login" value="Log in">

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="http://localhost/erp/registration.html.php">Register</a></p>
   

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>