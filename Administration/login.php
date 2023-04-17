<?php

ini_set('session.gc_maxlifetime', 14400);
session_set_cookie_params(14400); 

require 'config.php';
$msg = "Vitajte! Prosím prihláste sa do vášho účtu.";
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $select = "SELECT * FROM `login_data` WHERE email='$email'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
       if($password == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (180 * 60);
        $_SESSION["id"] = $row["id"];
        sleep(1);
        header("Location: index.php");
       }
       else{
        $msg = "Zadané heslo je nesprávne!";
       } 
    }
    else {
        $msg = "Mail nie je u nás zaregistrovaný!";
    }
}
?>


<!DOCTYPE html>
 <head>
    <title>Prihlásenie ┃ Akordeón-Kurzy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">

    <link rel="preload" as="style" href="css/login.css">
    <link rel="preload" as="style" href="css/config.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/config.css">
 </head>
<html>
    <body>
      <section>
       <p class="center"><?php echo "$msg" ?></p>
        <div class="center">
          <div class="login">
            <h1>Prihlásenie</h1>
            <form classs="" action="" method="post" autocomplete="off">
                <h4>E-Mail</h4> 
                <input type="text" name="email" id="email" required value="" title="Zadajte email ktorý ste si zaregistrovali.">
                <h4>Heslo</h4>
                <input type="password" name="password" id="password" required value="" title="Zadajte heslo ktoré ste si zaregistrovali.">
                <button class="login-btn" type="submit" name="submit">Prihlásenie</button>
            </form>
            <button id="reg-btn" class="register-btn">Registrovať</button>
          </div>
        </div>    
      </section>  
    </body>
    <script>
    document.getElementById("reg-btn").onclick = function() {
    location.href = ("register.php");
}   </script>
</html>