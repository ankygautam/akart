<?php
include('includes/connect.php');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akart</title>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- font awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Navbar -->
<div class="container-fluid p-0" >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <img src="./images/Akart.png" class= "logo">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Total Price</a>
      </li>
      
    </ul>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit" style="background-color:#ce0000; color: white;" onmouseover="this.style.backgroundColor='#ff7a33';" onmouseout="this.style.backgroundColor='#ff914d';">Search</button>
    </form>
  </div>
</div>
</nav>
</div>

<nav class="navbar navbar-expand-lg navbar dark bg-secondary">
<ul class="navbar-nav me-auto">
<li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
</ul>
</nav>

<div class="bg-lite">
<h3 class="text-center">Studio Shop</h3>
<p class="text-center">Dreams in Bright Colors.</p>
</div>

<div class="row">
<div class="col-md-10">
  
<!-- Products -->
  <div class="row">
  <div class="col-md-4 mb-4"><div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn btn-info ">Buy Now</a>
  <a href="#" class="btn btn-secondary">View More</a>
</div>
</div></div>
  <div class="col-md-4 mb-4">
  <div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn btn-info ">Buy Now</a>
  <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
  </div>
  <div class="col-md-4 mb-4">
  <div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <<a href="#" class="btn btn-info ">Buy Now</a>
  <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
  </div>
  <div class="col-md-4 mb-4">
  <div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn btn-info ">Buy Now</a>
  <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
  </div>
  <div class="col-md-4 mb-4">
  <div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn btn-info ">Buy Now</a>
  <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>

  
  </div>
  <div class="col-md-4 mb-4">
  <div class="card">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="btn btn-info ">Buy Now</a>
  <a href="#" class="btn btn-secondary">View More</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-2 bg-secondary p-0">
  <!--Brands to be displayed-->
  <ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h5>Delivery Brands<h5></a>
    </li>

<?php
$select_brands = "select * from `brands`";
$result_brands = mysqli_query($con, $select_brands);
while($row_data = mysqli_fetch_assoc($result_brands)){
  $brand_title = $row_data['brand_title'];
  $brand_id = $row_data['brand_id'];
  echo "<li class='nav-item'>
      <a href='index.php?brands=$brand_id' class='nav-link text-light'>$brand_title</a>

    </li>";
    
}
?>
</ul>

<ul class="navbar-nav me-auto text-center">
  <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h5>Categories<h5></a>
    </li>
    <?php
$select_categories = "select * from `categories`";
$result_categories = mysqli_query($con, $select_categories);
while($row_data = mysqli_fetch_assoc($result_categories)){
  $category_title = $row_data['category_title'];
  $category_id = $row_data['category_id'];
  echo "<li class='nav-item'>
      <a href='index.php?brands=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
}

?>
    </ul>

</div>
</div>

</div>



<div class="form-control text-center">
<p>Shop with us | Studio Shop</p>
</div>



<!-- Bootstrap core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>