<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tamagotchi
 *
 * @author marlene
 */
class Tamagotchi {
    private $faim;
    private $joie;
    private $sommeil;
    private $hygiène;
    
    function __construct($faim, $joie, $sommeil, $hygiène) {
        $this->faim = $faim;
        $this->joie = $joie;
        $this->sommeil = $sommeil;
        $this->hygiène = $hygiène;
    }
    
    //$tama = new Tama();
    
    public function jouer() {
       $this->joie=$this->joie*4; //la premiere assigne de la joie et la suite multiplie par 4 le résultat
       $this->hygiène=$this->hygiène-2;
    }

    public function laver() {
        $this->joie= $this->joie-5;
        $this->sommeil= $this->sommeil+3;
    }
    
    public function dormir() {
        $this->faim= $this->faim+6;
        $this->sommeil= $this->sommeil-3;
    }
    public function nourrir() {
        $this->faim+=20;//même méthode que plus haut ms simplifié
        $this->hygiène-=10;
    }
    
    public function showEtat() {
        echo "Faim:" . $this->faim;
        echo "Hygiène:" . $this->hygiène;
        echo "joie:" . $this->joie;
        echo "Sommeil:" . $this->sommeil;
    }
    
    //tp-forme.php
    //pour utiliser cette classe on en fait une instance dc new
    //$tama = new Tamagotchi();
    //$tama->nourrir();
    //$tama->showEtat();
    
}
