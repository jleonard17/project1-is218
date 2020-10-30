<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    echo 'error email invalid <br>';
else
    echo "$email <br>";


if(empty($password))
    echo 'error: password not entered <br>';
else if(strlen($password) < 8)
    echo "password must be longer than 8 characters<br>";
else
    echo "password: " .  $password;


