<?php 
    session_start(); // Dette skal stå som det første i dokumentet for at virke! 
    $_SESSION['post-data'] = $_POST;
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
        <title>Genforenings- og Grænsemuseets quiz | Spørgsmål 5</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header
            include_once 'functions.php'; // Henter en side med funktioner
        ?> 
        <form action='question6.php' method='post'> <!-- Send oplysninger til siden question6.php -->
            <fieldset>
                <legend><h3>&nbsp;Spørgsmål 5&nbsp;</h3></legend><br>
                <h4 class='heading2'>Spørgsmål nummer 5?</h4>
            <input type='radio' name='quest5' value='Svar 5 - 1'> Kong Christian d. 10.<br>
            <input type='radio' name='quest5' value='Svar 5 - 2'> Kong Frederik d. 7.<br>            
            <input type='radio' name='quest5' value='Svar 5 - 3'> Gorm den Gamle<br><br>
            </fieldset> <!-- FIELDSET (SPØRGSMÅL 5)-->
            
            <div class='navigation'>
                <input type='submit' class='button' value='Næste&nbsp;&nbsp;&nbsp;>>>'>
            </div> <!--  NAVIGATION -->
        </form>
        <?php require 'footer.php'; ?>
    </body> <!-- BODY -->
</html> <!-- HTML -->
