<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice Carre</title>
    </head>
    <body>
        
        <?php
        include_once './Carre.php';
        
        $carreRouge = new Carre(50, 'red');
        
        echo $carreRouge->afficherSuperficie();
        echo $carreRouge->afficher();
        ?>
     
    </body>
</html>
