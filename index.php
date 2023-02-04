<?php
   // Routeur
   require('controller/controller.php');

   try {
      if(isset($_GET['page'])) {
         if($_GET['page'] == 'acceuil') {
            home();
         }
         else if($_GET['page'] == 'avis') {
            testimonials();
         }
         else {
            throw new Exception("Cette page n'existe pas ou a été supprimée.");
         }
      }
      else {
         home();
      }
   }
   catch(Exception $e) {
      // die('Erreur : ' . $e->getMessage());
      $error = $e->getMessage();
      require('view/errorView.php');
   }