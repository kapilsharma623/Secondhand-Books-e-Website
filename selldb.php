<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://use.fontawesome.com/c8f2e390c3.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@100&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/sell.css">
<title>Sell Books</title>
</head>
<body>


<?php
$email=$_SESSION['name'];

$bookname=$_POST['profilebookname'];
$subject=$_POST['profilesubject'];
$author=$_POST['profileauthor'];
$edition=$_POST['profileedition'];
$sellprice=$_POST['profilesellprice'];
$marketprice=$_POST['profilemarketprice'];


$host="127.0.0.1:3325";
$username="root";
$dbpassword="";
$db="book";


if($_SESSION['name']==null)
{
  ?>
  <script>
  alert("Not able to update,Login First");
  window.location = 'http://localhost/bookstore/index.php';
  </script>
  <?php
}
else
{
    if(isset($_POST['profilesubmit']))
{
   $file_name=$_FILES['file']['name'];
   $file_t=$_FILES['file']['type'];
   $file_s=$_FILES['file']['size'];
   $file_item_loc=$_FILES['file']['tmp_name'];
   $file_store="upload/".$file_name;  
   move_uploaded_file($file_item_loc,$file_store);
}

  if(isset($_POST['profilesubmit']))
{ 
$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$search="SELECT * FROM login WHERE email LIKE '$email';";
$query=mysqli_query($conn,$search);
if($query==true)
{
    $que="INSERT INTO sellbook (email , bookname , subject , author , edition , sellingprice,image) 
    VALUES ('$email','$bookname','$subject','$author','$edition','$sellprice','$file_name')";
$qu=mysqli_query($conn,$que) or die("query failed");
if($qu==true)
{
  ?>
  <script>
      alert("Your Book has been added in BookStore,Thank You..");
      window.location = 'http://localhost/bookstore/store.php';
  </script>
<?php
}
else
{
    ?>
    <script>
        alert("Error in adding to BookStore");
    </script>
  <?php
}

}
else
{
    ?>
    <script>
        alert("Login inorder to update");
    </script>
  <?php
}
}

}





?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>