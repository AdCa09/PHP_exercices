<?php

//Write a script that prints the numbers from 1 to 120 using  while 
echo '<h1>while loop</h1>';


$counter = 0;

while ($counter <= 120) {
    echo '<br>' . $counter;
    $counter++;
}
echo '<h1>for loop</h1>';
// Write a script that prints the numbers from 1 to 120 using  for 

for ($newCounter = 0; $newCounter <= 120; $newCounter++) {
    echo '<br>' . $newCounter;
}

echo '<h1>Create array</h1>';

// Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.

$startupName = [
    "Tom",
    "Manu",
    "Giovanni",
    "Iliess",
    "Justine",
    "Nath",
    "Maryam",
    "Lyne",
    "Zahra",
    "Dzhey",
    "Isabelle",
    "Natallia",
    "Jordan",
    "Caroline",
    "Arnaud",
    "Julie",
    "Youris",
    "Stacy",
    "Dylan",
    "Angel",
    "Adrien C.",
    "Ludovic",
    "Adrien B.",
    "Dorian",
];

foreach ($startupName as $name) {
    echo $name . "\n";
}

echo '<h1>Array country </h1>';
//Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form (see mockup below). Of course, a loop will be useful...


$countries = [
    "United States",
    "United Kingdom",
    "Canada",
    "Australia",
    "Germany",
    "France",
    "Italy",
    "Japan",
    "Brazil",
    "India"
];

echo '<select>';
foreach ($countries as $country) {
    echo '<option>' . $country . '</option>';
}
echo '</select>';


$pays = [
    "United States" => "US",
    "United Kingdom" => "UK",
    "Canada" => "CA",
    "Australia" => "AU",
    "Germany" => "DE",
    "France" => "FR",
    "Italy" => "IT",
    "Japan" => "JP",
    "Brazil" => "BR",
    "India" => "IN"
];

echo '<select>';
foreach ($pays as $country => $code) {
    echo '<option value="' . $code . '">' . $country . '</option>';
}
echo '</select>';

