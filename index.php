<?php
   require('modeleUtilisateur.php');

   $requete = getUtilisateurs();

   // Affichage
   require('vueAcceuil.php');


   /* 
      - AVIS (contenu, date de création, note / 5)
   
   */ 