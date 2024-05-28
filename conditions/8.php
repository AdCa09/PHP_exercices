<?php
 //8."School sucks!(true)"
 if (isset($_GET['note'])) {
 $note = intval($_GET['note']);

 if($note <= 4 ){
    echo "This work is really bad. What a dumb kid!";
 }elseif ($note == 5 || $note <= 9){
    echo "This is not sufficient. More studying is required.";
 }elseif ($note == 10){
    echo "Barely enough!";
 }elseif ($note >=11 && $note <= 14){
    echo "Not bad!";
 }elseif ($note >= 15 && $note <=18){
    echo "Bravo, bravissimo!";
 }elseif ($note == 19 || $note == 20){
    echo "Too good to be true : confront the cheater!";
 }else{
    echo "Please enter a note : ";
 }
}

?>

<form action="8.php" method="get">
    <label for="note">
        <input type="text" name="note" placeholder="Enter a note">
    </label>
    <input type="submit" value="send">
</form>