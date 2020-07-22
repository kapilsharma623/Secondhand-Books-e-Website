<?php
session_start();
?>
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
<link rel="stylesheet" href="store.css">
<title>BookStore</title>
</head>
<body >

<header class="p-0"style="font-family: Open Sans;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span  class="navbar-toggler-icon" ></span>
      </button>
     <a class="navbar-brand mr-auto pl-1" href="#"><span class="book" style="font-family: 'Piedra', cursive;font-weight: 500;
    font-size: 30px;color: #E5E7E9;color: #E5E7E9;">Book </span><span class="store" style="font-family: 'Piedra', cursive;font-weight: 500;
    font-size: 30px;color: #E5E7E9;color: #E5E7E9;">Store</span></a>
   <a href="http://localhost/bookstore/cart.php" class="btn btn-dark mr-1 d-lg-none">
   <i class="fa fa-1x fa-shopping-cart" aria-hidden="true" style="font-size: 25px;"></i>
   <span class='badge badge-warning' id='lblCartCount'> <?php $host="127.0.0.1:3325";
$username="root";
$dbpassword="";
$db="book";
$email=$_SESSION['name'];


$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$search="SELECT * FROM cart WHERE email='$email';";
$query=mysqli_query($conn,$search) or die("query failed");
echo mysqli_num_rows($query);

?> </span></a>
    <a href="http://localhost/bookstore/profile.php" class="btn btn-dark d-lg-none"><i class="fa fa-1x fa-user-circle" aria-hidden="true" style="font-size: 25px;"></i></a>
      
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
            <a class="nav-link text-center" href="http://localhost/bookstore/store.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-center " href="http://localhost/bookstore/trendingbook.php">Best Seller</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  text-center" href="http://localhost/bookstore/categories.php">Categories</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  text-center" href="http://localhost/bookstore/sell.php">Sell Book</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link text-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle-o pr-1" style="font-size:24px"></i>
            <?php 
            if(isset($_SESSION['name']))
            {
               echo $_SESSION['name'];
            }
            else
            {
              echo "User";
         
            }
            ?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="http://localhost/bookstore/profile.php"><i class="fa fa-user pr-3" aria-hidden="true"></i>Profile</a>
           <a class="dropdown-item" href="http://localhost/bookstore/cart.php"><i class="fa fa-shopping-cart pr-3" aria-hidden="true"></i>Cart</a>
           <a class="dropdown-item" href="http://localhost/bookstore/contactpage.php"><i class="fa fa-phone pr-3" aria-hidden="true"></i>Contact Us</a>
           <div class="dropdown-divider"></div>
           <?php
           if(isset($_SESSION['name']))
           {
           }
           else
           {
             ?>
            <a class="dropdown-item" href="http://localhost/bookstore/index.php"><i class="fa fa-sign-in pr-3" aria-hidden="true"></i>Login</a>
            <?php
        
           }
           ?>
          <a class="dropdown-item" href="http://localhost/bookstore/logout.php" name="logout"><i class="fa fa-sign-out pr-3" aria-hidden="true"></i>Logout</a>
        </div>
           </div>
           </li>
        </ul>
     </div>
</div>
 </nav>
</header>
<main>
   <div class="searchbox">
   <div class="categories bg-light">
      <div class="col-md-9 col-12  m-auto pt-4 pb-0 ">
      <form action="searchresult.php" method="post">

        <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Search Book/Author" name="bookname" method="POST">
          <div class="input-group-append">
            <button class="btn-dark" type="submit" name="search">Search</button>
          </div>
          
        </div>
        </form>
     </div>
    </div>
</div>

   <div class="slides">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="upload/book1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="upload/1620059061-quotes-from-books-about-life-hd-pictures-5-full.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="upload/readinglist_liesdeceptionhappiness.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
  <div>

  </div>

  <section class="recentbooks pt-4 pb-4">
    <div class="container-fluid">
      <h1 class="pl-3 pb-3">Recent Purchased</h1>
<div class="listbook d-flex flex-row justify-content-center bg-light overflow-auto">

<?php
$host="127.0.0.1:3325";
$username="root";
$dbpassword="";
$db="book";


$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$search="SELECT * FROM recentbook;";
$query=mysqli_query($conn,$search) or die("query failed");
while($result=mysqli_fetch_assoc($query))
{
  $imagesource="upload/".$result['image'];
  $edition=$result['edition'];
  $description=$result['description'];
?>
<div class="col-md-2 col-4 p-1">
 <div class="card shadow-lg border-dark">
  <img class="card-img-top w-100" src="upload/<?php echo $result['image'];?>" alt="Card image cap">
  <div class="card-body border-info pt-2 pb-3">
    <div class="bookname" style="height: 70px; overflow: hidden;">
    <p class="card-text mb-2"><?php echo $result['bookname'];?></p>
    </div>
    <a href="http://localhost/bookstore/buy.php?book=<?php echo $result['bookname'] ;?>
  &author=<?php echo $result['author'] ;?>
  &subject=<?php echo $result['subject'] ;?>
  &price=<?php echo $result['sellingprice'] ;?>
  &img=<?php echo $result['image'];?>
  &edition=<?php echo $edition;?>
  &des=<?php echo $description;?>" class="btn btn-dark ">Buy</a>
 </div>
</div>
 </div>
 <?php
 }
?>

 </div>
 </div>

</section>

<section class="recentbooks pt-4 pb-4">
    <div class="container-fluid">
      <h1 class="pl-3 pb-3">Popular Amongst Children</h1>
<div class="listbook d-flex flex-row justify-content-center bg-light overflow-auto ">
<?php
$host="127.0.0.1:3325";
$username="root";
$dbpassword="";
$db="book";


$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$search="SELECT * FROM popularamongstchildren;";
$query=mysqli_query($conn,$search) or die("query failed");
while($result=mysqli_fetch_assoc($query))
{
  $imagesource="upload/".$result['image'];
  $edition=$result['edition'];
  $description=$result['description'];
?>
<div class="col-md-2 col-4 p-1">
 <div class="card shadow-lg border-dark">
  <img class="card-img-top w-100" src="<?php echo $imagesource;?>" alt="Card image cap">
  <div class="card-body border-info pt-2 pb-3">
    <div class="bookname" style="height: 70px; overflow: hidden;">
    <p class="card-text mb-2"><?php echo $result['bookname'];?></p>
    </div>
    <a href="http://localhost/bookstore/buy.php?book=<?php echo $result['bookname'] ;?>
  &author=<?php echo $result['author'] ;?>
  &price=<?php echo $result['sellingprice'] ;?>
  &img=<?php echo $imagesource;?>
  &edition=<?php echo $edition;?>
  &des=<?php echo $description;?>" class="btn btn-dark ">Buy</a>
 </div>
</div>
 </div>
 <?php
 }
?>

</div>
</section>

<section class="recentbooks pt-4 pb-4">
    <div class="container-fluid">
      <h1 class="pl-3 pb-3">Reader's Choice</h1>
      <div class="listbook d-flex flex-row justify-content-center overflow-auto ">
<?php
$host="127.0.0.1:3325";
$username="root";
$dbpassword="";
$db="book";


$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$search="SELECT * FROM readerbook;";
$query=mysqli_query($conn,$search) or die("query failed");
while($result=mysqli_fetch_assoc($query))
{
  $imagesource="upload/".$result['image'];
  $edition=$result['edition'];
  $description=$result['description'];
?>
<div class="col-md-2 col-4 p-1">
 <div class="card border-dark">
  <img class="card-img-top w-100" src="<?php echo $imagesource;?>" alt="Card image cap">
  <div class="card-body  pt-2 pb-3">
    <div class="bookname" style="height: 70px; overflow: hidden;">
    <p class="card-text mb-2"><?php echo $result['bookname'];?></p>
    </div>
    <a href="http://localhost/bookstore/buy.php?book=<?php echo $result['bookname'] ;?>
  &author=<?php echo $result['author'] ;?>
  &price=<?php echo $result['sellingprice'] ;?>
  &img=<?php echo $imagesource;?>
  &edition=<?php echo $edition;?>
  &des=<?php echo $description;?>" class="btn btn-dark ">Buy</a>
 </div>
</div>
 </div>
 <?php
 }
?>

</div>
</div>
</section>

<section class="recentbooks pt-4 pb-4">
    <div class="container-fluid">
      <h1 class="pl-3 pb-3">Engineer & Technology</h1>
      <div class="listbook d-flex flex-row justify-content-center bg-light overflow-auto ">
<?php
$host="127.0.0.1:3325";
$username="root";
$dbpassword="";
$db="book";


$conn=mysqli_connect($host,$username,$dbpassword,$db) or die("conn failed");
$search="SELECT * FROM engineer;";
$query=mysqli_query($conn,$search) or die("query failed");
while($result=mysqli_fetch_assoc($query))
{
  $imagesource="upload/".$result['image'];
  $edition=$result['edition'];
  $description=$result['description'];
?>
<div class="col-md-2 col-4 p-1">
 <div class="card shadow-lg border-dark">
  <img class="card-img-top w-100" src="<?php echo $imagesource;?>" alt="Card image cap">
  <div class="card-body border-info pt-2 pb-3">
    <div class="bookname" style="height: 70px; overflow: hidden;">
    <p class="card-text mb-2"><?php echo $result['bookname'];?></p>
    </div>
    <a href="http://localhost/bookstore/buy.php?book=<?php echo $result['bookname'] ;?>
  &author=<?php echo $result['author'] ;?>
  &price=<?php echo $result['sellingprice'] ;?>
  &img=<?php echo $imagesource;?>
  &edition=<?php echo $edition;?>
  &des=<?php echo $description;?>" class="btn btn-dark ">Buy</a>
 </div>
</div>
 </div>
 <?php
 }
?>

</div>
</div>
</section>



</main>

<footer class="bg-dark mt-3">
    <div class="container">
      <div class="box d-md-flex flex-row pt-2">
      <div class="col-md-4 col-12 pt-md-4 pt-4 pb-md-3 pb-2">
        <h1 class="text-light" style="font-size: larger;">About Us</h1>
        <p class="text-muted"> Ever wanted to buy a book but could not because it was too expensive?
           worry not! because BookStore is here! BookStore, these days in news,is being called as the Robinhood of the world of books. BookStore team is committed to bring to you all kinds of best books at the minimal prices ever seen anywhere.
           Yes, we are literally giving you away a steal.</p>
       </div>

       <div class="col-md-4 col-12 pt-md-4 pt-1 pb-md-3 pb-2 d-flex flex-column">
        <h1 class="text-light"style="font-size: larger;">Navigation</h1>
        <a href="http://kapilsharma.rf.gd/sbook/store.php" class="text-muted pl-4"><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i>Home</a>
        <a href="http://kapilsharma.rf.gd/sbook/trendingbook.php" class="text-muted pl-4"><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i>Trending Book</a>
        <a href="http://kapilsharma.rf.gd/sbook/categories.php" class="text-muted pl-4"><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i>Categories</a>
        <a href="http://kapilsharma.rf.gd/sbook/sell.php" class="text-muted pl-4"><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i>Sell Book</a>
        <a href="http://kapilsharma.rf.gd/sbook/profile.php" class="text-muted pl-4"><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i>Profile</a>

       </div>

       <div class="col-md-4 col-12 pt-md-4 pt-2 pb-md-3 pb-4 d-flex flex-column">
        <h1 class="text-light"style="font-size: larger;">Our Contact</h1>
        <a href="#" class="text-muted pl-4" style="font-size: medium;"><i class="fa fa-envelope pr-2" aria-hidden="true"></i>Bookstore@gmail.com</a>
        <a href="#" class="text-muted pl-4" style="font-size: medium;"><i class="fa fa-phone pr-2" aria-hidden="true"></i>044-2558765437</a>
        
        
       </div>

    </div>
    <div class="newsletter border-top-light">
      <div class="col-md-8 col-12 m-auto pt-2 pb-2">
<div class="input-group mb-3 ">
  <h5 class="text-light pr-2 pt-2"style="font-size: small;">NEWSLETTER</h5><input type="text" class="form-control" style="font-size: small;" placeholder="YourEmail@mail.com"  aria-describedby="basic-addon2" >
  <div class="input-group-append">
  <button class="btn btn-light btn-outline-secondary" type="button" style="font-size: small;">Subcribe</button>
  </div>
</div>

    </div>
    
    </div>
    </div>
    <div class="row bg-secondary pt-1">
      <div class="col-12 pt-1">
      <p class="text-center text-light" style="font-size: small;">2020 © BookStore Website . ALL Rights Reserved.</p>
      </div>
      
    </div>
    
    


</footer>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>