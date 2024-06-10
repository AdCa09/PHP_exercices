<?php
// Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
function maj($prénom)
{
  $prénom = ucfirst($prénom);

  return $prénom;
}

$name = maj('adri');

echo $name;

echo "<br>";

// Use the native function allowing you to display the current year.
date_default_timezone_set('Europe/Brussels');


echo date('l jS \of F Y h:i:s A');


echo '<br>';
//Créez une fonction "Somme" qui prend 2 nombres et renvoie leur somme.


function sum($num1, $num2)
{

  if (is_int($num1) && is_int($num2)) {
    return $num1 + $num2;
  } else {
    echo "Error: argument is the not a number.";
  }
  ;
}

echo 'The sum is:' . sum(5, 5);

echo '<br>';


// Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
// Example: "In code we trust!" should return: ICWT).

function newFunction($string)
{
  $string = preg_replace('/[a-z]+/', '', ucwords($string));
  return $string;
}

echo newFunction('hello my name is adri');


echo '<br>';

// Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".

function replace($word)
{
  $string = str_replace(["ae"], 'æ', $word);
  return ($string);
}

echo replace('caecotrophie');

echo '<br>';

//Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca

function reverse($ae)
{
  $string2 = str_replace(["æ"], 'ae', $ae);
  return ($string2);
}

echo reverse(' cæcotrophie');


echo '<br>';

//Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :


function feedback($message, $cssClass)
{
  $messageTypes = [
    'info' => 'Notice',
    'error' => 'Error',
    'warning' => 'Warning'
  ];

  if (array_key_exists($cssClass, $messageTypes)) {
    return "<div class=\"$cssClass\">{$messageTypes[$cssClass]}: $message</div>";
  } else {
    return "<div class=\"info\">Notice: $message</div>";
  }
}

echo feedback("Incorrect email address", "error");


echo '<br>';

//Create a random string generator, outputing 2 strings: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").


function generateRandomString($length)
{
  $characters = 'abcdefghijklmnopqrstuvwxyz';
  $randomString = '';
  $charLength = strlen($characters);
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charLength - 1)];
  }
  return $randomString;
}


$word1 = generateRandomString(rand(1, 5));
$word2 = generateRandomString(rand(7, 15));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Générer un nouveau mot</title>
</head>

<body>
  <h1>Générer un nouveau mot</h1>
  <p>Premier mot (entre 1 et 5 lettres) : <?php echo $word1; ?></p>
  <p>Deuxième mot (entre 7 et 15 lettres) : <?php echo $word2; ?></p>
  <button onclick="window.location.reload();">Générer</button>
</body>

</html>


<?php

echo '<br>';

// De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"

$decapitalize = strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

echo $decapitalize;

echo '<br>';

//In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :

function calculate_cone_volume($ray, $height){
  $base_area = M_PI * pow($ray, 2);

  $volume = $base_area * $height * (1 / 3);
  
  return $volume;
}

$ray = 2;
$height = 10;
$volume = calculate_cone_volume($ray, $height);
echo 'The volume of a cone with a radius of ' . $ray . ' and a height of ' . $height . ' is ' . $volume . ' cubic units.';
