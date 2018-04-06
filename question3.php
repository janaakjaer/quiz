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
        <title>Genforenings- og Grænsemuseets quiz | Spørgsmål 3</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header
            include_once 'functions.php'; // Henter en side med funktioner
        ?> 
        <form action='question4.php' method='post'> <!-- Send oplysninger til siden question4.php -->
            <fieldset>
                <legend><h3>&nbsp;Spørgsmål 3&nbsp;</h3></legend><br>
                <h4 class='heading2'>Spørgsmål nummer 3?</h4>
            <input type='radio' name='quest3' value='Svar 1'> Svar 1<br>
            <input type='radio' name='quest3' value='Svar 2'> Svar 2<br>            
            <input type='radio' name='quest3' value='Svar 3'> Svar 3<br><br>
            </fieldset> <!-- FIELDSET (SPØRGSMÅL 3)-->           
            <div class='navigation'>
                <input type='submit' class='button' value='Næste&nbsp;&nbsp;&nbsp;>>>'>
            </div> <!--  NAVIGATION -->
        </form>
        <?php require 'footer.php'; ?>
    </body> <!-- BODY -->
</html> <!-- HTML -->
