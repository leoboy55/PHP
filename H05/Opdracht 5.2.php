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
            display: inline-block;
        }
        #resetKnop {
            display: inline-block;
        }
    </style>
</head>
<body>
<form action="Response%20Opdracht%205.2.php" method="post">
 <label>Welke dieren vindt jij cool?</label> <br>
    <br>
    <label>
        <input type="checkbox" name="dieren[]" value="hond">
    </label>
    <label> Hond </label> <br>
    <label>
        <input type="checkbox" name="dieren[]" value="kat">
    </label>
    <label> Kat </label> <br>
    <label>
        <input type="checkbox" name="dieren[]" value="alligator">
    </label>
    <label> Alligator </label> <br>
    <label>
        <input type="checkbox" name="dieren[]" value="leeuw">
    </label>
    <label> Leeuw </label> <br>
    <label>
        <input type="checkbox" name="dieren[]" value="schaap">
    </label>
    <label> Schaap </label> <br>
    <label>
        <input type="checkbox" name="dieren[]" value="zeepaard">
    </label>
    <label>  Zeepaard </label> <br>
    <br>
    <input type="submit" name="knop2" value="verstuur">
    <input type="reset" id="resetKnop" name="reset" value="reset">
</form>
</body>
</html>


