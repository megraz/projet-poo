<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author marlene
 */
class Personnage {
    protected $nom;
    protected $vie;
    protected $force;
    protected $defense;
    
    function __construct(string $nom, int $vie = 50, int $force = 60, int $defense = 50) {
        //$vie = 50 le =50 devient un paramètre, une valeur par défaut
        //int pr typer
        $this->nom = $nom;
        $this->vie = $vie;
        $this->force = $force;
        $this->defense = $defense;
    }

    
     /**
     * Une méthode qui attaque un autre personnage
     * @param Personnage $victime Cet argument représente
     * la cible de notre attaque. Il faudra qu'il soit
     * de type Personnage également.
     */
    public function attaquer(Personnage $cible) {
        //cible est une instance de personnage
        $degats = $this->force - $cible->defense;
        if($degats <=0) {
            $degats = 1;
        }
        $cible->vie -= $degats;
    }
    
     public function defendre() {
        $this->defense+=10;
    }
    /**
     * Méthode générant le HTML d'un personnage
     * @return string renvoie les statistiques d'un
     * personnage sous forme d'une liste html
     */
    public function genererHTML() {
        return '<ul>'
      .$this->genererStats()
        . '</ul>';
    }
    protected function genererStats(): string {
        return '<li>Nom :' . $this->nom . '</li>'
        . '<li>Vie : ' . $this->vie . '</li>'
        . '<li>Force : ' . $this->force . '</li>'
        . '<li>Defense : ' . $this->defense . '</li>';
    }
}
