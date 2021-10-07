<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
</head>
<style>
    label {
        display: block;
    }
    table, tr, td {
        border: solid 1px black;
        border-collapse: collapse;
    }
    td{
        padding: 5px;
    }
</style>
<body>
<form action="" method="POST" id="mrwheels">
    <label> Mr Wheelie auto's </label>
    <br>
    <br>
    <label for="merk"> Merk</label>
    <select id="merk" name="merk">
        <option value="alle">Alle merken</option>
        <option value="Audi">Audi</option>
        <option value="BMW">BMW</option>
        <option value="Ferrari">Ferrari</option>
        <option value="Tesla">Tesla</option>
    </select>
    <label for="minimale prijs"> minimale prijs </label>
    <input type="text" name="minprijs" id="minimale prijs">
    <br>
    <label for="maximale prijs"> maximale prijs </label>
    <input type="text" name="maxprijs" id="maximale prijs">
    <br>
    <input type="submit" name="submit" value="verstuur">
</form>
<table>

<?php

require_once ('Auto.php');
require_once ('AutoOverzicht.php');

$autoos = new AutoOverzicht();
$autoos->voegAutoToe("BMW" , "I8" , 60000, "<img src='Sources/bmw.jpg'>");
$merkAuto = [];
$minprijs = isset($_POST['minprijs']) && !empty($_POST['minprijs']) ? $_POST['minprijs'] : 0;
$maxprijs = isset($_POST['maxprijs']) && !empty($_POST['maxprijs']) ? $_POST['maxprijs'] : 9999999;
$merkAuto[] = isset($_POST['merk']) && !empty($_POST['merk']) ? $_POST['merk'] : "";
if($_POST['merk'] === "alle") $merkAuto = ['Audi' , 'BMW' , 'Ferrari' , 'Tesla'];
foreach ($autoos->getGefilterdeLijst($minprijs, $maxprijs, $merkAuto) as $auto){
        echo $auto->getPrijs() . "<br>";
        echo $auto->getMerk() . "<br>";
        echo $auto->getType() . "<br>";
        echo $auto->getUrl() . "<br>";
}

