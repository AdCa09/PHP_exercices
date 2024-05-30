<?php


$web_development = array(
    "frontend" => array(),
    "backend" => array()
);


array_push($web_development['frontend'], 'xhtml');
array_push($web_development['backend'], 'Ruby on Rails');
array_push($web_development['frontend'], 'CSS');
array_push($web_development['frontend'], 'Flash');
array_push($web_development['frontend'], 'JavaScript');


$key = array_search('xhtml', $web_development['frontend']);
if ($key !== false) {
    $web_development['frontend'][$key] = 'html';
}


$key = array_search('Flash', $web_development['frontend']);
if ($key !== false) {
    unset($web_development['frontend'][$key]);
}


echo '<pre>';
print_r($web_development);
echo '</pre>';

?>