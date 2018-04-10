<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
$_SESSION["name"] = $_POST['navn'];  // Laver et array med POST fra index-siden.
$_SESSION["city"] = $_POST['by'];    // Laver et array med POST fra index-siden.
?><!DOCTYPE html> <!-- Viser at siden bygger på HTML5 -->
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
        <title>Spørgsmål 1 | Genforenings- og Grænsemuseets quiz</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header           
        ?> 
        <form action='question2.php' method='post'> <!-- Send oplysninger til siden question2.php -->
            <fieldset>
                <legend><h3>&nbsp;Spørgsmål 1&nbsp;</h3></legend><br>
                <h4 class='heading2'>Hvornår red kongen over grænsen for at fejre Genforeningen?</h4>
            <input type='radio' name='quest1' value='10. april 1920' required> 10. april 1920<br>  <!-- REQUIRED gør det nødvendigt at vælge en af mulighederne -->
            <input type='radio' name='quest1' value='10. juli 1920'> 10. juli 1920<br>  <!-- Det korrekte svar er B -->            
            <input type='radio' name='quest1' value='10. oktober 1920'> 10. oktober 1920<br><br>
            </fieldset> <!-- FIELDSET (SPØRGSMÅL 1)-->           
            <div class='navigation'>
                <input type='submit' class='button' value='Næste&nbsp;&nbsp;&nbsp;>>>'>
            </div> <!--  NAVIGATION -->
        </form>
        <?php require 'footer.php'; ?>
        
    </body> <!-- BODY -->
</html> <!-- HTML -->