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
<link rel="stylesheet" href="profile.css">
<title>User Profile</title>
</head>
<body>
    <header class="p-0"style="font-family: Open Sans;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-book-open" aria-hidden="true"style="color:white;"></i> <span class="book">Book</span> <span class="store">Store</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span  class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
         <li class="nav-item ">
            <a class="nav-link text-center" href="#">Home </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-center " href="#">Trending Book</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  text-center" href="#">All Book</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  text-center" href="#">Sell Book</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-center " href="http://localhost/sbook/profile.php"><i class="fa fa-user-circle-o pr-1" style="font-size:24px"></i>Profile<span class="sr-only">(current)</span></a>
          </li>
        </ul>
     </div>
</div>
 </nav>
</header>
    <main>
        <section class="user"> 
           <div class="information  pb-3 ">
           <div class="col-md-6 col-9 pt-3 pb-3 m-auto text-left">
            <h3 class="pt-2 pb-2" style="font-family: 'Orbitron', sans-serif !important;">Profile Detail</h3> 
          <img src="upload/blank-profile-picture-973460_640.png" alt="book" class="imgmod img-fluid w-50 rounded-circle img-thumbnail  d-block" name="profileimg">
 <form class="pl-md-3 pr-md-3" method="POST" enctype="multipart/form-data">
<div class="uploadfile pt-3 pb-2">
  <input type="file" class="p-1"name="file">
  <input type="submit" class="border border-secondary rounded text-black ml-1" name="upload" value="upload">
</div>
 <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="name" class="form-control" id="exampleInputPassword1" name="profilename" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="profileemail" aria-describedby="emailHelp" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone No</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="profilephone" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="profileaddress" aria-describedby="emailHelp" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Landmark</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="profilelandmark" aria-describedby="emailHelp" placeholder="Enter Landmark">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">State</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="profilestate" placeholder="Enter State">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">City</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="profilecity" placeholder="Enter City">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Zip code</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="zip" placeholder="Enter Zip code">
  </div>

  <button type="submit" class="btn  btn-dark" name="profilesubmit">Submit</button>
</form>

                </div>
                
            </div>



        </section>




    </main>
    <footer>

    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>