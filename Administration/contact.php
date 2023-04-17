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
    <title>Kontakt - Akordeon-Kurzy</title>
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
            <h1>Kontakt na Vedenie</h1>
            <div class="flex">
            <ion-icon name="logo-instagram" style="color:#a8d8e1" id="ig01"></ion-icon>
              <h4 class="black" style="margin-top:25px" id="ig02"> @akordeon_kurzy</h4>
            </div>
            <div class="flex">
              <ion-icon name="mail-outline" style="color:#a8d8e1"></ion-icon>
              <h4 class="black" style="margin-top:28px"> akordeonkurzy@gmail.com</h4>
            </div>
            <div class="flex" >
             <p style="margin-top:70px">Našli ste nejakú chybu? Alebo máte nejaký problém? Obrátťe sa na nás! Môžte nás kontaktovať na našom Instagrame, kde vám odpovieme do pár
                hodín, ak nie aj minút alebo cez email kde odpoveď a celé riešenie vašeho problému bude trvať dlhšie.
             </p>
            </div>
          </div>
        </div>    
    </section> 

    <section class="footer" >
        <?php require("footer.php") ?>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    <script>
        const ig01 = document.getElementById("ig01");
        const ig02 = document.getElementById("ig02");

        ig01.onclick = function() {
            location.href = "https://instagram.com/akordeon_kurzy/";
        }
        ig02.onclick = function() {
            location.href = "https://instagram.com/akordeon_kurzy/";
        }
    </script>

</html>