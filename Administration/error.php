<?php 
require 'config.php';
$id = $_SESSION["id"];
if(!$_SESSION["id"]){
    header("Location: login.php");
}
else{
    $currentTime = time();
    if($currentTime > $_SESSION["expire"]){
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Chyba - Akordeon-Kurzy</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="Styling/css/colors.css">
</head>
<html>
    <body>
        
    <header>
        <?php require("header.php") ?>
    </header>

    <section>
        <div id="main">
          <div class="contact">
            <h1 style="color:red">Ajaj... Chybička!</h1>
            <p style="margin-top:70px">Tento kurz nemáš zakúpený! Zakúp si ho a môžeš sa veselo učiť!</p>
            <br>
            <p style="margin-top:50px;font-size:16px">Budeš vráteny na kartu Domov o 5 sekund...</p>
          </div>
        </div>    
    </section> 

    <section class="footer" >
        <?php require("footer.php") ?>
    </section>

    <script type="text/javascript">   
    function Redirect() 
    {  
        window.location="index.php"; 
    } 
    setTimeout('Redirect()', 5000);   
    </script>
    </body>
</html>