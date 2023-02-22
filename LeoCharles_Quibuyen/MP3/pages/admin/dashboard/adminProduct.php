<?php
session_start();


include_once('../api/config.php');
include_once('../../customer/config.php');
if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
    exit();
}

if(isset($_POST['add_product'])){
	$p_code = $_POST['p_code'];
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
	$p_on_hand = $_POST['p_on_hand'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = '../../customer/uploaded_img/'.$p_image;
 
    $insert_query = mysqli_query($conn, "INSERT INTO `products`(product_code, product_name, price, image, on_hand) VALUES('$p_code','$p_name', '$p_price', '$p_image', '$p_on_hand')") or die('query failed');
    
    if($insert_query){
       move_uploaded_file($p_image_tmp_name, $p_image_folder);
       header('location:adminProduct.php');
       $message[] = 'product add succesfully';
    }else{
       header('location:adminProduct.php');
       $message[] = 'could not add the product';
    }
 };
 
 if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn,"DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
    if($delete_query){
       header('location:adminProduct.php');
       $message[] = 'product has been deleted';
    }else{
       header('location:adminProduct.php');
       $message[] = 'product could not be deleted';
    };
 };
 
 if(isset($_POST['update_product'])){
    $update_p_id = $_POST['update_p_id'];
	  $update_p_code = $_POST['update_p_code'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
	  $update_p_on_hand = $_POST['update_p_on_hand'];
    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = '../../customer/uploaded_img/'.$update_p_image;
 
    $update_query = mysqli_query($conn, "UPDATE `products` SET product_name = '$update_p_name',product_code = '$update_p_code', price = '$update_p_price', image = '$update_p_image', on_hand = '$update_p_on_hand' WHERE id = '$update_p_id'");
 
    if($update_query){
       move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
       $message[] = 'product updated succesfully';
       header('location:adminProduct.php');
    }else{
       $message[] = 'product could not be updated';
       header('location:adminProduct.php');
    }
 
 }


?>


<!DOCTYPE html>

<html>

  <head>
    <title>Products</title>
    <link rel="icon" href="Images/Jey_logo.png" />
    <link rel="stylesheet" href="css/adminProducts.css" />
    <link rel="icon" href="../../../images/Yogurt-icon.jpg">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>   
  </head>

  <body>
    <!--Navigation section-->
    <div class="sidebar">
      <div class="logo-details">           
        <div class="logo_name">Yogurt e-Hauz</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>

      <ul class="nav-list">
        <li>
          <i class="bx bx-search"></i>
          <input type="text" placeholder="Search..." />
          <span class="tooltip">Search</span>
        </li>

        <li>
          <a href="dashboard.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>            

        <?php if($_SESSION['ROLE'] == 'super_admin'){ ?>

        <li>
          <a href="adminProduct.php">
            <i class='bx bx-gift'></i>
            <span class="links_name">Products</span>
          </a>
          <span class="tooltip">Products</span>
        </li>

        <li>
          <a href="adminOrders.php">
            <i class='bx bx-cart'></i>
            <span class="links_name">Orders</span>
          </a>
          <span class="tooltip">Orders</span>
        </li>

        <li>
          <a href="adminStocks.php">
            <i class='bx bx-package'></i>
            <span class="links_name">Stocks</span>
          </a>
          <span class="tooltip">Stocks</span>
        </li>
        <?php } ?>

        <li>
          <a href="user_accounts.php">
            <i class="bx bx-user"></i>
            <span class="links_name">Users</span>
          </a>
          <span class="tooltip">Users</span>
        </li>

        <li class="profile" style="background-color: #000;">
          <div class="complete_name"> Hello <?php echo ucwords($_SESSION['NAME']); ?></div> 
          
          <i class="bx bx-log-out" id="log_out" ><a href="../api/logout.php"></a></i>
        </li>

      </ul>

    </div>
    <!-- End of Navigation section-->

    <section class="header">

      <h2>Yogurt e-Hauz <b id="complete_name"></b></h2>

      <div class="dropdown" id="#complete_name">

        <button class="dropbtn" id="name">
          Hello <?php echo ucwords($_SESSION['NAME']);  ?> <i class="bx bxs-chevron-down"></i>
        </button>

        <div class="dropdown-content">
          <a id="log_out" class="nav-link" href="../api/logout.php"> Log out</a>
        </div>

      </div>

    </section>

    <section class="container">
      
      <div class="card" id="enrollees">

        <?php if($_SESSION['ROLE'] == 'super_admin'){ ?>
          <main role="super_admin" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="width: 100%;">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
            </div>
            <section>

              <form action="" method="post" class="add-product-form" enctype="multipart/form-data" id="product-input">
                <h3>Products</h3>
                <input type="text" name="p_name" placeholder="Product Name" class="box" required>
                <input type="number" name="p_code" min="0" placeholder="Product Code" class="box" required>
                <input type="number" name="p_price" min="0" placeholder="Product Price" class="box" required>
                <input type="number" name="p_on_hand" min="0" placeholder="Quantity" class="box" required>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" id="add-product"  value="Add Product" name="add_product" class="btn">
              </form>

            </section>

            <div class="table-responsive" style="margin-top: 50px;">
          
              <table class="table table-striped">
                <thead>
                  <th>Product image</th>
                  <th>Product code</th>
                  <th>Product name</th>
                  <th>Product price</th>
                  <th>Action</th>
                </thead>

                <tbody>
                  <?php
                          if ($_SESSION['ROLE'] == "super_admin") {
                    $query = "SELECT * FROM products";
                      }else{
                    $role = $_SESSION['ROLE'];
                    $query = "SELECT * FROM users WHERE role = '$role'";
                      }
                          $result = $con->query($query);
                    if ($result->num_rows > 0) {
                          while ($row = $result->fetch_array()) {
                      ?>		
                  <tr>
                    <td><?php echo $row['image']?></td>
                    <td><?php echo $row['product_code']?></td>
                    <td><?php echo $row['product_name']?></td>
                    <td><a>&#8369</a> <?php echo $row['price']?></td>

                    <td>
                      <a href="adminProduct.php?delete=<?php echo $row['id']; ?>" class="delete-btn" id="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class='bx bx-trash'></i></i> Delete </a>
                      <a href="adminProduct.php?edit=<?php echo $row['id']; ?>" class="option-btn" id="update-btn"> <i class='bx bxs-edit'></i></i> Update </a>
                    </td>
                      
                  </tr>
                  <?php	}

                  }else{
                      echo "<h2>No record found!</h2>";
                  } ?>									
                </tbody>

              </table>
            </div>

          </main><?php } ?>

          <section class="edit-form-container">

            <?php
            
            if(isset($_GET['edit'])){
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
                if(mysqli_num_rows($edit_query) > 0){
                  while($fetch_edit = mysqli_fetch_assoc($edit_query)){
            ?>

            <form action="" method="post" enctype="multipart/form-data" style="margin-top: 40px;" id="edit-product-form">
              <img class="product-image" src="../../customer/uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="" style="text-align: center; margin-bottom:30px;">
              <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
              <input type="text" class="box" name="update_p_code" value="<?php echo $fetch_edit['product_code']; ?>">
              <input type="text" class="box" name="update_p_name" value="<?php echo $fetch_edit['product_name']; ?>">
              <input type="number" min="0" class="box" name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
              <input type="file" id="file-option" class="box" name="update_p_image" value="<?php echo $fetch_edit['image'];?>" accept="image/png, image/jpg, image/jpeg">
              <input type="submit"  value="Save" name="update_product" class="btn" id="save-btn">
              <input type="button" onclick="window.location.href='#';" value="Cancel"  id="close-edit" class="option-btn">
            </form>

            <?php 
                  };
                  };
                  echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
                };
            ?>

          </section>



        <?php if($_SESSION['ROLE'] == 'admin'){ ?>
        <main role="super_admin" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="width: 100%;">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
              <h1 class="h2">Dashboard</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>NAME</th>
                  <th>Contact Number</th>
                  <th>Payment Method</th>
                  <th>Street</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>Orders</th>
                  <th>Amount</th>
                  <th>Date/Time</th>
                </tr>
              </thead>

              <tbody>

                <?php
                      if ($_SESSION['ROLE'] == "admin") {
                $query = "SELECT * FROM orders";
                  }else{
                $role = $_SESSION['ROLE'];
                $query = "SELECT * FROM orders WHERE role = '$role'";
                  }
                      $result = $con->query($query);
                if ($result->num_rows > 0) {
                      while ($row = $result->fetch_array()) {
                  ?>		
                  <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['number']?></td>
                    <td><?php echo $row['method']?></td>
                    <td><?php echo $row['street']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['province']?></td>
                    <td><?php echo $row['orders']?></td>
                    <td><?php echo $row['amount']?></td>
                    <td><?php echo date('d-M-Y', strtotime($row['date_time']))?></td>
                  </tr>
                  <?php	}
                  }else{
                      echo "<h2>No record found!</h2>";
                  } ?>									
              </tbody>
              
            </table>

          </div>

        </main><?php } ?>
        
      </div>

    </section>

  </body>

  
  <script src="js/script.js"></script>

</html>
