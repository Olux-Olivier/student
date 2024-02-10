<?php
 
 if(isset($_POST['envoyer'])){
      
      if(!empty($_POST['email']) and !empty($_POST['mdp'])){ // si les champs ne sont pas vides
         
         //connecter l'admin
         include '../../Model/Admin.php';
         $Admin = new Admin($_POST['email'],$_POST['mdp']);
         $Admin->ConnexionAdmin($Admin->get_email(),$Admin->get_mdp());
      }
      else{
         echo 'veuillez remplir tous les champs';
      }
 } 
 else{
   // on ne fait rien
 }