<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 5</title>
    <style>
        label{
            padding-left: 5px;
            display: block;
        }
        #resetKnop {
            display: inline-block;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<form action="Opdracht%205.1.php" method="get">
    * zijn verplichte velden<label></label> <br> <br>
    *Voornaam <label>
        <input type="text" name="voornaam" required value="">
    </label> <br>
    Tussenvoegsel <label>
        <input type="text" name="tussenvoegsel" value="">
    </label> <br>
    *Achternaam <label>
        <input type="text" name="achternaam" required value="">
    </label> <br>
    <br>
    *Straatnaam <label>
        <input type="text" name="straatnaam" required value="">
    </label> <br>
    *Huisnummer <label>
        <input type="text" name="huisnummer" required value="">
    </label> <br>
    Toevoeging <label>
        <input type="text" name="toevoeging" value="">
    </label> <br>
    <br>
    *Email <label>
        <input type="text" name="email" required value="">
    </label> <br>
    *Wachtwoord <label>
        <input type="password" name="wachtwoord"  required value="">
    </label> <br>
    <input type="submit" name="knop" value="verstuur">
    <input type="reset" id="resetKnop" name="reset" value="reset">
</form>
</body>
</html>
<?php
function checkIfForumIsFilled(){
    if(!isset($_GET['knop'])) {
echo "";
    } else {

        echo "<br>" . "<br>" . "<br>";
        echo $_GET["voornaam"] . "<br>";
        echo $_GET["tussenvoegsel"] . "<br>";
        echo $_GET["achternaam"] . "<br>";
        echo $_GET["straatnaam"] . "<br>";
        echo $_GET["huisnummer"] . "<br>";
        echo $_GET["toevoeging"] . "<br>";
        echo $_GET["email"] . "<br>";
        echo $_GET["wachtwoord"];
    }
}
 checkIfForumIsFilled();
?>

