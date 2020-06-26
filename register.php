<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Register Page</title>
</head>
<body>

    <div class="sidenav">
        <div class="login-main-text pl-5">
           <h2>SECOND HAND BOOKS<br> Register Page</h2>
           <p>Register from here to access.</p>
        </div>
     </div>
     <div class="main">
        <div class="col-md-6 col-sm-12 mt-3">
           <div class="register-form pl-2 pt-4">
              <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                 <div class="form-group">
                    <input type="name" class="form-control" placeholder="Enter Full-Name" name="registername">
                 </div>
                 
                <div class="form-group">
                     <input type="email" class="form-control" placeholder="Enter Email-Id" name="registeremail">
                 </div>

                 <div class="form-group">
                    <input type="password" class="form-control" placeholder="Create Password" name="registerpassword">
                 </div>
                 <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="registerconfirmpassword">
                 </div>
                <div class=" mb-3">
                    <div class="form-check radio-item d-inline-block">
                        <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios1" value="Male" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Male
                        </label>
                      </div>
                      <div class="form-check radio-item d-inline-block">
                        <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios2" value="Female">
                        <label class="form-check-label" for="exampleRadios2">
                          Female
                        </label>
                      </div>
                </div>
                  <div class=" mt-2 mb-4">
                  <button type="submit" class="btn btn-secondary" name="registercomplete">Register</button>
                 <button type="submit" class="btn btn-black" name="backtologin">Back to Login</button>
                  </div>
                
<?php
if (isset($_POST['registercomplete'])) 
{
 $registername=$_POST['registername'];
 $registeremail=$_POST['registeremail'];
 $registerpassword=$_POST['registerpassword'];
 $registerconfirmpassword=$_POST['registerconfirmpassword'];
 $exampleRadios=$_POST['exampleRadios'];
 if($registerpassword==$registerconfirmpassword)
{
  $host="127.0.0.1:3325";
  $username="root";
  $dbpassword="";
  $db="book";

  $conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
  $search="SELECT * FROM login WHERE email LIKE '$registeremail';";
  $registerquery=mysqli_query($conn,$search);
  if(mysqli_num_rows($search)>0)
  {
    echo "<h3>Email already exists</h3>";
  }
  else
  {
  $que="INSERT INTO login ( name, gender,email, password)
  VALUES ('$registername', '$exampleRadios', '$registeremail', '$registerpassword');";
   $qu=mysqli_query($conn,$que) or die("query failed");
   if($qu==true)
   {
      ?>
  <script>
     alert("Registration Completed");
  </script>
   <?php
   }
   else{
      ?>
   <script>
     alert("Registration Failed");
  </script>
   <?php
   }
  }
    mysqli_close($conn);
   }
    else
    {
    echo "<h3>Password Not Matched</h3>";
    }

  }
  


?>

             </form>
          </div>
        </div>
     </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>