<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
?>
<html lang="da"> <!-- 'lang' fortæller skærmlæsere, at sproget er dansk -->
    <head>
        <meta charset="UTF-8"> <!-- Sætter karaktersættet til UTF-8 som indeholder æ, ø og å -->
        <title>Genforenings- og Grænsemuseets quiz | Dine resultater</title>
        <meta name="author" content="Jan Aakjaer"> <!-- Siden er lavet af Jan Aakjaer -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/printer.css"> <!-- Linker til stylesheetet til udskrift.' -->
    </head>
    <body>
        <div>
            
        </div> <!-- TOP MED NAVN OG STED -->
        <?php
        require_once 'header.php';
        require_once 'functions.php';
        require_once 'connect.php'; // Henter opkoblingslink til database
        echo "Tak fordi du har besvaret spørgeskemaet " . $_SESSION["0"] . " fra " . $_SESSION["1"] . ", her får du de rigtige svar:<hr>";
        echo "Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        answer($quest1);
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest2<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest3<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest4<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest5<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest6<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest7<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest8<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest9<br><br>";
        echo "<hr>";
        echo "1) Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: $quest10<br><br>";
        echo "<hr>";
        echo "Du har i alt $total svar rigtige - flot klaret!";
        require_once 'footer.php';
        ?>
    </body>
</html>
    