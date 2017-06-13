<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carre
 *
 * @author marlene
 */
class Carre {
    private $taille;
    private $couleur;
    
    public function __construct(int $taille, string $couleur) {
        $this->taille = $taille;
        $this->couleur = $couleur;
    }
    
    public function afficherSuperficie():int {
        return $this->taille*$this->taille;
     }
     
     public function afficher() :string {
         $style = 'width:' . $this->taille . 'px;'
                 . 'height:' .$this->taille .'px;'
                 . 'background-color:' . $this->couleur;
         
         return '<div style="' .$style . '"></div>';
     }
     
    /* pas de getter setter car les valeurs du carre st fixes 
    * et on n'a pas besoin que se soit accessible depuis l'extérieur
     */
     
}
