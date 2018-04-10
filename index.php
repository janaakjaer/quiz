<?php 
session_start(); // Skal stå øverst på den side, hvor SESSION bruges
$_SESSION["total"] = 0;
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
        <title>Test din viden om Genforenings- og Grænsemuseet</title> <!-- Titel på faneblad/side -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!--  Responsivt - siden må max være samme bredde som device og skal ikke være zoomet ind/ud  -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Linker til stylesheetet 'styles.css i mappen 'css' -->
    </head> <!-- HEAD -->
    
    <body>
        <?php 
            include_once 'header.php'; // Henter en ekstern header
        ?> 
        <p>Hej og velkommen til vores quiz om gamle dage.</p>
        <p>Svar på 10 spørgsmål og slut af med at få et diplom med dit resultat.</p><br>
        <p>Vi starter lige med lidt spørgsmål om dig selv.</p><br><br>
        <form action='question1.php' method='POST'> <!-- SEND DATA TIL QUESTION1.PHP -->
            <fieldset>
                <legend><h3>&nbsp;Lidt om dig selv&nbsp;</h3></legend><br>
                <label>Hvad hedder du?</label><br>
                <input type='text' name='navn' placeholder='Skriv dit navn' autofocus required><br><br> <!-- autofocus gør inputfeltet aktivt straks man lander på siden. -->
                <label>Hvor kommer du fra?</label><br>
                <input type='text' name='by' placeholder='Hvilken by bor du i?' required><br><br>
            </fieldset> <!-- FIELDSET -->
            <input type='submit' class='button' value='Start quizzen'>
        </form> <!-- FORM -->
        <?php require 'footer.php'; ?>
    </body> <!-- BODY -->
    
</html> <!-- HTML -->