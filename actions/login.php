<?php
include '../classes/User.php';

//create an object
$user = new User;

$user->login($_POST);


?>