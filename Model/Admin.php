<?php

    function connexion(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=student','root','');
        } catch (PDOexception $e)
        {
            print 'Erreur' . $e->getMessage(). '<br>/';
            die;
        }

        return $db;
    }
    
     class Admin{
        private $email;
        private $mdp;

        public function __construct($email, $mdp) {
            $this->email = $email;
            $this->mdp = $mdp;
        }
        
        //functions email
        public function get_email(){
            return $this->email;
        }

        public function set_email($new_email){
            $this->email = $new_email;
        }

        //functions mdp
        public function get_mdp(){
            return $this->email;
        }

        public function set_mdp($new_mdp){
            $this->email = $new_mdp;
        }

        public function ConnexionAdmin($email,$mdp){
            $bdd = connexion();
            $sql = "SELECT email, mdp FROM t_admin WHERE email = ? AND mdp = ?";
            $requette = $bdd->prepare($sql);
            $requette->execute([$email,$mdp]);
            $donnee = $requette->fetchAll();
            if($donnee == 0)
            {
                echo 'Connexion echouee';
            } 
            else
            {
                echo 'la onnexion est reussie ';
            }
        }

        
    }

?>