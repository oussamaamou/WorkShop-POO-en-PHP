<?php 
    class Utilisateur{
        protected $nom;
        protected $prenom;
        protected $type_utilisateur;

        function __construct($nom, $prenom, $type){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->type_utilisateur = $type;
        }

        function afficherNomComplet(){
            return $this->nom . ' ' . $this->prenom;
        }

        function changerNom($nom){
            $this->nom = $nom;
        }

        function changerPrenom($prenom){
            $this->prenom = $prenom;
        }
    }




    class Patient extends Utilisateur {
        private $reservation;

        public function __construct($nom, $prenom, $type, $reservation = null){
            parent::__construct($nom, $prenom, $type);
            $this->reservation = $reservation;

        }

        function prendreRendezVous($date){
            $this->reservation = $date;
            echo "Rendez-vous pris pour le " . $this->reservation . ".";
        }
    }




    class Medecin extends Utilisateur {
        private $specialite;

        public function __construct($nom, $prenom, $type, $specialite = null){
            parent::__construct($nom, $prenom, $type);
            $this->specialite = $specialite;

        }

        public function consulterPatient($patient){
            if($patient instanceof Patient){
                echo "Consulter le patiant" . $patient-> afficherNomComplet() . "par le Medecin" . $this-> afficherNomComplet() . "spécialisé en " . $this->specialite;
            }
        }

    }






?>