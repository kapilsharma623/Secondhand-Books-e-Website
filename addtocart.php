<?php
session_start();
?>
<?php
$book=$_GET['book'];
$subject=$_GET['subject'];
$author=$_GET['author'];
$edition=$_GET['edition'];
$sp= $_GET['price'];
$img=$_GET['image'];
$des=$_GET['des'];


 $host="127.0.0.1:3325";
 $username="root";
 $dbpassword="";
 $db="book";
 $email=$_SESSION['name'];


$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$search="INSERT INTO cart (email,bookname,subject,author,edition,sellingprice,image,description) 
VALUES ('$email','$book','$subject','$author','$edition','$sp','$img','$des')";
if(mysqli_query($conn,$search)==true)
{
   ?>
   <script>
     window.location = 'http://localhost/bookstore/cart.php';
</script>
   <?php
}
else
{
    echo("Failed to Add");
}




?>