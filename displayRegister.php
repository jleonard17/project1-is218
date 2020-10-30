<?php
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

//validate first name
if(empty($firstName))
    echo 'error: first name not entered <br>';
else
    echo "first name:   $firstName <br>";

//validate last name
if(empty($lastName))
    echo 'error: last name not entered <br>';
else
    echo "password:   $lastName <br>";

//validate birthday
if(empty($birthday))
    echo 'error: birthday not entered <br>';
else
    echo "password:   $birthday <br>";

//validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    echo 'error email invalid <br>';
else
    echo "email: $email <br>";

//validate password
if(empty($password))
    echo 'error: password not entered <br>';
else if(strlen($password) < 8)
    echo "password must be at least 8 characters<br>";
else
    echo "password:   $password <br>";
