<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $key => $value){
    if($pronouns[$key] == 'He/She'){
        $pronouns[$key] = ucfirst($value) . '' . ' codes';
    }else{
    $pronouns[$key] = ucfirst($value) . '' . ' code';
    }
    
}
 
var_dump($pronouns);

