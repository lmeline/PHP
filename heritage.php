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

class User{
    protected $_nom;

    public function __construct($nom){
        $this->_nom = $nom; 
    }
   

    public function setNom($nom){$this->_nom = $nom;}
    public function getNom(){return 'User :'. $this-> _nom;}

}

class Admin extends User {
    private $_password;

    public function __construct($nom,$_password){
        parent:: __construct($nom);
        $this-> _password = $_password;
    }
    //Setter Password
    public function setPassword($password){
        $this->_password = $password;
    }

    //Getter Password
    public function getPassword(){
        return $this->_password;
    }

    public function toString(){
        return $this->_nom. ' '.$this->_password;
    }

    public function getNom (){return 'Admin - '.parent::getNom();}

}


$user1 = new User('Dupont');
$user2 = new Admin('trente-quatre','34765');
echo'<br>';
echo $user1->getNom();
echo'<br>';
echo  $user2-> getNom();

?>