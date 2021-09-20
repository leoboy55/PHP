<?php

$servername = "localhost";
$username = "root";
$password = "";

//jJibbh(#x=l|0/mn
try {
    $conn = new PDO("mysql:host=$servername;id17533160_opdrachtphp", $username, $password);
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

<?php
    if (isset($_POST['submit'])) {
        $query = "SELECT * FROM opdrachtphp.inloggegevens;";
        $stmt = $conn->prepare($query) or die("error1");
        $stmt->execute() or die ("error 2");
        $foundId = false;
        while ($result = $stmt->fetch()) {
            if ($result['emailadres'] == $_POST['emailadres'] and ($result['wachtwoord'] == $_POST['wachtwoord'])) {
                $foundId = true;
            }
        }
            if ($foundId == true) {
                echo "Welkom!";
            } else {
                echo "Sorry, geen toegang";
            }
        }

?>
</body>
</html>