<?php

include_once './MaitreJeu.php';
include_once './Personnage.php';
session_start();

if(isset($_SESSION['mj'])) {
    $mj = $_SESSION['mj'];
} else {
    $mj = new MaitreJeu(
            new Personnage("Perso1",100,0,10),
            new Personnage("Perso2",100,2,9));
}

if(filter_has_var(INPUT_POST, 'attaque')) {
    $mj->attaque();
}

if(filter_has_var(INPUT_POST, 'defense')) {
    $mj->defense();
}

echo $mj->affichage();
$_SESSION['mj'] = $mj;

?>

<form method="POST">
    <button name="attaque">Attaquer</button>
    <button name="defense">Défendre</button>
</form>