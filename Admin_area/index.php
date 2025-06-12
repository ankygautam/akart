<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--font awesome link   -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
    <!-- CSS link -->
    <link rel="stylesheet" href="../style.css">
    <style>
     
        .admin_image {
            width: 100px;
            height: 100px;
           object-fit: contain;
        }
        .footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
     <div class="container-fluid p-0">
        <nav class="navbar navbar-extend-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/Akart.png" class="logo" alt="Logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </nav>

            <div class="bg-light">
            <h3 class="text-center p2">Manage Details</h3>
            </div>

            <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                
            <div class="px-5"> 
                 <a href="#"><img src="../images/11473559.png" alt="" class="admin_image"></a>
                 <p class="text-light text-center">Admin Name</p>   
            </div>
            <div class="button text-center">
            
            <button><a href="" class="nav-link text-light bg-info my-1">Insert Products</a><button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Products</a><button>
            <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Catagories</a><button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Catagories</a><button>
            <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a><button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a><button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a><button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a><button>
            <button><a href="" class="nav-link text-light bg-info my-1">List Users</a><button>
            <button><a href="" class="nav-link text-light bg-info my-1">Logout</a><button>
          

     </div>
            </div>
        </div>

    <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }

        if(isset($_GET["insert_brand"])){
            include("insert_brands.php");
        }
        ?>
    </div>

    <div class="bg-info p-3 text-center footer">
        <p class="text-light">All rights reserved &copy; by Akart</p>   
    </div>

 
    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7+Q1j6v2m4g0x5f
</body>
</html>
