<?php
// Création d'une classe utilisateur 
class Utilisateur {
    //Membres privés
    private $_nom;
    private $_prenom;
    private $_email;
    private $_motDePasse;

    //attribut (public)
    public $age;

    //méthode (setter, mutateur)
    public function setNom($nom) {
        $this->_nom = $nom;
        //$this-> _nom = $nom
       // $this représente l'instance
       // Si on utilise $this, on ne met pas le $ du membre 
    }

    public function setPrenom($prenom) {
        $this->_prenom = $prenom;

    }
    //méthode (getter, acesseur)
    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    public function nomComplet() {
        //return $_prenom. ' '. $_nom;
        return "$this->_prenom  $this->_nom";
    }
} // Fin classe utilisateur

?>

<?php
$utilisateur1 = new Utilisteur();
$utilisateur2 = new Utilisteur();

$utilisateur1 ->setNom("dupont");
$utilisateur1 ->setPrenom("morgan");

echo $utilisateur1 ->nomComplet();

$utilisateur2 ->setNom("Cacahuète");
$utilisateur2 ->setPrenom("Salée");

echo $utilisateur2 ->nomComplet();

// Pas de $ pour un membre de l'objet 
$utilisateur1 ->age = 5;
echo $utilisateur1 ->age;


?> 