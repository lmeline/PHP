<?php
Class Exemple {
    private $_prop1;
    private $_prop2;

    public function __construct(array $props) {
        $this-> hydrate($props);
    }

    private function hydrate(array $props) {

    }

    // Le paramètre est un tableau associatif 
    $o = new Exemple (['prop1=>'a', 'prop2'=>'b']);
    



}