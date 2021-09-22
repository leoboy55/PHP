<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gebruiker</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background-color: azure;
    }
    nav{
        border: black solid 1px;
        background-color: black;
        color: white;
        position: relative;
        margin: 0;
        height: 100%;
        width: 100%;
    }
    a {
        text-decoration: none;
        color: azure;
    }
    img {
        float: right;
        display: inline-block;
        position: absolute;
        top: -70px;
        right: 1300px;

    }
    li{
        list-style-type: none;
        display: inline-block;
        padding-right: 20px;
        padding-top: 10px;
        margin-left: 30px;
        position: relative;
        left: 50%;
    }
    #nav {
        font-size: 30px;
    }
    a:hover {
        color: deepskyblue;
        cursor: pointer;
    }
    ul{
        margin: 0;
        padding: 0;
        height: 60px;
        display: inline-block;
    }
    main {
        position: absolute;
        margin: 0 0 0 0;
        right: 900px;
    }
    #mainAfbeelding{
        position: absolute;
        margin: 0 0 0 0;
        right: -1600px;
        top: 110px;
    }
    #form{
        display: block;
        position: absolute;
        right: 850px;
        top: 120px;
    }
    #form label{
        display: block;
    }
    #form input{
        right: 20px;
        cursor: pointer;
    }
</style>
<body>
<wrapper class ="navigation-bar">
    <div class id="navigation container">
    <nav>
        <img src="Sources/logo%20php.png" alt="">
        <ul>
            <li id="nav"> <a href="Opdracht%207.1.php">HOME</a></li>
            <li id="nav"> <a href="">REGISTER</a></li>
            <li id="nav"> <a href="Admin_Page.php">ACCOUNT</a></li>
            <li id="nav"> <a href="Opdracht%207.1.php">LOGIN</a></li>
        </ul>
    </nav>
</wrapper>
<main>
    <h1>LOG IN</h1>
    <div id="mainAfbeelding">
    <img src="Sources/unicorn.jpg" style="width: 200px; height: 200px" alt="">
        </div>
    <div>
        <a style="color: black; position: absolute; top: 300px; border: solid black 3px" href="Opdracht%207.1.php?loguit">LOG OUT</a>
    </div>
</main>
<div id="form">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
    </div>
</body>
</html>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "id17533160_opdrachtphp";
try {
    $conn = new PDO("mysql:host=$servername;$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    echo "" . $e->getMessage();
}

if (isset($_GET['loguit'])){
    $_SESSION = array();
    session_destroy();
}

if (isset($_POST['submit'])) {
    $query = "SELECT * FROM opdrachtphp.inloggegevens";
    $stmt = $conn->prepare($query) or die("error1");
    $stmt->execute() or die ("error 2");
    $foundId = false;
    while ($result = $stmt->fetch()) {
        if ($result['emailadres'] == $_POST['emailadres'] and ($result['wachtwoord'] == $_POST['wachtwoord'])) {
            $foundId = true;
            $_SESSION['rights'] = $result['rechten'];
            $_SESSION['user'] = $_POST["emailadres"];
            break;
        }
    }
    if ($foundId == true) {
        echo "Welkom," . "<br>" . $_SESSION['user'] . "<br>";
        echo "je rol is: " . $_SESSION['rights'];
        RoleRights();
    } else {
        echo "Sorry, geen toegang";
    }
}

function RoleRights(): bool
{
    if (in_array("admin", $_SESSION)){
        $approve = true;
    }
    else {
        $approve = false;
    }
    $_SESSION['admin'] = $approve;
    return $approve;
}

?>


