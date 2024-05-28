<?php

   //5.Display a different greeting according to the user's age, gender and mothertongue.

   
  if (isset($_GET['age'])) {
    $age = intval($_GET['age']); // Convertit la chaîne en entier
    $gender = $_GET['gender'];
    $language = $_GET['language'];

    if($age < 12 ){
        echo $language . ' ' .  $gender.'!';
    }
    elseif ($age >= 12 && $age < 18) {
        echo $language . ' ' .  $gender.'!';
    } elseif ($age >= 18 && $age <= 115) {
        echo $language . ' ' .  $gender.'!';
    } elseif ($age > 115) {
        echo "Wow! ". $gender." Still alive? Are you a robot, like me? Can I hug you?";
    }
} else {
    echo "Please enter your age.";
}
  ?>

 <form method='get' action="5.php">
    <label for="age">
        <input type="text" id="age" name="age" placeholder="Please enter your age">
    </label>
    <br>
    <label for="gender">
        <input type="radio" id="man" name="gender" value="boy"> Man
        <input type="radio" id="female" name="gender" value="girl"> Female
    </label>
    <br>
    <label for="language">Do you speak english ?
        <input type="radio" id="yes" name="language" value="Hello">yes
        <input type="radio" id="no" name="language" value="Aloha">no
    </label>
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>
