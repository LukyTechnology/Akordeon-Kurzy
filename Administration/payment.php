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
    <title>Platba - Akordeon-Kurzy</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="Styling/css/colors.css">
</head>
<html>
    <body>
        
    <header>
        <?php require("header.php") ?>
    </header>

    <section>
        <div id="main">
          <div class="pay">
            <div class="flex">
              <h1>Platba za Kurzy</h1>
            </div> 
            <div class="flex" >
             <p style="margin-top:40px">Bohužiaľ, aktuálne platby spracovávame manuálne, no pracujeme už na automatickom systéme. Ako to u nás funguje? <br><br>
             Zakúpite si kurz, cez tlačítko nižšie kde potom do údajov zadáte email ktorým ste sa zaregistrovali na našu stránku. Po zaplatení sa pokusíme čím skôr platbu
             overiť a následne vám kurz aktivovať. Môže to trvať niekoľko minút/hodín. Ak najneskôr do 2 dní nebude váš kurz aktivovaný, napíšte nám a preveríme túto chybu, no
             sme si takmer istý že k tomuto nedôjde. <br><br>Chcete si teda kurz zaplatiť a aktivovať? Kliknite na tlačítko nižšie.
             </p>
            </div>
            <div class="flex">
                <button class="payment" style="margin-top: 40px;" onclick="window.location.href='https://www.buymeacoffee.com/akordeonkurzy/extras';" >Platba</button>
            </div>
          </div>
        </div>    
    </section> 

    <section class="footer" >
        <?php require("footer.php") ?>
    </section>

    </body>

</html>