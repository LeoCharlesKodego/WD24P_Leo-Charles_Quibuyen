<?php
  // Include database connection file
  include_once('../api/config.php');
  if (isset($_POST['submit'])) {
    
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string(md5($_POST['password']));
    $name     = $con->real_escape_string($_POST['name']);
    $role     = $con->real_escape_string($_POST['role']);
    $query  = "INSERT INTO users (name,username,password,role) VALUES ('$name','$username','$password','$role')";
    $result = $con->query($query);
    if ($result==true) {
      header("Location:../index.php");
      die();
    }else{
      $errorMsg  = "You are not Registred..Please Try again";
    }   
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link rel="icon" href="images/Yogurt-icon.jpg">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> 
  <link rel="stylesheet" href="css/signup.css"/>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-5" style="margin-left: 5%;">      
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
        <?php } ?>
        <form action="" method="POST">
          <i class='bx bx-user-plus'></i>
          <h3>Sign Up</h3>
          <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="" style="height: 50px;">
          </div>
          <div class="form-group">  
            <label for="username"></label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username" required="" style="height: 50px;">
          </div>
          <div class="form-group">  
            <label for="password"></label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="" style="height: 50px;">
          </div>
          <div class="form-group">  
            <label for="role"></label>
            <select class="form-control" name="role" required="" style="height: 50px;">
              <option value="">Select Role</option>
              <option value="super_admin">Super admin</option>
              <option value="admin">Employee</option>
            </select>
          </div>
          <div class="form-group">
            <p>Already have account ?<a href="../index.php"> Login</a></p>
            
            <input type="submit" name="submit" class="btn btn-primary">
          </div>
        </form>
      </div>
  </div>
</div>
</body>
</html>