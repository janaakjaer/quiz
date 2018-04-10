<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
$_SESSION['quest3'] = $_POST['quest3'];
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
        <title>Spørgsmål 4 | Genforenings- og Grænsemuseets quiz</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header
        ?> 
        <form action='question5.php' method='post'> <!-- Send oplysninger til siden question5.php -->
            <fieldset>
                <legend><h3>&nbsp;Spørgsmål 4&nbsp;</h3></legend><br>
                <h4 class='heading2'>Hvad var inskriptionen (teksten) på hestens forsølvede hov?</h4>
            <input type='radio' name='quest4' value='Jeg Kongen bar, hvor Grænsen var' required> Jeg Kongen bar, hvor Grænsen var<br>
            <input type='radio' name='quest4' value='Jeg Kongen bar til grænsefesten højt mod nord, hvor Sønderjylland igen blev dansk'> Jeg Kongen bar til grænsefesten højt mod nord, hvor Sønderjylland igen blev dansk<br>            
            <input type='radio' name='quest4' value='Jeg Kongen bar over Grænsen hen, da Sønderjylland blev dansk igen'> Jeg Kongen bar over Grænsen hen, da Sønderjylland blev dansk igen<br><br>   <!-- Det korrekte svar er C -->
            </fieldset> <!-- FIELDSET (SPØRGSMÅL 4)-->
            
            <div class='navigation'>
                <input type='submit' class='button' value='Næste&nbsp;&nbsp;&nbsp;>>>'>
            </div> <!--  NAVIGATION -->
        </form>
        <?php require 'footer.php'; ?>
    </body> <!-- BODY -->
</html> <!-- HTML -->
