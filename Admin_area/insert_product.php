<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <body class="bg-light">
        <div class="container mt-3">
            <h1 class="text-center">Insert Product</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_title" class="form-label">Product Title</label>
                    <input type="text" id="product_title" name="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>




                </div>

                  <div class="form-outline mb-4 w-50 m-auto">
                    <label for="description" class="form-label">Product Description</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Enter Product descrition" autocomplete="off" required>

                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_keywords" class="form-label">Product Keywords</label>
                    <input type="text" id="product_keywords" name="product_keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required>

                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                   
                    <select name="product_category" id=""
                    class="form-select">
                    <option value="">Select a Category</option>
                    <?php

$select_query = "SELECT * FROM `categories`";
$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
    $category_title = $row['category_title'];
    $category_id = $row['category_id'];
    echo "<option value='$category_id'>$category_title</option>";
    
}
?>
                    </select>
            </div>

                <div class="form-outline mb-4 w-50 m-auto">
                   <Select name="product_brands" id=""class="form-select">
                    <option value="">Select a Brands</option>
                    <?php
                    $select_query = "SELECT * FROM `brands`";
                    $result_query = mysqli_query($con, $select_query);  
while ($row = mysqli_fetch_assoc($result_query)) {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    ?>
                    </select>
                    
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image1" class="form-label">Product image 1</label>
                    <input type="file" id="product_image1" name="product_image1" class="form-control" required>
                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image2" class="form-label">Product image 2</label>
                    <input type="file" id="product_image2" name="product_image2" class="form-control" required>

                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image3" class="form-label">Product image 3</label>
                    <input type="file" id="product_image3" name="product_image3" class="form-control" required>

                </div>

                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_price" class="form-label">Product price</label>
                    <input type="text" id="product_price" name="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required>

                </div>

                 <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">

                </div>

            </form>
</div>
    </body>
</html>



                