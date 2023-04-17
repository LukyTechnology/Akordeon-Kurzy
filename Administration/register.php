<?php
require 'config.php';
$msg = "Vitajte! Prosím zaregistrujte si tu váš účet.";
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];   

    $select = "SELECT * FROM `login_data` WHERE username='$username' OR email='$email'";
    $duplicate = mysqli_query($conn, $select);
    if(mysqli_num_rows($duplicate) > 0){
        $msg = "Používateľské meno alebo Mail je už zaregistrované/ý!";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO `login_data`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
            $data = "INSERT INTO `kurz_data`(`email`, `sec1`, `sec2`, `sec3`, `sec4`) VALUES ('$email','0','0','0','0')";
            mysqli_query($conn, $query);
            sleep(1);
            mysqli_query($conn, $data);
            header("Location: login.php");
        }
        else{
            $msg = "Vaše hesla sa nezhodujú!";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registrácia ┃ Akordeón-Kurzy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">

    <link rel="preload" as="style" href="css/register.css">
    <link rel="preload" as="style" href="css/config.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="css/config.css">
 </head>
    <body>
     <p class="center"><?php echo "$msg" ?></p>
        <div class="center">
          <div class="register">
            <h1>Registrácia</h1>
            <form class="" action="" method="post" autocomplete="off">
                <h4>Použivateľské Meno</h4>
                <input type="text" name="username" id="username" minlength="3" maxlength="25" required value="" title="Zadajte vašu prezývku ktorá sa vám bude zobrazovať.">
                <h4>E-Mail</h4>
                <input type="email" name="email" id="email" required value="" title="Zadajte váš email cez ktorý sa budete prihlasovať.">
                <h4>Heslo</h4>
                <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required value="" title="Heslo musí obsahovať jednu číslicu, jedno veľke písmeno a minimálnu dĺžku 8 znakov.">
                <h4>Znova Heslo</h4>
                <input type="password" name="confirmpassword" id="confirmpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required value="" title="Heslo musí obsahovať jednu číslicu, jedno veľke písmeno a minimálnu dĺžku 8 znakov.">
                <button class="register-btn" type="submit" name="submit">Registrácia</button>
            </form>
            <button id="log-btn" class="login-btn">Prihlásenie</button>
          </div>
        </div>   
    </body>
    <script>
    document.getElementById("log-btn").onclick = function() {
    location.href = ("login.php");}
      </script>
</html>