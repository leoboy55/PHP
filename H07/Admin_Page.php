<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['admin'] == true){
echo "welcome in the secret place";
}
else {
header('location: Opdracht 7.1.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECRET PAGE</title>
</head>
<style>
    img {
    }
</style>
<body>
<img src="Sources/secret.jpg" alt="Rick">
<a style="color: black; position: absolute; top: 300px; border: solid black 3px" href="Opdracht%207.1.php?loguit">LOG OUT</a>
</body>
</html>
