<?php
session_start();


include_once('../api/config.php');
include_once('../../customer/config.php');
if (!isset($_SESSION['ID'])) {
    header("Location:index.php");
    exit();
}
?>



<!DOCTYPE html>

<html>

  <head>
    <title>Admin Dashboard</title>
    <link rel="icon" href="Images/Jey_logo.png" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="../../../images/Yogurt-icon.jpg">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>   
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />  
    </head>
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700"
        rel="stylesheet"
        type="text/css"
    />
  
  </head>

  <body>
    <!--Navigation section-->
    <div class="sidebar">

      <div class="logo-details">           
        <div class="logo_name">Yogurt e-Hauz</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>

      <ul class="nav-list">
        <li >
          <i class="bx bx-search" ></i>
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

      <h2>Your Dashboard <b id="complete_name"></b></h2>

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
      <div class="user-card"> 
        <div class="containercard1">

          <div class="description1">
            <i class='bx bx-user'></i>
            
            <div class="fetch-result">
              <?php
                $dash_user_query = "SELECT * from users";
                $dash_user_query_run = mysqli_query($con, $dash_user_query);

                if($post_total = mysqli_num_rows($dash_user_query_run))

                  {
                    echo $post_total;
                  }
                else
                  {
                    echo "No Data";
                  }            
              ?>
            </div>

          </div>
      
          <div class="card-footer1">
            <a href="user_accounts.php">Total Users</a>           
          </div> 
        </div>
      </div>

      <div class="sales-card">
        <div class="containercard1">

          <div class="description1">
            <i class='bx bx-money'></i>

            <div class="fetch-result">
              <?php
             $results = mysqli_query($con, "SELECT sum(Amount) FROM orders") or die(mysqli_error());
             while($rows = mysqli_fetch_array($results)){ 
               echo $rows['sum(Amount)']; }?>
              
            </div>
            
          </div>
          
          <div class="card-footer1">
            <a href="#">Total Sales</a>   
          </div> 
        </div>
      </div>

      <div class="stocks-card">
        <div class="containercard1">

          <div class="description1">
            <i class='bx bxs-package'></i>
            <div class="fetch-result">
              <?php
              
              $results = mysqli_query($con, "SELECT sum(Quantity) FROM stocks") or die(mysqli_error());
              while($rows = mysqli_fetch_array($results)){ 
                echo $rows['sum(Quantity)']; }?>
            </div>
          </div>
          
          <div class="card-footer1">
            <a href="adminStocks.php">Total Stocks</a>           
          </div> 
        </div>
      </div>

      <div class="products-card">
        <div class="containercard1">

          <div class="description1">
            <i class='bx bx-package'></i>
            <div class="fetch-result">
            <?php
              $dash_products_query = "SELECT * from products";
              $dash_products_query_run = mysqli_query($con, $dash_products_query);

              if($post_total = mysqli_num_rows($dash_products_query_run))

                {
                  echo $post_total;
                }
              else
                {
                  echo "No Data";
                }            
            ?>
        
            </div>
          
          </div>
          
          <div class="card-footer1">
            <a href="adminProduct.php">Product Listed</a>              
          </div> 
        </div>
      </div>

      <div class="messages-card">
        <div class="containercard1">

          <div class="description1">
            <i class='bx bx-cart-alt'></i>
            <div class="fetch-result">
              <?php
                $dash_products_query = "SELECT * from orders";
                $dash_products_query_run = mysqli_query($con, $dash_products_query);

                if($post_total = mysqli_num_rows($dash_products_query_run))

                  {
                    echo $post_total;
                  }
                else
                  {
                    echo "No Data";
                  }            
              ?>
            </div>
          </div>
          
          <div class="card-footer1">
            <a href="adminOrders.php">Orders</a>          
          </div> 
        </div>
      </div>



      <?php if($_SESSION['ROLE'] == 'super_admin'){ ?>
        <section class="ftco-section" id="user-section-wrapper" >
          <div class="container" id="user-section-wrapper" >
            <div class="row justify-content-center" id="heading" >
              <div class="col-md-12 text-left mb-3"  >
                <h3 class="heading-section">Email List</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-15">
                <div class="table-wrap" style="border-radius: 5px;">
                  <table class="table">
                    <thead class="thead-primary" id="t-head">
                      <tr style="min-width: 400px;" id="t-rows" >
                        <th>EMAIL ADDRESS</th>
                        <th>ACTION</th>                      
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                              if ($_SESSION['ROLE'] == "super_admin") {
                        $query = "SELECT * FROM news_letter";
                          }else{
                        $role = $_SESSION['ROLE'];
                        $query = "SELECT * FROM news_letter WHERE role = '$role'";
                          }
                              $result = $con->query($query);
                        if ($result->num_rows > 0) {
                              while ($row = $result->fetch_array()) {
                          ?>		
                      <tr>             
                        <td><?php echo $row['email_address']?></td>
                        <td>                    
                          <a href="adminOrders.php?delete=<?php echo $row['id']; ?>" class="delete-btn" id="delete-btn" onclick="return confirm('are your sure you want to delete this?');"><i class='bx bx-trash'></i> Delete </a>
                        </td>
                      </tr>
          
                      <?php	}
                      }else{
                          echo "<h2>No record found!</h2>";
                      } ?>									
                    </tbody>


                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main><?php } ?>


          <!---
      <div class="card">

        <?php
        
        $select_products = mysqli_query($conn, "SELECT * FROM `products`");
        if(mysqli_num_rows($select_products) > 0){
          while($fetch_product = mysqli_fetch_assoc($select_products)){
        ?>

        <form action="" method="post">
          <div class="box" style="width: 20%;">
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
      -->

    </section>

    

  </body>

  <script src="js/script.js"></script>
  <!--script for data table-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</html>
