<?php
require("sec-cfg.php");
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width-device-width, initial-scale=1.0">
      <meta http-equiv="Cache-control" content="no-cache">
      <title>3.2 - Akordeon-Kurzy</title>
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
        <h1>3.2 - Zápis Nôt</h1>
      </div>
      <div id="center" class="border">
        <p class="width-text" id="p-center">
            Noty máme teoretický prebraté, teraz si ukážeme ich správny zápis + si spojíme noty s učivom z druhej sekcie.
        </p>
      </div>
    </section>

    <section class="next" id="border-mobile" >
      <div id="center">
        <div class="width">
          <div class="mobile-center" >
            <img class="one-img" src="img/zápis.png" alt="">
          </div>
          <div class="mobile-center" >
            <p class="box" id="top3">
            Každá jedna nota sa zapisuje širšiou guličkou buď stredom na čiaru alebo do medzery. Pozícia tejto noty sa zapisuje na miesto v osnove, ktoré sa má zahrať. Po tomto 
            kruhu nastupuje na úlohu či notu máme vyplniť alebo nie. Ak máme zapísať polovú alebo celú notu tak kruh necháme prázdny, ak inú notu tak kruh vyplníme. Potom už len
            pridáme čiarku. Čiarka sa nepridáva iba pri plnej note. Taktiež pozor na pravidlo z druhej sekcie! Ak je nota na tretej čiare alebo vyššie tak čiarka ide smerom dole!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="next" id="border-mobile" >
      <div id="center">
        <p class="width-text" id="p-center">
          Kľúče či oktávy nemajú na druhy nôt žiaden vplyv. Jedine čo má vplyv na druhy nôt sú takty. Tie sme si už preberali no poďme si to teraz konkrétne vysvetliť.
        </p>
      </div>
    </section>

    <section class="next">
      <div id="center" class="border">
        <div class="width">
          <div class="mobile-center" >
            <img class="one-img" src="img/taktzápis.png" alt="">
          </div>
          <div class="mobile-center" >
            <p class="box" id="top3">
            Ako sme si už hovorili tak dva čísla na začiatku riadka určujú koľko tón má byť v jednom takte. Takže ak máme napríklad čísla: hore 3 a dole 4 tak to znamená, 
            že jeden takt musí obsahovať 3 štvrťové noty. ALE! Keďže je dole číslo 4 neznamená, že všetky noty musia byť štvrťové! Jeden takt sa môže aj napríklad zložiť z
            nasledovných nôt: štvrťová a polová, ktoré dokopy obsahujú 3 štvrťové noty, teda 3 doby. Alebo napríklad: pólová a dve osminové noty, ktoré spolu znova tvoria 3 doby.
            Čiže takto môžete tieto noty mixovať, a tak vylepšovať dannú skladbu alebo pesničku. 
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="next">
      <div id="center">
      <img class="iframe" src="img/videoerror.png" alt="">
      </div>
    </section>

    <section class="next">
      <div id="center">
        <p class="width-text" id="p-center">
          Zápis nôt a takty máme kompletne za nami. Teraz si poďme vysvetliť pojem pomlčky.
        </p>
      </div>
    </section>

    <section class="buttons">
        <a href="3.1.php" class="left">« Naspäť</a>
        <a href="3.3.php" class="right">Ďalej »</a>
    </section>

    </body> 
</html>