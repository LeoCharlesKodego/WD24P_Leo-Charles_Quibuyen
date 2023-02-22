<?php
session_start();


include_once('../api/config.php');
include_once('../../customer/config.php');
if (!isset($_SESSION['ID'])) {
    header("Location:login.php");
    exit();
}

if(isset($_GET['delete'])){
  $delete_id = $_GET['delete'];
  $delete_query = mysqli_query($conn,"DELETE FROM `orders` WHERE id = $delete_id ") or die('query failed');
  if($delete_query){
     header('location:adminOrders.php');
     $message[] = 'product has been deleted';
  }else{
     header('location:adminOrders.php');
     $message[] = 'product could not be deleted';
  };
};


?>



<!DOCTYPE html>

<html>

  <head>
    <title>Orders</title>
    <link rel="icon" href="Images/Jey_logo.png" />
    <link rel="stylesheet" href="css/adminOrders.css" />
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

    <section class="main-container">

      <div class="card" id="enrollees">

        <?php if($_SESSION['ROLE'] == 'super_admin'){ ?>
          <section class="ftco-section" id="user-section-wrapper" >
            <div class="container" id="user-section-wrapper" >
              <div class="row justify-content-center" id="heading" >
                <div class="col-md-12 text-center mb-3">
                  <h2 class="heading-section">Order List</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="table-wrap" style="border-radius: 10px;">
                    <table class="table">
                      <thead class="thead-primary" id="t-head">
                        <tr style="min-width: 300px;" id="t-rows" >
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Payment</th>
                          <th>Street</th>
                          <th>City</th>
                          <th>Province</th>
                          <th>Orders</th>
                          <th>Amount</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                                if ($_SESSION['ROLE'] == "super_admin") {
                          $query = "SELECT * FROM orders";
                            }else{
                          $role = $_SESSION['ROLE'];
                          $query = "SELECT * FROM users WHERE role = '$role'";
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
                          <td><?php echo $row['date_time']?></td>
                          <td>                    
                            <a href="adminOrders.php?delete=<?php echo $row['id']; ?>" class="delete-btn" id="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> Delete </a>
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

  <!--SCRIPT FOR TABLES-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</html>
