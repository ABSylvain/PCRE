<?php 
include_once 'framworkTest/Bob.php';
$Bob = new Bob();

$ajax = htmlspecialchars($_POST['seizure']);

echo $ajax;
?>