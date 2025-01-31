<?php

class CorpsCeleste {
    public $nom;
    public $masse;  
    public $diametre; 
    public $demiGrandAxe;
    public $vitesse;
    public $type;

    public function __construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $type) {
        $this->nom = $nom;
        $this->masse = $masse;
        $this->diametre = $diametre;
        $this->demiGrandAxe = $demiGrandAxe;
        $this->vitesse = $vitesse;
        $this->type = $type;
    }

    public function getTypeEtoile() {
        if ($this->masse < 0.08) {
            return "Naine Brune";
        } elseif ($this->masse < 0.5) {
            return "Naine Rouge";
        } elseif ($this->masse < 1.5) {
            return "Naine Jaune";
        } elseif ($this->masse < 3) {
            return "Étoile Blanche";
        } elseif ($this->masse < 8) {
            return "Géante Bleue";
        } else {
            return "Supergéante";
        }
    }

    public function afficherInfos() {
        echo "Le corps céleste {$this->nom} est un(e) {$this->type} et appartient à une étoile de type " . $this->getTypeEtoile() . ".<br>";
    }
}

?>