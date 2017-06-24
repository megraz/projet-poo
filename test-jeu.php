<?php

include_once './Personnage.php';
include_once './Soigneur.php';

session_start();

if (isset($_SESSION['perso1']) && isset($_SESSION['perso2'])) {  
    $perso1 = $_SESSION['perso1'];
    $perso2 = $_SESSION['perso2'];
} else {
    


//Modèle de données Jeu JS - Personnage.php
/*On crée 2 instances différentes de la classe Personnage*/
/*faire attention à l'ordre qu'on a indiqué sur la page Personnage.php*/
$perso1 = new Soigneur('Perso1',100, 20,30);
$perso2 = new Personnage('Perso2',140, 15,25);

}
/*$perso1->attaquer($perso2);
$perso1->defendre();

$perso2->defendre();
$perso2->attaquer($perso1);
*/

if(isset($_POST['attaque'])){
    $perso1->attaquer($perso2);
}
if(isset($_POST['defense'])){
    $perso1->defendre();
}

echo $perso1->genererHTML();
echo $perso2->genererHTML();

//On stock les perso ds leur session respective
$_SESSION['perso1'] = $perso1;
$_SESSION['perso2'] = $perso2;

?>
<form method="POST"> <!--action="Personnage.php"-->
    <input type="submit" name="attaque" value="Attaquer"/>
    <input type="submit" name="defense" value="Defendre"/> 
</form>