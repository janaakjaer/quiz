<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
$_SESSION['quest10'] = $_POST['quest10'];
?>
<html lang="da"> <!-- 'lang' fortæller skærmlæsere, at sproget er dansk -->
    <head>
        <meta charset="UTF-8"> <!-- Sætter karaktersættet til UTF-8 som indeholder æ, ø og å -->
        <title>Dine resultater | Genforenings- og Grænsemuseets quiz</title>
        <meta name="author" content="Jan Aakjaer"> <!-- Siden er lavet af Jan Aakjaer -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet til udskrift.' -->
    </head>
    <body>
        <div>
            
        </div> <!-- TOP MED NAVN OG STED -->
        <?php
        require_once 'header.php';
        echo "Hej " . $_SESSION['name'] . " fra " . $_SESSION['city'] . "<br><br>";
        echo "Tak fordi du har besvaret spørgeskemaet, her får du de rigtige svar:<hr>";
        
        echo "<strong>Spørgsmål 1:</strong><br>";
        echo "Hvornår red kongen over grænsen for at fejre Genforeningen?<br>";
        echo "Det rigtige svar er: <strong>10. juli 1920</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest1'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 2:</strong><br>";
        echo "Hvilken konge red over grænsen ved Genforeningen i 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10. (X)</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest2'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 3:</strong><br>";
        echo "Hvad hed pigen, som kongen tog med op på sin hest?<br>";
        echo "Det rigtige svar er: <strong>Johanne</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest3'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 4:</strong><br>";
        echo "Hvad var inskriptionen på hestens forsølvede hov?<br>";
        echo "Det rigtige svar er: <strong>Jeg Kongen bar over Grænsen hen, da Sønderjylland blev dansk igen</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest4'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 5:</strong><br>";
        echo "Hvor syede man flagene til Genforeningen?<br>";
        echo "Det rigtige svar er: <strong>Christiansborg</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest5'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 6:</strong><br>";
        echo "Var Haderslev en del af Tyskland inden Genforeningen?<br>";
        echo "Det rigtige svar er: <strong>Ja, Haderslev var tysk</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest6'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 7:</strong><br>";
        echo "Hvad hed Kong Christians dronning?<br>";
        echo "Det rigtige svar er: <strong>Alexandrine</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest7'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 8:</strong><br>";
        echo "Hvad var Kong Christians valgsprog?<br>";
        echo "Det rigtige svar er: <strong>Min Gud, mit Land, min Ære</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest8'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 9:</strong><br>";
        echo "Hvad er Kong Christian til Kronprins Frederik?<br>";
        echo "Det rigtige svar er: <strong>Oldefar</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest9'];
        echo "<hr>";
        
        echo "<strong>Spørgsmål 10:</strong><br>";
        echo "Hvor mange soldater (fra Sønderjylland) deserterede (nægtede at deltage) i 1. verdenskrig,<br>
                    fordi de ikke ville kæmpe på Tysklands side?<br>";
        echo "Det rigtige svar er: <strong>2423</strong><br>";
        echo "<strong>Dit svar var: </strong>" . $_SESSION['quest10'];
       
        require_once 'footer.php';
        ?>
    </body>
</html>
    