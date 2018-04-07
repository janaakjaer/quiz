<?php 
    session_start(); // Dette skal stå som det første i dokumentet for at virke! 
    $_SESSION['post-data'] = $_POST;
  //  $name = $_POST['name'];
    
?>

<!DOCTYPE html> <!-- Viser at siden bygger på HTML5 -->
<!--
Denne quiz er et Real-Life-projekt for IBA Erhvervsakademi Kolding.
Multimediedesign 2. semester klasse DKMMD17B1
Gruppens medlemmer:
    Annemette Søgaard Hansen
    Camilla Vaaben Refsgaard
    Camilla Skovgaard
    Jan Aakjær
    Jane Gravers Jacobsen
--> <!-- COMMENTS -->

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
                
        echo "Kære " . $name . "fra " . $_SESSION['post-data']['city'] . "<br>Tak fordi du har besvaret spørgeskemaet, her får du de rigtige svar:<hr><br>";
        echo "Spørgsmål 1:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest1'] . "<br><br>";
        echo "<hr>";
    
        echo "Spørgsmål 2:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest2'] . "<br><br>";
        echo "<hr>";
    
        echo "Spørgsmål 3:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest3'] . "<br><br>";
        echo "<hr>";
        
        echo "Spørgsmål 4:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest4'] . "<br><br>";
        echo "<hr>";
        
        echo "Spørgsmål 5:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest5'] . "<br><br>";
        echo "<hr>";
        
        echo "Spørgsmål 6:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest6'] . "<br><br>";
        echo "<hr>";
        
        echo "Spørgsmål 7:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest7'] . "<br><br>";
        echo "<hr>";
        
        echo "Spørgsmål 8:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest8'] . "<br><br>";
        echo "<hr>";
        
        echo "Spørgsmål 9:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest9'] . "<br><br>";
        echo "<hr>";
        
        echo "Spørgsmål 10:<br>Hvem red over grænsen på en hvid hest d. 10. juli 1920?<br>";
        echo "Det rigtige svar er: <strong>Kong Christian d. 10.</strong><br>";
        echo "Dit svar var: " . $_SESSION['post-data']['quest10'] . "<br><br>";
        echo "<hr>";
     
        echo "Du har i alt $total svar rigtige - flot klaret!";
        require_once 'footer.php';
        print_r($_SESSION);
        ?>
    </body>
</html>
    