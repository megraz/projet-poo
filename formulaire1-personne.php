<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire Personne</title>
    </head>
    <body>
        <?php
        if(isset($_POST['nom'])) {
            //on échapper le contenu du post
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            
            include_once './Personne.php';
            $instancePersonne = new Personne($post['nom'],
                    $post['prenom'],
                    $post['age'],
                    $post['region']);
            
            echo '<pre>';
            var_dump($instancePersonne);
            echo '</pre>';
        }
        ?>
        
        <form action="" method="post">
            <label>Nom : </label>
            <input type="text" name="nom"/>
            <label>Prénom : </label>
            <input type="text" name="prenom"/>
            <label>Age: </label>
            <input type="number" name="age"/>
            <label>Région : </label>
            <input type="text" name="region"/>
            <button>Envoyer</button>
        </form>
        
    </body>
</html>
