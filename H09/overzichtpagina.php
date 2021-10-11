<?php

require_once ('Broodje.php');
require_once ('BroodjesOverzicht.php');
session_start();

if (isset($_POST['naamBrood']) && !empty($_POST['naamBrood']) &&
    isset($_POST['meelSoort']) && !empty($_POST['meelSoort']) &&
    isset($_POST['vormBrood']) && !empty($_POST['vormBrood']) &&
    isset($_POST['gewichtBrood']) && !empty($_POST['gewichtBrood'])) {
        $_SESSION['broodjes']->voegBroodjeToe($_POST['naamBrood'], $_POST['meelSoort'], $_POST['vormBrood'], $_POST['gewichtBrood']);
    header("location: index.php");
}

if (isset($_POST['delete'])){
    $_SESSION['broodjes']->verwijderRij($_POST["index"]);
    print ($_POST["index"]);
//print_r($_SESSION['broodjes']);
  header("location: index.php");
}



