<?php

   require('model/modeleUtilisateur.php');
   require('model/modeleAvis.php');


   function home() {
      $requete = getUsers();
      require('view/listUserView.php');
   }

   function testimonials() {
      $requete = getTestimonials();
      require('view/listTestimonialsView.php');
   }

