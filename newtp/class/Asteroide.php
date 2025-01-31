<?php
require_once __DIR__ . '/CorpsCeleste.php';

class Asteroide extends CorpsCeleste {
    public function __construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse) {
        parent::__construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse, "solide");
    }

    public function afficherInfos() {
        parent::afficherInfos();
    }
}
?>
