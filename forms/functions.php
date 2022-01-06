<?php
// print_r($_POST["user_email"]);
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['password'];

function clearEmail($email)
    {
    $emailLowercases = strtolower($email);
    return trim($emailLowercases);
    }
function isEmailValid($email)
    {
    if (strpos($email, '@')) {
        return true;
    }
    return false;
}
function register($name, $surname, $email, $password, $confirmpassword){
    if (isEmailValid(clearEmail($email))) {
        if ($password == $confirmpassword){
            echo "Registration Complete";
            echo "<br>" . "Name" . " : " . $name;
            echo "<br>" . "Lastname" . " : " . $surname;
            echo "<br>" . "Email" . " : " .$email;
            echo "<br>" . "Password" . " : " . "*********";
        } else {
            echo 'Passwords do not match';
        }
   } else {
        echo 'Invalid email';
   }
}
register($name, $surname, $email, $password, $confirmpassword);