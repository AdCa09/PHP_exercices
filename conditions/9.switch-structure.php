<?php
  
  //9. The 'Swith' structure
  if (isset($_GET['note'])) {
    $note = intval($_GET['note']);
 
    switch($note) {
          case  1 :
          case  2 :
          case  3 :
          case  4 :
            echo "This work is really bad. What a dumb kid! ";
            break;
          case 5 :
          case 6 :
          case 7 :
          case 8 :
          case 9 :
            echo "This is not sufficient. More studying is required.";
            break;
          case  10: 
            echo "barely enough!";
            break;
          case  11 :
          case  12 :
          case  13 :
          case  14 :
            echo "Not bad!";
            break;
          case 15 :
          case 16 :
          case 17 :
          case 18 :
            echo "Bravo, bravissimo!";
            break;
          case  19 :
          case  20 :
            echo "Too good to be true : confront the cheater!";
            break;
    }
  }

  
?>
<form action="9.switch-structure.php" method="get">
    <label for="note">
        <input type="text" name="note" placeholder="Enter a note">
    </label>
    <input type="submit" value="send">
</form>