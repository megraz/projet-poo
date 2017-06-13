<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cercle
 *
 * @author marlene
 */
class Cercle {
    private $rayon;
    private $centre;
    
    public function __construct(int $rayon, Point $centre) {
        $this->rayon = $rayon;
        $this->centre = $centre;
    }
    

    public function afficher() :string {
        $diametre = $this->rayon*2;
        $top = $this->centre->getTop() - $this->rayon;
        $left = $this->centre->getLeft() - $this->rayon;
        
        $style = 'position:absolute;border-radius:100%;'
                . 'background-color:blue;'
                . 'top:' .$top . 'px;'
                . 'left:' .$left .'px;'
                . 'width:' .$diametre . 'px;'
                . 'height:' .$diametre . 'px';
        
        return '<div style="' . $style . '"></div>';
        
     }
}
