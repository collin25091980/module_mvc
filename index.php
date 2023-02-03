<?php
   // Routeur
   require('controller/controller.php');

   if(isset($_GET['page'])) {
      if($_GET['page'] == 'acceuil') {
         home();
      }
      else if($_GET['page'] == 'avis') {
         testimonials();
      }
   }
   else {
      home();
   }