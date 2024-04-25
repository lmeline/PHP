<?php
class Voiture extends Vehicule {
    private $_nb_portes;
    private $_cynlindree;
    private $_volume_coffre;

    function toString(){
    echo "Je suis une voiture" .$this->_couleur;
    }
}

class Velo extends Vehicule {
    private $assistance_electrique;

}

class Bateau extends Vehicule {
    private $_voile;
    private $_nb_cabines;

}

class Vehicule {
    private $_marque;
    private $_modele;
    private $_nb_roues;
    private $_couleur;
    private $_vitesse;
}
?>