<?php
require("sec-cfg.php");
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width-device-width, initial-scale=1.0">
      <meta http-equiv="Cache-control" content="no-cache">
      <title>3.4 - Akordeon-Kurzy</title>
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
        <h1>3.4 - Predznamenania</h1>
      </div>
      <div id="center" class="border">
        <p class="width-text" id="p-center">
            Teraz prichádza čas vysvetliť si načo slúžia čierne klávesy. Takže poďme si to teoreticky vysvetliť.
        </p>
      </div>
    </section>

    <section class="next">
      <div id="center">
        <div class="width">
          <div class="mobile-center" >
            <img class="one-img" src="img/predznamenania.png" alt="">
          </div>
        <div class="mobile-center" >
          <p class="box" id="top6">
            Predznamenania sú 2 znaky, konkrétne Krížiky a Béčka. Tieto znaky môžte vidieť na obrázku, prvý je krížik, druhé je béčko. Tieto dva znamienka sa zapisujú
            pred dannú notu a notu zmenia. Ak sa jedno z týchto dvoch predznamenaní nachádza pred notou tak nota sa zvyšuje alebo znižuje o poltón. Ak je pred notou
            krížik tak sa nota o poltón zvyšuje, ak tam je béčko tak sa nota o poltón znižuje. Ako to vyzerá na osnove môžte vidieť nižšie.
          </p>
        </div>
        </div>
      </div>
    </section>

    <section id="border-mobile" >
      <div id="center" class="next">
        <img class="four-img" src="img/predzpriklad.png" alt="">
      </div>
    </section>

    <section class="next" id="border-mobile" >
      <div id="center">
        <div class="width">
          <div class="mobile-center" >
            <img class="one-img" src="img/krížik.png" alt="">
          </div>
          <div class="mobile-center" >
           <p class="box" id="top2">
            Ak sa nachádza krížik pred notou tak sa nota zvyšuje o poltón, čo znamená, že namiesto bielej klávesy zahráme čiernu klávesu, ktorá je pod bielou klávesou. Čiže
            ak nota bude D a pred touto notou bude krížik tak zahráme čiernu klávesu medzi D a E. Krížiky budeme viacej cvičiť na akordeóne v druhom kurze.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="next">
      <div id="center" class="border">
        <div class="width">
          <div class="mobile-center" >
           <img class="one-img" src="img/béčko.png" alt="">
          </div>
          <div class="mobile-center" >
            <p class="box" id="top2" >
            Ak sa nachádza béčko pred notou tak sa nota znižuje o poltón, čo znamená, že namiesto bielej klávesy zahráme čiernu klávesu, ktorá je nad bielou klávesou. Čiže
            ak nota bude D a pred touto notou bude béčko tak zahráme čiernu klávesu medzi D a C. Béčka budeme taktiež viacej cvičiť v druhom kurze.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="next">
      <div id="center">
        <p class="width-text" id="p-center">
          Taktiež sa krížiky alebo béčka môžu dať na začiatok medzi kľúč a takt. Ak bude takto krížik alebo béčko na začiatku znamená to, že sa predznamenanie aplikuje na dannú tóninu
          bez toho aby sa písalo pred každú notu na dannej tónine. Samozrejme, že to platí len v rovnakom tóne čiže ak je napríklad béčko v husľovom kľúči na tóne C2, tak v celej skladbe &
          pesničke musíme hrať všetky C (bez ohľadu na oktávu) s béčkom. Nižšie mate ukážku ako to vyzerá v osnove.
        </p>
      </div>
    </section>

    <section class="border" >
      <div id="center" class="next">
        <img class="four-img" src="img/predzpriklad2.png" alt="">
      </div>
    </section>

    <section class="next">
      <div id="center">
        <div class="width">
          <div class="mobile-center" >
            <img class="one-img" src="img/odrážka.png" alt="">
          </div>
          <div class="mobile-center" >
            <p class="box" id="top6">
            Pravdepodobne sa stretnete aj s týmto znakom. Tento znak sa volá odrážka. Odrážka sa znova dáva pred notu a jeho úloha je dannú notu vyresetovať a zbaviť sa všetkých
            predznamenaní. Čiže ak na začiatku riadku je stanové béčko na tóne E a bude niekde v riadku E s týmto znakom tak sa bude hrať normálne E bez poltónu, teda biela klávesa.
            V praxi to môže vypadať, ako na obrázku nižšie.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="border" >
      <div id="center" class="next">
        <img class="four-img" src="img/predzpriklad3.png" alt="">
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
          Krížiky a béčka sú ale ešte viacej komplikovanejšie, takže sa k ním ešte vrátime v piatej sekcií.
        </p>
      </div>
    </section>

    <section class="buttons">
        <a href="3.3.php" class="left">« Naspäť</a>
        <a href="3.5.php" class="right">Ďalej »</a>
    </section>

    </body> 
</html>