<?php 

//2.Display different greeting message depending on the time of th day 
   date_default_timezone_set('Europe/Brussels');

   $heure_actuelle = date("H:i"); // Pour obtenir l'heure actuelle 

   $heure = new DateTime($heure_actuelle); //Convertis l'heure en objet DateTime 

   if ($heure >= new DateTime('05:00') && $heure <= new DateTime('09:00')) {
       echo "Good morning!";
   } elseif ($heure > new DateTime('09:00') && $heure <= new DateTime('12:00')) {
       echo "Good day!";
   } elseif ($heure > new DateTime('12:00') && $heure <= new DateTime('16:00')) {
       echo "Good afternoon!";
   } elseif ($heure > new DateTime('16:00') && $heure <= new DateTime('21:00')) {
       echo "Good evening!";
   } elseif ($heure > new DateTime('21:01') && $heure <= new DateTime('04:59')){
       echo "Good night!";
   }
       ?>