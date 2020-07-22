<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://use.fontawesome.com/c8f2e390c3.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@100&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<title>Register Page</title>
</head>
<body>

    <div class="sidenav">
        <div class="login-main-text pl-5">
         <span class="book" style="font-family: 'Piedra', cursive; font-size: 70px;">Book</span><span class="store" style="font-family: 'Piedra', cursive;font-size: 70px;">Store</span>
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
  
if(isset($_POST['backtologin']))
{
   header("Location: http://localhost/bookstore/index.php"); 
}

$registername=$_POST['registername'];
$registeremail=$_POST['registeremail'];
$registerpassword=$_POST['registerpassword'];
$registerconfirmpassword=$_POST['registerconfirmpassword'];
$exampleRadios=$_POST['exampleRadios'];
if($registername!=null and $registeremail!=null and $registerpassword!=null and $registerconfirmpassword!=null and $exampleRadios!=null)
{
    if (isset($_POST['registercomplete'])) 
   {
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
     ?>
<script>
   alert("Email already exists");
</script>
       <?php
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
          ?>
          <script>
        alert("Password Not Matched");
     </script>
          <?php
       }
   
    }
    
  
}
else
{
   if(isset($_POST['registercomplete']))
   {
      ?>
      <script>
         alert("Incomplete");
      </script>
          <?php
   }
  
}
?>
   


             </form>
          </div>
        </div>
     </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>