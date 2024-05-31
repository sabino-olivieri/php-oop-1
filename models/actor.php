<?php 
    class actor {
        private string $name;
        private string $role;

        public function set_actor_name(string $name) {
            if(!empty(trim($name))) {
                $this->name = ucfirst(trim($name));
            } else {
                throw new Exception("Il campo nome non può essere vuoto");
            }
        }

        public function get_actor_name() {
            return $this->name;
        }

        public function set_actor_role(string $role) {
            if(!empty(trim($role))) {
                $this->role = ucfirst(trim($role));
            } else {
                throw new Exception("Il campo ruolo non può essere vuoto");
            }
        }

        public function get_actor_role() {
            return $this->role;
        }
    }
?>