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
if(isset($_POST['submit'])) {
    $logins = array("piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truushendriks@wegweg.nl" => "arkiearkie201");
    $foundID = false;
    foreach ($logins as $account => $geldigeID) {
        if(strcasecmp($account .= $geldigeID, $_POST['emailadres'] .= $_POST['wachtwoord'] ) == 0){
            $foundID = true;
            break;
            }
        }
    if ($foundID == true){
        echo "Welkom!";
    } else {
        echo "Sorry, geen toegang!";
    }
}

?>
</body>
</html>

