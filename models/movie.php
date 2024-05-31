<?php


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
            $this->title = ucfirst(trim($title));
            $this->year_release = trim($year_release);
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

        // ------------ genre --------------
        public function set_genre(Genre $genre) {
            $this->genre = $genre;
        }

        public function get_genre() {
            return $this->genre;
        }
        // ------------------------------------

        //------------ director ---------------
        public function set_director(string $director) {
            if(!empty(trim($director))) {
                $this->director = ucfirst(trim($director));
            } else {
                throw new Exception("Il nome del regista non può essere vuoto");
            }
        }

        public function get_director() {
            return $this->director;
        }
        //-------------------------------------

        // --------------- cast --------------------
        public function set_cast(Actor $actor) {

            $this->cast[] = $actor;
        }

        public function get_cast() {
            return $this->cast;
        }
        // -----------------------------------------

        // -------------- country -----------------
        public function set_country(string $country_production) {
            if(!empty(trim($country_production))) {
                $this->country_production = ucfirst(trim($country_production));
            } else {
                throw new Exception("Il campo paese di produzione non può essere vuoto");
            }
        }

        public function get_country() {
            return $this->country_production;
        } 



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
