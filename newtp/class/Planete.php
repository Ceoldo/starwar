<?php
require_once __DIR__ . '/CorpsCeleste.php';

class Planete extends CorpsCeleste {
    public function __construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $type) {
        parent::__construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $type);
    }

    public function afficherInfos() {
        parent::afficherInfos();
    }
}
?>
