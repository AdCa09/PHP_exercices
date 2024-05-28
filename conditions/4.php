<?php 

  //4.Display a different greeting according to the user's age and gender 

   
  if (isset($_GET['age'])) {
    $age = intval($_GET['age']); // Convertit la chaîne en entier
    if($age < 12 ){
        echo "Hello " .$_GET['gender']. " kiddo!";
    }
    elseif ($age >= 12 && $age < 18) {
        echo "Hello " .$_GET['gender']. " teenager!";
    } elseif ($age >= 18 && $age <= 115) {
        echo "Hello " .$_GET['gender']. " adult!";
    } elseif ($age > 115) {
        echo "Wow! ". $_GET['gender']." Still alive? Are you a robot, like me? Can I hug you?";
    }
} else {
    echo "Please enter your age.";
}
  ?>

 <form method='get' action="4.php">
    <label for="age">
        <input type="text" id="age" name="age" placeholder="Please enter your age">
    </label>
    <input type="submit" name="submit" value="Greet me now">
    
    <label for="gender">
        <input type="radio" id="man" name="gender" value="mister"> Man
        <input type="radio" id="female" name="gender" value="miss"> Female
    </label>
</form>
