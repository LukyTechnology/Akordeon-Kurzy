<?php 
require '../config.php';
$id = $_SESSION["id"];
if(!$_SESSION["id"]){
    header("Location: ../login.php");
}
else{
    $currentTime = time();
    if($currentTime > $_SESSION["expire"]){
        session_unset();
        session_destroy();
        header("Location: ../login.php");
    }
    else {
     $selectmail = "SELECT * FROM `login_data` WHERE id=$id";
     $mailresult = mysqli_query($conn, $selectmail);
     $mail = mysqli_fetch_assoc($mailresult);
     $email = $mail["email"];
     $load1 = "SELECT `sec1` FROM `kurz_data` WHERE email='$email'";
     $result1 = mysqli_query($conn, $load1);
     $sec1 = mysqli_fetch_array($result1);

    if($sec1["sec1"] != 1){
        header("Location: ../error.php");
    }
    }
}
?>