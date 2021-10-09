<!DOCTYPE html5>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- NavBar reference Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS_Files/navbar.css" type="text/css">
  <link rel="stylesheet" href="CSS_Files/style.css" type="text/css">
  
 
  <title>Creat Account</title>

</head>

<body style="background-color: #66a3ff;">
  <!-- NavBar Of the website-->
  <!-- Black with White text -->
  <?php
  $connection = mysqli_connect("localhost", "id16104062_mohit", "3Fw0COENqisX@v4c", "id16104062_grip") or die("Can't connect");
 
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "INSERT INTO `users`(`User_ID`, `Name`, `Email`, `Balance`) 
    VALUES(NULL,'{$name}','{$email}','{$balance}')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
  ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>Successful!</strong> User has been added!
      </div>
  <?php
    }
  }
  ?>

<nav class="navbar navbar-expand-md" style="background-color: #003d99;">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><h1><b>ROYAL BANK</b></h1></a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <button style="background-color: #FFD700;margin:5%; height: 60px; padding: 0px; "> <a class="nav-link" href="c_user.php" style="color: black;">Create Account</a> </button>
        </li>
        <li class="nav-item">
        <button style="background-color: #FFD700; margin:5%; height: 60px; padding: 0px; "> <a class="nav-link" href="money_trans.php" style="color: black;"> View Accounts</a> </button>
        </li>
        <li class="nav-item">
        <button style="background-color: #FFD700; margin:5%; height: 60px; padding: 0px;" > <a class="nav-link" href="userselected.php" style="color: black;">Transfer Money</a> </button>
        </li>
        <li class="nav-item">
        <button style="background-color: #FFD700; margin:5%; height: 6  0px; padding: 0px; "> <a class="nav-link" href="see_history.php" style="color: black;">Transaction History</a> </button>
        </li>
      </ul>
    </div>
  </nav>

  <h1 align = "center" style="color:Black;"><br> CREATE A NEW ACCOUNT</h1>
  <div class="dec_bar" align = "center">
    <br>
    <div class="create-user">
      <img class="img-fluid" src="Image/user.png" style="height:30%;width:15%;">
      
      <form class="app-form" method="post">
        <div class="app-form-group">
        <br>
          <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
        </div>
        <div class="app-form-group">
          <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
        </div>
        <div class="app-form-group">
          <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
        </div>
        <div class="app-form-all-buttons">
          <br><br>
          <input class="app-form-button" style="width: 200px;height:50px; background-color : green;" type="submit" name="submit" value="Create Account"></input>

        </div>
      </form>
    </div>
  </div>
</body>

</html>
<footer style="background-color: #99c2ff;">
      <p><br><br><br>Made by <b>Mohit Butola</b><br></p>
    </footer>
</footer>