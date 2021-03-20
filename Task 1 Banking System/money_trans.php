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
    
    <link rel="stylesheet" href="CSS_Files/style.css" type="text/css">
    
    <link rel="stylesheet" href="CSS_Files/tablefor.css" type="text/css">
    <title>View Accounts</title>

    </head>

<body style="background-color: #66a3ff;">
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

<h1 style="color:Black;" align = "center"><br> ACCOUNTS</h1>
<div class = "database">
<?php
$connection = mysqli_connect("localhost", "id16104062_mohit", "3Fw0COENqisX@v4c", "id16104062_grip") or die("Can't connect");
$sql = "SELECT * FROM `users`";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
if ($num>0) {
  echo "<table ><tr><th>User ID</th><th>Name</th><th>Email ID</th><th>Balance</th></tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row['User_ID']. "</td><td>" . $row['Name']. "</td><td>" . $row['Email']. "</td><td>" . $row['Balance']. "</td>";?>
  </tr>
  <?php
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
</div>


<footer style="background-color: #99c2ff;">
      <p><br><br><br>Made by <b>Mohit Butola</b><br></p>
    </footer>
</body>
</html>