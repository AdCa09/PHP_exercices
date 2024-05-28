<?php 

  //3.Display a different greetign according to the user's age.
   
  if (isset($_GET['age'])) {
    $age = intval($_GET['age']); // Convertit la chaîne en entier
    if($age < 12){
        echo "Hello kiddo!";
    }
    elseif ($age >= 12 && $age < 18) {
        echo "Hello teenager!";
    } elseif ($age >= 18 && $age <= 115) {
        echo "Hello adult!";
    } elseif ($age > 115) {
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
} else {
    echo "Please enter your age.";
}
  ?>

  <form method='get' action="3.php">
    <label for="age">
        <input type="text" id="age" name="age" placeholder="Please enter your age">
    </label>
       <input type="submit" name="submit" value="Greet me now">
  </form>