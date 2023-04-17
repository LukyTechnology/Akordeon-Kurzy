<?php
require("config.php");
$id = $_SESSION["id"];
$select = "SELECT * FROM `login_data` WHERE id=$id";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="no-cache">

  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/config.css">
  
</head>

    <body>
        <header>
        <nav>
            <div class="navbar">
              <img id="logo-icon" src="img/navbar.png" alt="">
              <a href="index.php">Domov</a>
              <a href="/Sekcia1/main.php" target="_blank" >Kurz 1</a>
              <a href="/Sekcia2/main.php" target="_blank" >Kurz 2</a>
              <a href="/Sekcia3/main.php" target="_blank" >Kurz 3</a>
              <a href="/Sekcia4/main.php" target="_blank" >Kurz 4</a>

              <p><?php echo $row["username"]; ?></p>
              <div class="user-drop">
                <img id="user-icon" src="img/user.png" alt="">
                <div class="dropdown-5">
                  <a href="logout.php">Odhlásiť sa</a>
                </div>
              </div>
            </div>
        </nav>
        </header>
    </body>
</html>