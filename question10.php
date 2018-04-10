<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
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
-->  <!-- COMMENTS -->

<html lang="da"> <!-- 'lang' fortæller skærmlæsere, at sproget er dansk -->
    <head>
        <meta charset="UTF-8"> <!-- Sætter karaktersættet til UTF-8 som indeholder æ, ø og å -->
        <title>Genforenings- og Grænsemuseets quiz | Spørgsmål 10</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header
            include_once 'functions.php'; // Henter en side med funktioner
            require_once 'connect.php'; // Henter opkoblingslink til database
        ?> 
        <form action='scorecard.php' method='post'> <!-- Send oplysninger til siden scorecard.php -->
            <fieldset>
                <legend><h3>&nbsp;Spørgsmål 10&nbsp;</h3></legend><br>
                <h4 class='heading2'>Spørgsmål nummer 10?</h4>
            <input type='radio' name='quest10' value='Svar 10-A'> 1. mulighed<br>
            <input type='radio' name='quest10' value='Svar 10-B'> 2. mulighed<br>            
            <input type='radio' name='quest10' value='Svar 10-C'> 3. mulighed<br><br>
            </fieldset> <!-- FIELDSET (SPØRGSMÅL 10)-->
            
            <div class='navigation'>
                <input type='submit' class='button' value='Næste&nbsp;&nbsp;&nbsp;>>>'>
            </div> <!--  NAVIGATION -->
        </form>
        <?php require 'footer.php'; ?>
    </body> <!-- BODY -->
</html> <!-- HTML -->
