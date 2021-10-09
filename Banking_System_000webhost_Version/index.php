<!DOCTYPE html>
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

  <title>Banking System</title>

</head>

<body style="background-color: #66a3ff;">
  <!-- NavBar Of the website-->
  <!-- Black with White text -->
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

  <div class="container-fluid">
    <div class="row intro" style="background-color: #1a75ff;">
      <div class="col-sm-12 col-md">
        <div class="heading text-center">
          <br>
          <br><br><br>
          <h1 style="color: #FFD700;"><big><b> Welcome to ROYAL Bank </b></big></h1>
        </div>
      </div>

      <div class="col-sm-12 col-md img text-center">
        <img src="Image/bank2.png" alt="Banking" class="img-fluid" style="height:100%;width:50%;" />
      </div>
    </div>
    <div class="row activity text-center" style="background-color: #66a3ff;">
      <div class="col-md act">
      <br>
        <img src="Image/user.png" alt="userImg" class="img-fluid" style="height:70%;width:45%;">

        <br><br><a href="c_user.php"><button style="background-color: #C86DFB;"><b>Create User</b></button></a>
      </div>
      <div class="col-md act">
        <br>
        <img src="Image/transfer2.png" alt="TransferImg" class="img-fluid" style="height:70%;width:45%;">
        <br><br><a href="userselected.php"><button style="background-color: #C86DFB;"><b>Transfer Money</b></button></a>
      </div>
      <div class="col-md act">
        <br>
        <img src="Image/history.png" alt="HistoryImg" class="img-fluid" style="height:70%;width:45%;">
        <br><br><a href="see_history.php"><button style="background-color: #C86DFB;"><b>Transaction History</b></button></a>
      </div>
    </div>
    <br>
    <br>
    <footer style="background-color: #99c2ff;">
      <p><br><br><br>Made by <b>Mohit Butola</b><br></p>
    </footer>
</body>

</html>