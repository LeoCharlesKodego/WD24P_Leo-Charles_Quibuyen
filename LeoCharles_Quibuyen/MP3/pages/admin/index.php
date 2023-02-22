<?php
session_start();
if (isset($_SESSION['ID'])) {
  header("Location:dashboard/dashboard.php");
  exit();
}
// Include database connectivity
include_once('../customer/config.php');
if (isset($_POST['submit'])) {
  $errorMsg = "Welcome";
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string(md5($_POST['password']));
  if (!empty($username) || !empty($password)) {
    $query  = "SELECT * FROM users WHERE username = '$username' && password = '$password' ";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['ID'] = $row['id'];
      $_SESSION['ROLE'] = $row['role'];
      $_SESSION['NAME'] = $row['name'];
      header("Location:dashboard/dashboard.php");
      die();
    } else {
      $errorMsg = "Invalid Login";
    }
  } else {
    $errorMsg = "Username and Password is required";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LogIn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="icon" href="../../images/Yogurt-icon.jpg">
  <!-- icon -->
  <link rel="icon" href="images/Yogurt-icon.jpg">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-3"></div>
      <div class="col-md-4" style="margin-left: 8%;">
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-success alert-dismissible" style="margin-bottom: -40px;">
            <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $errorMsg; ?></strong>
          </div>
        <?php } ?>
        <form action="" method="POST">
          <i class='bx bx-user-circle'></i>
          <h3>Login</h3>
          <div class="form-group">
            <input type="text" class="form-control" id="input" name="username" placeholder="Enter Username" style="height: 50px;">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter Password" style="height: 50px;">
          </div>
          <div class="form-group">
          <p>No account yet? </p><a id="register" href="signup/signup.php"> Register here</a> <br>
            <input type="submit" name="submit" class="btn btn-success" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>