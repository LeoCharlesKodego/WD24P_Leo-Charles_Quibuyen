<?php

@include 'config.php';

session_start();

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $method = $_POST['method'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $province = $_POST['province'];
   


   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $amount = 0;
   
   if(mysqli_num_rows($cart_query) > 0){
    $delivery_fee = 20;
      while($product_item = mysqli_fetch_assoc($cart_query)){
       
        $product_code = $product_item['product_code'];
        $product_quantity = $product_item['quantity'];
        $product_name = $product_item['product_name'];
         $product_orders[] = $product_item['product_name'] .' ('. $product_item['quantity'] .') ';
         $product_price = ($product_item['price'] * $product_item['quantity']);
         $amount += $product_price;

        
         
      };
      $amount += $delivery_fee;
      
   };


   $orders = implode(',',$product_orders );
   $detail_query = mysqli_query($conn, "INSERT INTO `orders`(name, number, method, street, city, province, orders, amount) VALUES('$name','$number','$method','$street','$city','$province','$orders', '$amount')") or die('query failed');

  
   
   $detail_query = mysqli_query($conn, "UPDATE `products` SET sold = '$product_quantity + 1' WHERE 'id' = product_code ")or die('query failed');
   

   

   
  
   
  

   mysqli_query($conn, "DELETE FROM `cart`");
   if($cart_query && $detail_query){

    
  
    
      echo "
      <div class='order-message-container'>
        <div class='message-container'>
          <h3>thank you for shopping!</h3>
          <a href='products.php' class='btn'>continue shopping</a>
          <div class='order-detail'>
            <span>".$orders."</span>
            <span class='total'> total : &#8369;".$amount."  </span>
          </div>
          <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your address : <span>".$street.", ".$city.", ".$province."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
          </div>

          <a href='products.php' class='btn'>continue shopping</a>
        </div>
      </div>
      ";
   }

   

}
unset($_SESSION['cart']);

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout_page.css"/>
    <link rel="icon" href="../../images/Yogurt-icon.jpg">
    <title>checkout</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- b-box  -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <header class="header">

      <div class="flex">

        <a href="../index.html" class="logo"><h2>Yogurt e-Hauz</h2></a>

        <nav class="navbar">
          <a href="../../index.php" ><i class='bx bx-home'></i> Home</a>
          <a href="products.php">view products</a>
        </nav>

        <?php
        
        $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
        $row_count = mysqli_num_rows($select_rows);

        ?>

        <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

        <div id="menu-btn" class="fas fa-bars"></div>

      </div>

    </header>

    <div class="container">

      <section class="checkout-form">

        <h1 class="heading">complete your order</h1>

        <form action="" method="post" class="order-form">

          <div class="display-order" style="margin-top: 30px; margin-bottom: 80px ;">
            <?php
              $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
              $total = 0;
              $delivery_fee =20;
              $grand_total = 0;
              if(mysqli_num_rows($select_cart) > 0){
                  while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                  $total_price = ($fetch_cart['price']) * $fetch_cart['quantity'];
                  $grand_total = $total += $total_price ;
            ?>
            <span><?= $fetch_cart['product_name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>

            <?php
              }
            }else{
              echo "<div class='display-order'><span>your cart is empty!</span></div>";
            }

           

            
            ?>
            <span class="grand-total"> grand total : &#8369;<?= number_format( $grand_total += $delivery_fee ); ?> </span>
          </div>

          <div class="flex" >
            <div class="inputBox">
              <span>your name</span>
              <input type="text" placeholder="Enter your Fullname" name="name" required>
            </div>
            <div class="inputBox">
              <span>your number</span>
              <input type="number" placeholder="Enter your number" name="number" required>
            </div>
            <div class="inputBox">
              <span>payment method</span>
              <select name="method">
                <option value="cash on delivery" selected>Cash on delivery</option>
                <option value="gcash">Gcash</option>
              </select>
            </div>
            <div class="inputBox">
              <span>delivery address</span>
              <input type="text" placeholder="street name" name="street" required>
            </div>
            <div class="inputBox">
              <span>city</span>
              <input type="text" placeholder="Puerto Princesa" name="city" readonly>
            </div>
            <div class="inputBox">
              <span>province</span>
              <input type="text" placeholder="Palawan" name="province" readonly>
            </div>
          </div>
          <input type="submit" value="order now" name="order_btn" class="btn">

        </form>


      </section>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
      
  </body>

</html>