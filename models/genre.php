<?php 
    class Genre {
        private string $name;

        public function set_genre_name(string $name) {
            if(!empty($name)) {
                $this->name = ucfirst(trim($name));
            } else {
                throw new Exception("Il genere non può essere vuoto");
            }
        }

        public function get_genre_name() {
            return $this->name;
        }
    }
?>