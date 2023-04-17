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
    else {
    $selectmail = "SELECT * FROM `login_data` WHERE id=$id";
    $mailresult = mysqli_query($conn, $selectmail);
    $mail = mysqli_fetch_assoc($mailresult);
    $email = $mail["email"];

    $load1 = "SELECT `sec1` FROM `kurz_data` WHERE email='$email'";
    $result1 = mysqli_query($conn, $load1);
    $sec1 = mysqli_fetch_array($result1);

    $load2 = "SELECT `sec2` FROM `kurz_data` WHERE email='$email'";
    $result2 = mysqli_query($conn, $load2);
    $sec2 = mysqli_fetch_array($result2);

    $load3 = "SELECT `sec3` FROM `kurz_data` WHERE email='$email'";
    $result3 = mysqli_query($conn, $load3);
    $sec3 = mysqli_fetch_array($result3);

    $load4 = "SELECT `sec4` FROM `kurz_data` WHERE email='$email'";
    $result4 = mysqli_query($conn, $load4);
    $sec4 = mysqli_fetch_array($result4);

    if($sec1["sec1"] != 1){
        $sec1msg = "<h2 style='color:#cf4848'>Neaktivované</h2>";
    }
    else {
        $sec1msg = "<h2 style='color:#4ec763'>Aktivované</h2>";
    }

    if($sec2["sec2"] != 1){
        $sec2msg = "<h2 style='color:#cf4848'>Neaktivované</h2>";
    }
    else {
        $sec2msg = "<h2 style='color:#4ec763'>Aktivované</h2>";
    }

    if($sec3["sec3"] != 1){
        $sec3msg = "<h2 style='color:#cf4848'>Neaktivované</h2>";
    }
    else {
        $sec3msg = "<h2 style='color:#4ec763'>Aktivované</h2>";
    }

    if($sec4["sec4"] != 1){
        $sec4msg = "<h2 style='color:#cf4848'>Neaktivované</h2>";
    }
    else {
        $sec4msg = "<h2 style='color:#4ec763'>Aktivované</h2>";
    }
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Panel - Akordeon-Kurzy</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="Styling/css/colors.css">
</head>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-WCYV6D35X4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WCYV6D35X4');
</script>
<html>
    <body>
        
    <header>
        <?php require("header.php") ?>
    </header>

    <section>
        <div id="main">
            
        <div class="mobile-center">
          <div class="kurz-1">
            <h1>Kurz č.1</h1>
            <h4>V tomto kurze sa naučíte:</h4>
            <h6>- Základnú & Pokročilú teóriu</h6>
            <h6>- Noty & Basy & Zápis</h6>
            <h6>- Vylepšovacie prvky</h6>
            <h6>- A ďalšie...</h6>
            <button class="buy-btn" onclick=" window.open('payment.php')">Zakúpiť</button>
            <button class="link-btn" onclick="window.open('/Sekcia1/main.php','_blank')">Kurz</button>
            <?php echo "$sec1msg" ?>
          </div>
        </div>

        <div class="mobile-center">
          <div class="kurz-2">
            <h1>Kurz č.2</h1>
            <h4>Už čoskoro!</h4>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <button class="buy-btn" >- - -</button>
            <button class="link-btn" >- - -</button>
            <?php echo "$sec2msg" ?>
          </div>
        </div>

        <div class="mobile-center">
          <div class="kurz-3">
            <h1>Kurz č.3</h1>
            <h4>Vo vývoji!</h4>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <button class="buy-btn" >- - -</button>
            <button class="link-btn" >- - -</button>
            <?php echo "$sec3msg" ?> 
          </div>
        </div>

        <div class="mobile-center">
          <div class="kurz-4">
            <h1>Kurz č.4</h1>
            <h4>Vo vývoji!</h4>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <h6>- XXX</h6>
            <button class="buy-btn" >- - -</button>
            <button class="link-btn" >- - -</button>
            <?php echo "$sec4msg" ?> 
          </div>
        </div>

        </div>    
    </section> 

    <div id="center">
        <h4 class="desc2">Dôležité: Pri zakupováni kurzu v sekcií "email" zadajte email ktorým ste sa zaregistrovali na túto stránku. <br>Ak ho nezadáte, po zaplatení nebude váš kurz aktivovaný.</h4>
    </div>    

    <h1 id="center">Vývoj kurzu č.2</h1>
    <div id="center"> 
       <div class="progress">
        <div class="progress__fill"></div>
        <span class="progress__text">10%</span>
      </div>   
    </div>    
    <p class="desc" id="center">Posledný update: 15.3.2023</p>

    <section class="footer" >
        <?php require("footer.php") ?>
    </section>

    </body>
</html>