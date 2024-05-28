<?php

//7.The girl Soccer team

//Achieve the same without else 


if (isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = intval($_GET['age']); // Convertit la chaîne en entier
    $gender = $_GET['gender'];
 
   if($age >= 21 && $age <= 40 && $gender == 'girl'){
    echo "Hey, " . $name . " welcome to the team !";
   }if ($age < 21 || $age >40 || $gender == 'boy'){
    echo 'Sorry you don\'t fit the criteria';
   }

   }
    




?>

<form action="7.php" method="get">
    <label for="name">Name:
        <input type="text" id="name_input" name="name" placeholder="Enter your name">
    </label>
    <br>
    <label for="age">Age:
        <input type="text" id="age_input" name="age" placeholder="Enter your age">
    </label>
    <br>
    <label for="girl_gender">
        <input type="radio" id="girl_gender" name="gender" value="girl">Girl
    </label>
    <label for="boy_gender">
        <input type="radio" id="boy_gender" name="gender" value="boy">Boy
    </label>
    <br>
    <input type="submit" name="submit" value="send">
</form>
