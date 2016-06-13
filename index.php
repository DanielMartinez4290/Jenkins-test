<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require dirname(__FILE__).'/src/ValidatePassword.php';
require dirname(__FILE__).'/src/ValidateEmail.php';

$valPass = new ValidatePassword();
$validPass = $valPass->validLength('1234ssssss');

$valEmail = new ValidateEmail();
$validEmail = $valEmail->validEmail('dmartinez4290@gmail.com');

var_dump($validEmail);
?>