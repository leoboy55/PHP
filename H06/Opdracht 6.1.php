<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=phpschool", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label> LOG IN </label>
    <br>
    <br>
    emailadres <label>
        <input type="text" name="emailadres" value="">
    </label>
    <br>
    Wachtwoord <label>
        <input type="password" name="wachtwoord" value="">
    </label>
    <br>
    <input type="submit" name="submit" value="verstuur">
    <input type="reset" name="reset" value="reset">
</form>
<table>

<?php
if(isset($_POST['submit'])) {
    $logins = array("piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truushendriks@wegweg.nl" => "arkiearkie201");
    $foundID = false;
    foreach ($logins as $account => $geldigeID) {
        if (strcasecmp($account .= $geldigeID, $_POST['emailadres'] .= $_POST['wachtwoord']) == 0) {
            $foundID = true;
            break;
        }
        if ($foundID == true) {
            echo "Welkom!";
        } else {
            echo "Sorry, geen toegang!";
            break;
        }
    }
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query);
$stmt->execute() or die ("Error lijn 60.");

while ($row = $stmt->fetch()){
    echo "<tr>";
    echo "<td>" . $row['cursistnr'];
    echo "<td>" . $row['naam'];
    echo "<td>" . $row['roepnaam'];
    echo "<td>" . $row['straat'];
    echo "<td>" . $row['postcode'];
    echo "<td>" . $row['plaats'];
    echo "<td>" . $row['geslacht'];
    echo "<td>" . $row['geb_datum'];
    echo "<tr/>";
}
?>
</table>
</body>
</html>

