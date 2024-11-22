<?php
$postData = $_POST;

if(
    trim(strip_tags($postData['animal'])) !== '' && 
    (trim(strip_tags($postData['couleur']))) !== ''){
        setcookie('couleur_pref',$postData['couleur'],time()+1200,'/');
        setcookie('animal_pref',$postData['animal'],time()+1200,'/');
    }
var_dump($_COOKIE);
header('location: /?theme=superglobales');