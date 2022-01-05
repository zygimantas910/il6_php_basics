<?php
// $userEmail = 'betkoksemail.lt';
// if(isEmailValid($userEmail)){
//     echo clearEmail($userEmail);
// }else{
//     echo 'Emailas nevalidus';
// }
// function isEmailValid($email){
//     if (strpos($email, '@')) {
//         return true;
//     }
//     return false;
// }
// function clearEmail($email){
//     $emailLowercases = strtolower($email);
//     return trim($emailLowercases);
// }

$name = 'Zygimantas';
$surname = 'Kalniunas';
$number = rand(0 , 100);

echo getNickName($name, $surname, $number);

function getNickName($name, $surname, $number){
    return strtolower(substr($name, 0, 3) . substr($surname, 0,3) . substr($number, 0,3));
}

$title = 'Jusu kazkokia tai antraste';
$slug = getSlug($title);

function getSlug($title) {
    return strtolower(str_replace(" ", "-", $title));
}

echo $slug;