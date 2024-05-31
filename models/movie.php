<?php

use function PHPSTORM_META\exitPoint;

    class Movie {
        public string $title;
        public string $year_release;
        private int $duration;
        private Genre $genre;
        private string $director;
        private array $cast;
        private string $country_production;
        private string $language;

        public function __construct(string $title, string $year_release)
        {
            $this->title = $title;
            $this->year_release = $year_release;
        }

        // -------------- duration -------------------

        public function set_Duration(int $duration) {
            if($duration > 0) {
                $this->duration = $duration;
            } else {
                throw new Exception("Il film non può durare meno di un minuto");
            }
        }

        public function get_duration() {
            $hours = $this->duration / 60;
            $minutes = 0;
            if(is_float($hours)){
                $decimal = $hours - (int) $hours;
                $minutes = $decimal * 60;
            }

            return (int) $hours . "h, " . $minutes . "min";
        }
        //-----------------------------------


    }
?>


<!-- Titolo: Italiano e originale (se diverso)
Anno di uscita:
Durata:
Genere: (es. commedia, drammatico, thriller, azione, animazione)
Regista:
Attori principali:
Paese di produzione:
Lingua:
Eventuali premi vinti: -->
