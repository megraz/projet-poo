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
        include_once './Point.php';
        include_once './Cercle.php';
        
        
        $carreRouge = new Carre(50, 'red');
        
        echo $carreRouge->afficherSuperficie();
        echo $carreRouge->afficher();
        
        $pointA = new Point(10, 100);
        $pointB = new Point(340, 400);
        
        echo $pointA->afficher();
        echo $pointB->afficher();
        
        echo $pointA->distanceFrom($pointB);
        
        $cercle = new Cercle(50, $pointB);
        echo $cercle->afficher();
        ?>
     
    </body>
</html>
