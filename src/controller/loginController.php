<?php
session_start();
$postData = $_POST;

$userArray = ['user1','user2','user3','user4','user5'];
$PassArray = ['pass1','pass2','pass3','pass4','pass5'];
$userLength = count($userArray);
$nom = $postData['nom'];
$password = $postData['password'];

// if(!isset($postData['email']) || !isset($postData['password'])){
//     header('location: /?action=login');
// }

for($i=0 ; $i<$userLength ; $i++){
    if($nom == $userArray[$i]&& $password == $PassArray[$i]){
        $_SESSION['name'] = $nom;
        $_SESSION['isLogIn'] = true;
        header('location:/');
    }
    echo "pas bon";
    echo "<a href='/?action=login";
}

