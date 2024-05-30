<?php

// Définition du tableau $me
$me = array(
    "Name" => "Adrien",
    "Age" => 21,
    "City" => "Quaregnon",
    "Height" => 1.81,
    "Favourite season" => "summer",
    "Did i like football?" => true,
    "Favourite_movies" => array("Ultras", "The exorcist"),
    "Hobbies" => array("Work out", "Coding", "driving a motorcycle")
);

// Définition du tableau $mother
$mother = array(
    "Name" => "Marie",
    "Age" => 42,
    "City" => "Colfontaine",
    "Favourite season" => "summer",
    "Did i like football?" => false,
    "Favourite_movies" => array("The Sound of Music", "Titanic"),
    "Hobbies" => array("Gardening", "Reading", "Cooking")
);

// Ajouter les informations de la mère au tableau $me
$me["Mother"] = $mother;

// Afficher le contenu du tableau $me
echo '<pre>';
print_r($me);
echo '</pre>';

// Afficher le nombre de hobbies
echo '<pre>';
echo 'Nombre de hobbies : ' . count($me['Hobbies']);
echo '</pre>';

// Ajouter un nouveau hobby
$me['Hobbies'][] = 'Taxidermie';

// Afficher les hobbies mis à jour
echo '<pre>';
print_r($me['Hobbies']);
echo '</pre>';

// Modifier le nom
$me['Name'] = 'Durant';

// Afficher le nom mis à jour
echo '<pre>';
print_r($me['Name']);
echo '</pre>';

// Définir le tableau soulmate
$soulmate = array(
    'Name' => 'Jane',
    'Age' => 21,
    'City' => 'Quaregnon',
    'Favourite season' => 'Summer',
    'Hobbies' => array("nails"),
    "Favourite_movies" => array("Ultras", "The exorcist")
);

// Afficher le tableau soulmate
echo '<pre>';
print_r($soulmate);
echo '</pre>';

// Comparer les valeurs simples dans $me et $soulmate
$simple_values_me = array_filter($me, 'is_scalar');
$simple_values_soulmate = array_filter($soulmate, 'is_scalar');

$intersection = array_intersect($simple_values_me, $simple_values_soulmate);


echo '<pre>';
echo 'Résultats de l\'intersection : ';
print_r($intersection);
echo '</pre>';


$fusion = array_merge_recursive($me, $soulmate);


echo '<pre>';
echo 'Fusion des tableaux : ';
print_r($fusion);
echo '</pre>';

?>