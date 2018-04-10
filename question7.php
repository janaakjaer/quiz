<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
$_SESSION['quest6'] = $_POST['quest6'];
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
        <title>Spørgsmål 7 | Genforenings- og Grænsemuseets quiz</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header
        ?> 
        <form action='question8.php' method='post'> <!-- Send oplysninger til siden question8.php -->
            <fieldset>
                <legend><h3>&nbsp;Spørgsmål 7&nbsp;</h3></legend><br>
                <h4 class='heading2'>Hvad hed Kong Christians dronning?</h4>
            <input type='radio' name='quest7' value='Frederikke'> Frederikke<br>
            <input type='radio' name='quest7' value='Alexandrine'> Alexandrine<br>  <!-- Det korrekte svar er B -->          
            <input type='radio' name='quest7' value='Margrethe'> Margrethe<br><br>
            </fieldset> <!-- FIELDSET (SPØRGSMÅL 7)-->
            
            <div class='navigation'>
                <input type='submit' class='button' value='Næste&nbsp;&nbsp;&nbsp;>>>'>
            </div> <!--  NAVIGATION -->
        </form>
        <?php require 'footer.php';?>
    </body> <!-- BODY -->
</html> <!-- HTML -->
