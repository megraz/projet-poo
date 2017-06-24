<?php
include_once './Personnage.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaitreJeu
 *
 * @author marlene
 */
class MaitreJeu {
    private $perso1;
    private $perso2;
    
    //private $persoActif;
    //private $persoCible;
            
            
    function __construct(Personnage $perso1, Personnage $perso2) {
        $this->perso1 = $perso1;
        $this->perso2 = $perso2;
    }

    public function attaque() {
        if($this->tour % 2 == 0) {
            $this->perso1->attaquer($this->perso2);
        } else {
            $this->perso2->attaquer($this->perso1);
        }
        $this->tour++;
    }
    
    public function defense() {
         if($this->tour % 2 == 0) {
            $this->perso1->defendre();
        } else {
            $this->perso2->defendre();
        }
        $this->tour++;
    }
    public function affichage() {
        return $this->perso1->genererHTML() . $this->perso2->genererHTML();
    }
}
