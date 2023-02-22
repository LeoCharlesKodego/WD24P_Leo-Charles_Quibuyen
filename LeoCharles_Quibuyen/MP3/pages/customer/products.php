<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_code = $_POST['product_code'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE product_name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(product_code, product_name, price, image, quantity) VALUES('$product_code', '$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../images/Yogurt-icon.jpg">
    <link rel="stylesheet" href="css/products_page.css"/>
    <title>Products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- b-box  -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    


    <header class="header">

      <div class="flex" >

        <a href="../../index.php" class="logo"><img src="../../images/y-logo5.jpg" alt="#" /></a>

        <nav class="navbar">
            
            <a href="../../index.php"><i class='bx bx-home'></i> Home</a>
        </nav>

        <?php
        
        $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
        $row_count = mysqli_num_rows($select_rows);

        ?>

        <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

        <div id="menu-btn" class="fas fa-bars"></div>

      </div>

    </header>


    <?php

      if(isset($message)){
        foreach($message as $message){
            echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        };
      };

    ?>





    <div class="container">

      <section class="products">

        <h1 class="heading">latest products</h1>

        <div class="box-container" style="width: 100%;">

          <?php
          
          $select_products = mysqli_query($conn, "SELECT * FROM `products`");
          if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
          ?>

          <form action="" method="post">
            <div class="box" style="width: 100%;">
                <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                <h3><?php echo $fetch_product['product_name']; ?></h3>
                <div class="price">&#8369;<?php echo $fetch_product['price']; ?></div>
                <input type="hidden" name="product_code" value="<?php echo $fetch_product['product_code']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>
          </form>

          <?php
            };
          };
          ?>

        </div>

      </section>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

  </body>

</html>