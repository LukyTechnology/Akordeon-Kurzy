<?php
require("sec-cfg.php");
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width-device-width, initial-scale=1.0">
      <meta http-equiv="Cache-control" content="no-cache">
      <title>3.6 - Akordeon-Kurzy</title>
      <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon"/>


       <link rel="stylesheet" href="../Styling/css/Sec1/sec3.css">
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
        <h1>3.6 - Test</h1>
      </div>
      <div id="center" class="border">
        <p class="width-text" id="p-center">
            Noty máme za sebou. Prebrali sme si: Druhy nôt, Zápis nôt, Pomlčky a Predznamenania. Noty musíte ovládať špičkovo, čiže notám naozaj venujte pozornosť. Odporúčam si 
            poznámky vytlačiť a uložiť do nejakého fascikla aby ste mali teóriu pokope. Poznámky si môžete pozrieť <a href="files/Sec3.pdf" class="a-text" target="_blank">kliknutím sem</a>.
        </p>
      </div>
    </section>

    <section class="next">
      <div id="center">
        <p class="width-text" id="p-center">
            Potom ako si vytlačíte, alebo aspoň pozriete poznámky z tejto tretej sekcie, tak musíte sa tieto poznámky naučiť a až keď sa ich naučíte a budete chcieť sa otestovať, si
            vytlačte tento test, vyplňte si ho a potom si ho prekontrolujte cez dokument s výsledkami. Tento test vám pomôže otestovať vaše znalosti a pochopenie z tretej sekcie ktorú musíte ovládať.
        </p>
      </div>
    </section>

    <section class="test">
        <a href="files/Test3.pdf" target="_blank" class="left-t">Test</a>
        <a href="files/Výsledky3.pdf" target="_blank" class="right-t">Výsledky</a>
    </section>

    <section class="next">
      <div id="center" class="border-top">
        <p class="width-text" id="p-center">
          Väčšie polovica je za nami. Poďme sa teraz pozrieť do sveta basov.
        </p>
      </div>
    </section>

    <section class="buttons">
        <a href="3.5.php" class="left">« Naspäť</a>
        <a href="4.0.php" class="right">Ďalej »</a>
    </section>

    </body> 
</html>