<?php

class Employe
{
    private string $nom;
    private string $poste;
    private float $salaire;

    public function __construct(string $nom, string $poste, float $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return "Nom :  $this->nom , Poste : $this->poste, Son salaire est $this->salaire.";
    }
  
    public function __clone()
    {
        $this->salaire *= 1.1 ;
    }
}

$employe1 = new employe('fatima', 'developpeuseWeb', 3000);
$employe2 = clone $employe1;

echo "<pre>";
var_dump($employe2);
echo "</pre>";


// echo "<p>" . $employe1->__toString() . "</p>";
// echo "<p>" . $employe2->__toString() . "</p>";