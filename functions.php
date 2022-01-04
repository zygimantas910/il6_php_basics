<?php
$userEmail = 'betkoksemail.lt';
if(isEmailValid($userEmail)){
    echo clearEmail($userEmail);
}else{
    echo 'Emailas nevalidus';
}
function isEmailValid($email){
    if (strpos($email, '@')) {
        return true;
    }
    return false;
}
function clearEmail($email){
    $emailLowercases = strtolower($email);
    return trim($emailLowercases);
}