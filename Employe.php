<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author marlene
 */
include_once './Personne.php';

class Employe extends Personne {
    protected $dateArrivee;
    protected $salaire;
    
    /*faire ctrl espace pr avoir le construct du parent*/
    public function __construct(string $nom, 
            string $prenom, 
            int $age, 
            string $region, 
            DateTime $dateArrivee, 
            int $salaire) {
        //On appel le constructeur du parent car 
        //celui ci attend des arguments pour faire une
        //personne avec toutes ses propriétés.
        parent::__construct($nom, $prenom, $age, $region);
        $this->dateArrivee = $dateArrivee;
        $this->salaire = $salaire;
    }
    
    public function anciennete():int {
        //On récupère la date du jour avec un new DateTime()
        //sans lui fournir d'argument
       $today = new DateTime();
        //On fait la différence entre la date du jour 
        //et la date d'arrivée de l'employé avec la
        //méthode diff.
        //Cette méthode nous renvoie un objet DateInterval
       $difference = $this->dateArrivee->diff($today);
       //var_dump($difference); pr voir ce que ça donne en l'affichant
        //On récupère le nombre d'années d'écart stockées
        //dans la propriété y du DateInterval
       return $difference->y;
       //propriété "y" qui contient le nbr d'années entre les 2
       //diff renvoie un DateInterval
    }
    
    public function augmentation() {
        //On récupère l'ancienneté de l'employé avec
        //la méthode anciennete()
        $anciennete = $this->anciennete();
         //On augmente le salaire en conséquence 2%, 5%, 10%
        if($anciennete < 5) {
            $this->salaire *=1.02;
        } elseif ($anciennete < 10) {
            $this->salire *= 1.05;
        }else{
    $this->salaire *= 1.1;
        }
    }
        public function getSalaire():int{
     return $this->salaire;
        }
            }
    
