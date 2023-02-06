<?php

   require_once('model/UserManager.php');
   require_once('model/TestimonialManager.php');


   function home() {
      $userManager = new UserManager();
      $requete = $userManager->getUsers();
      require('view/listUserView.php');
   }

   function testimonials() {
      $testimonialManager = new TestimonialsManager();
      $requete = $testimonialManager->getTestimonials();
      require('view/listTestimonialsView.php');
   }

