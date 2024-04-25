<?php

class CompteBancaire{
    private $_nom;
    private $_solde;



    public function __construct($nom,$solde){
        $this ->_nom =$nom;
        $this ->_solde=$solde;
    }

    // Setter
    public function setNom($nom){$this->_nom = $nom;}
    //Getter
    public function getNom(){return 'Nom : '.$this->_nom;}

    public function setSolde($solde){$this->_solde = $solde;}
    public function getSolde(){return 'Solde : ' .$this ->_solde;}

    // fonction crédité 
    function crediter($somme){
        $this->_solde = $this->_solde + $somme ;
    }

    function debiter($somme){
        $this->_solde = $this->_solde - $somme ;
    }
}



class LivretA extends CompteBancaire {
    private $_taux_interet ;

    public function __construct($nom, $solde, $taux_interet)
    {
        parent::__construct($nom, $solde);
        $this->_taux_interet = $taux_dinteret;
    }

    public function setTaux($taux_dinteret){$this->_taux_interet =$taux_dinteret;}
    public function getTaux(){return `Taux d'interet :`.$this->_taux_interet;}



    public function elementscomplet(){
        return"<br>$this->_nom <br>$this->_solde <br>$this->_taux_interet <br>";
    }

}

$client = new CompteBancaire();
$client2 = new LivretA();
$client->setnom("Durand");
$client->setSolde("400");
$client->setTaux("134 897 km ");
echo $client->elementscomplet();



?>