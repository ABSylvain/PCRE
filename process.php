<?php 
include_once 'framworkTest.php';

$Bob = new Bob();

$seizure = htmlspecialchars($_POST['seizure']);

$Bob->whatThat($seizure);
?>