<?php
   require_once('Manager.php');

   class TestimonialsManager extends Manager  {
      
      public function getTestimonials() {
         $bdd = $this->connection();
         $requete = $bdd->query('SELECT * FROM testimonials');
         return $requete;
      }

   }
