<?php
require("sec-cfg.php");
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width-device-width, initial-scale=1.0">
      <meta http-equiv="Cache-control" content="no-cache">
      <title>1.0 - Akordeon-Kurzy</title>
      <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon"/>


       <link rel="stylesheet" href="../Styling/css/Sec1/sec1.css">
       <link rel="stylesheet" href="../Styling/css/colors.css">
       <link rel="stylesheet" href="../Styling/css/main.css">
    </head>
    <body>

    <header>
        <?php require("header.php") ?>
    </header>

    <section>
        <?php require("sidebar.php") ?>
    </section>

    <section>
      <div id="center">
        <h1>1.0 - Akordeon</h1>
      </div>
      <div id="center" class="border">
        <p class="width-text" id="p-center">
          V tejto prvej sekcií si rozoberieme harmoniku ako hudobný nástroj. Povieme si viacej o harmonike, ako funguje, 
          ako sa hrá na nej a rozdelíme si ju do 3 skupín. Ku každej si niečo viacej povieme v pod sekcií.
        </p>
      </div>
    </section>

    <section class="next" id="border-mobile">
      <div id="center">
        <div class="width">
          <div class="mobile-center">
            <img class="one-img" src="img/harmonika.png" alt="">
          </div>
          <div class="mobile-center">
           <p class="box" id="top">
            Predpokladám, že akordeón poznáte, keď ste si zakúpili tento kurz. Ale ak by ste si to potrebovali predstaviť tak máte tu obrázok.
           </p>
          </div>
        </div>
      </div>
    </section>

    <section class="next-less" id="top-extra">
      <div id="center">
        <p class="width-text" id="p-left">
        Akordeóny majú 3 základné časti. Rozdeľujeme ich na: Klávesy, Mech a Basy. Každá z týchto 3 časti Akordeónu hrá
         v pesničkách a najmä skladbách obrovskú rolu. Takže treba si urobiť prehľad a aspoň trocha preskúmať a zistiť, čo 
         sa dá s každou časťou akordeónu robiť. A určite žiadnu časť harmoniky nepodceňovať, pretože každá časť má svoje čaro.
        </p>
      </div>
    </section>

    <section class="border">
      <div id="center">
        <img class="two-img" src="img/a-rozloženie.png" alt="">
      </div>
    </section>

    <section class="next">
      <div id="center">
        <p class="width-text" id="p-center">Teraz si prejdeme každú časť akordeónu a rozoberieme si ju do väčších detailov a taktiež si ukážeme, čo všetko sa dá vďaka tomu vykúzliť.
        </p>
      </div>
    </section>

    <section class="buttons">
        <a href="main.php" class="left">« Naspäť</a>
        <a href="1.1.php" class="right">Ďalej »</a>
    </section>

    </body> 
</html>