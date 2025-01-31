<?php
require_once __DIR__ . '/factories/CorpsCelesteFactory.php';

class Course {
    private $participants = [];
    private $duree;

    public function __construct() {
        $this->duree = rand(1, 100); // Durée de la course en années
        $this->genererParticipants();
    }

    private function genererParticipants() {
        for ($i = 0; $i < 10; $i++) {
            $this->participants[] = CorpsCelesteFactory::creerCorpsCeleste();
        }
    }

    private function calculerToursOrbite($participant) {
        return ($this->duree * $participant->vitesse * 1000) / ($participant->demiGrandAxe * 2 * M_PI);
    }

    public function afficherGrilleDepart() {
        echo "<div class='container'>";
        echo "<h2> Grille de départ de la course </h2>";

        
        usort($this->participants, function ($a, $b) {
            return $a->demiGrandAxe <=> $b->demiGrandAxe;
        });

        foreach ($this->participants as $index => $participant) {
            echo "<p>Le participant #" . ($index + 1) . " est un(e) <strong>{$participant->type}</strong> nommé(e) <strong>{$participant->nom}</strong>.</p>";
            $participant->afficherInfos();
        }
        echo "</div>";
    }

    public function lancerCourse() {
        echo "<div class='container'>";
        echo "<h2> Début de la course </h2>";

        $classement = [];
        foreach ($this->participants as $participant) {
            $tours = $this->calculerToursOrbite($participant);
            $classement[] = ['objet' => $participant, 'tours' => $tours];
        }

       
        usort($classement, function ($a, $b) {
            return $b['tours'] <=> $a['tours'];
        });

        echo "<h2> Résultats de la course </h2>";
        // Podium
        for ($i = 0; $i < min(3, count($classement)); $i++) {
            $participant = $classement[$i]['objet'];
            $tours = round($classement[$i]['tours'], 2);
            $position = ["1", "2", "3"][$i];

            echo "<div class='podium'>{$position} Le {$participant->type} nommé(e) <strong>{$participant->nom}</strong> a effectué <strong>{$tours}</strong> tours d'orbite.</div>";
        }

        // Classement complet
        echo "<h2> Classement final </h2>";
        echo "<ul class='resultats'>";
        foreach ($classement as $index => $entry) {
            $participant = $entry['objet'];
            $tours = round($entry['tours'], 2);
            $rang = $index + 1;

            echo "<li> <span>#$rang</span> : {$participant->type} nommé(e) <strong>{$participant->nom}</strong>, avec <strong>{$tours}</strong> tours d'orbite.</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
}

// Lancer la course
$course = new Course();
$course->afficherGrilleDepart();
$course->lancerCourse();
?>
