<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
$_SESSION['quest1'] = $_POST['quest1'];  // Laver et array med POST fra question1-siden.

    
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
        <title>Spørgsmål 2 | Genforenings- og Grænsemuseets quiz</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header
        ?> 
        <form action='question3.php' method='post'> <!-- Send oplysninger til siden question3.php -->
            <fieldset>
                <legend><h3>&nbsp;Spørgsmål 2&nbsp;</h3></legend><br>
                <h4 class='heading2'>Hvilken konge red over grænsen ved Genforeningen i 1920?</h4>
            <input type='radio' name='quest2' value='Kong Frederik d. 9. (IX)' required> Kong Frederik d. 9. (IX)<br>
            <input type='radio' name='quest2' value='Kong Christian d. 10. (X)'> Kong Christian d. 10. (X)<br>  <!-- Det korrekte svar er B -->          
            <input type='radio' name='quest2' value='Kong Frederik d. 10. (X)'> Kong Frederik d. 10. (X)<br><br>
            </fieldset> <!-- FIELDSET (SPØRGSMÅL 2)-->            
            <div class='navigation'>
                <input type='submit' class='button' value='Næste&nbsp;&nbsp;&nbsp;>>>'>
            </div> <!--  NAVIGATION -->
        </form>
        <?php require 'footer.php'; ?>
    </body> <!-- BODY -->
</html> <!-- HTML -->
