<?php
require_once __DIR__ . '/../class/Planete.php';
require_once __DIR__ . '/../class/PlaneteNaine.php';
require_once __DIR__ . '/../class/Comete.php';
require_once __DIR__ . '/../class/Asteroide.php';

class CorpsCelesteFactory {
    public static function creerCorpsCeleste() {
        $types = ['Planete', 'PlaneteNaine', 'Comete', 'Asteroide'];
        $type = $types[array_rand($types)];

        $nom = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
        $masse = rand(0, 100) / 100;
        $diametre = rand(1, 100000);
        $demiGrandAxe = rand(1, 1000);
        $vitesse = rand(10, 100);

        switch ($type) {
            case 'Planete':
                $typePlanete = ['liquide', 'solide', 'gazeux'][array_rand(['liquide', 'solide', 'gazeux'])];
                return new Planete($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $typePlanete);
            case 'PlaneteNaine':
                $typePlaneteNaine = ['liquide', 'solide', 'gazeux'][array_rand(['liquide', 'solide', 'gazeux'])];
                return new PlaneteNaine($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $typePlaneteNaine);
            case 'Comete':
                return new Comete($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
            case 'Asteroide':
                return new Asteroide($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
        }
    }
}
?>
