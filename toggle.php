<?php 
session_start();
?>
<?php

if (isset($_POST['register']))
{
   header("Location: http://localhost/bookstore/register.php");   
}

$email=$_POST['email'];
$password=$_POST['password'];
 if (isset($_POST['login']))
 {
 /*$host="sql211.epizy.com";
 $username="epiz_26057781";
 $dbpassword="BOG5lrrAbUxu4b";
 $db="epiz_26057781_resume";*/
 
 $host="127.0.0.1:3325";
 $username="root";
 $dbpassword="";
 $db="book";
 $conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
 $que="SELECT * FROM login WHERE email LIKE '{$email}' AND password LIKE '{$password}';";
 $qu=mysqli_query($conn,$que) or die("query failed");
 if(mysqli_num_rows($qu)>0)
 {
   $_SESSION['name']=$email;
   if(isset($_SESSION['name']))
   {
      $_SESSION['name']=$email;
   }
   else
   {
     $_SESSION['name']="Login";

   }
     header("Location: http://localhost/bookstore/store.php"); 
            
  }
  else
 {
    ?>
     <script>
        alert("Incorrect,Register inorder to Login");
        window.location = 'http://localhost/bookstore/index.php';
      </script>

     <?php

 }
 
 mysqli_close($conn);
 
 }

  
?>




  