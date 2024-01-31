<?php
if(isset($_REQUEST['add'])){
  $host = 'localhost' ;
$username = 'root' ;
$pass = '' ;
$db = 'persons' ;

$conn = mysqli_connect($host , $username , $pass ,$db ) ;
  
if(empty($_REQUEST['username'])  OR empty($_REQUEST['email']) OR
    empty($_REQUEST['password']) OR empty($_REQUEST['repeat_password']) OR empty($_REQUEST['access']) ){
 
      echo "<script>alert('some fields are  missing');</script>" ;
} else{
      $name = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $repeat_password = $_REQUEST['repeat_password'];
      $access = $_REQUEST['access'];

      if($password == $repeat_password){

          if(strlen($email) > 50 OR strlen($name) > 50){
            echo "<script>alert('email and username  should be smaller than 50 characters');</script>" ;
          } else {


            $validate = "SELECT *  FROM addperson where email = '$email' " ;
            $validate_result = mysqli_query($conn , $validate);
            
            if(mysqli_num_rows($validate_result) > 0){
              echo "<script>alert('email are already exist');</script>";
            } else {
              
              $insert = "INSERT INTO addperson (name , email , password , access)
              VALUES ('$name' , '$email' , '$password' , '$access') " ;
           if(mysqli_query($conn , $insert)){
            
             echo "<script>window.location.replace('http://localhost/erp/login.html.php');</script>" ;
             // echo "fe";
           }
           
            }
            }
         
          
                  
                  
        }else{
          echo "<script>alert('password are not match');</script> " ;
        }
}

}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Person</p>

                                    <form class="mx-1 mx-md-4" method="POST">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="username"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example1c">Person Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="form3Example3c" name="email"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example3c">Person Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" name="password"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example4c">Person Password</label>
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" name="repeat_password"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Repeat person
                                                    password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                
                                            <select name="access" id="" style="width:100%;border-radius:10%;padding:10px;">
                                              <option value="admin">Admin</option>
                                              <!-- <option value="manager">Manager</option> -->
                                              <option value="user">User</option>
                                            </select><br>
                                                <label class="form-label" for="form3Example4cd">Person Access</label>
                                            </div>
                                        </div>
                                       


                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" class="btn btn-primary btn-lg register" name="add"
                                                value="Add">
                                            <a style="margin-left:5%;" href="http://localhost/erp/login.html.php"
                                                class="btn btn-primary btn-lg register" name="login">Log in</a>
                                        </div>


                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="logo.png" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
