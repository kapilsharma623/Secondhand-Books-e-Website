<?php
$email=$_POST['email'];
$password=$_POST['password'];
$registerbtn=$_POST['register'];
$backtologinbtn=$_POST['backtologin'];
$loginbtn=$_POST['login'];


if (isset($registerbtn)) {
    header("Location: http://localhost/sbook/register.php"); 
  }
  if (isset($backtologinbtn)) {
    header("Location: http://localhost/sbook/login.html"); 
  }

  if (isset($loginbtn))
{
//$host="sql211.epizy.com";
//$username="epiz_26057781";
//$dbpassword="BOG5lrrAbUxu4b";
//$db="epiz_26057781_resume";

$host="127.0.0.1:3325";
$username="root";
$dbpassword="";
$db="book";
$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$que="SELECT * FROM login WHERE email LIKE '{$email}' AND password LIKE '{$password}';";
$qu=mysqli_query($conn,$que) or die("query failed");
if(mysqli_num_rows($qu)>0)
{

    header("Location: http://kapilsharma.rf.gd/sbook/store.html"); 
           
 }
 else
{
    echo "<h3>Incorrect,Register inorder to Login</h3>";
}

mysqli_close($conn);

}


 
  
?>




  