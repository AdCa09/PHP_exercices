<?php 
 /**
  * Exercies php condition from github Becode 4-php-drill.md
  */ 

  // 1. Clean your room

  $room_is_filthy = true; 

  function cleanup_room(){
    global $room_is_filthy;// ont accéde à la variable globale qui est en dehors de la fonction
    $room_is_filthy = false;
  }
   
   if( $room_is_filthy){
    echo 'Yuk, Room is dirty : let\'s clean it up!';
    cleanup_room();
    echo '<br> Room is now clean!';
   }else{
    echo '<br> Nothing to do , room is neat.';
   }
   
    
  ?>