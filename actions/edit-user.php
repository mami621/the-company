<?php

include '../classes/User.php';

//create an object
$user = new User;

$user->update($_POST, $_FILES);
//$_FILES holds and array of items uploaded to the current HTTP POST method

?>