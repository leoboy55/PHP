<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bakkerij Wim Vlecht</title>
</head>
<style>
    body{
        padding: 0;
        margin: 0;
    }
    tr Color {
        background-color: goldenrod;
    }
    li{
        list-style-type: none;
        font-size: 40px;
        font-weight: bold;
        float: left;
        padding-left: 250px;
    }
    a{
        text-decoration: none;
        color: inherit;
    }
    #nav{
        position: fixed;
        padding: 10px;
        color: white;
        background-color: goldenrod;
        width: 100%;
        border: solid 3px black;
    }
    #completeOverzicht{
        padding: 150px;
    }
    #broodjesOverzicht{
        border: black 3px solid;
        border-collapse: collapse;
        width: 50%;
    }
    td{
        border: black 1px solid;
        width: 12.5%;
        padding: 5px;
    }
    label{
        margin-left: 40px;
    }
    label h1{
        margin-left: 40px;
    }
     input{
         display: block;
         margin-left: 40px;
         position: relative;
    }
     footer{
         width: 100%;
         height: 50px;
         background-color: goldenrod;
     }
</style>
<body>
<?php
        require_once ('Broodje.php');
        require_once ('BroodjesOverzicht.php');
         session_start();
        if(!isset($_SESSION['broodjes'])){
            $broodjesOverzicht = new BroodjesOverzicht();
            $_SESSION['broodjes'] = $broodjesOverzicht;
        }
?>
<wrapper>
    <div id="1">
<nav id="nav">
    <ul>
        <li> <a href="index.php"> Home </a> </li>
        <li> <a href=""> Contact </a> </li>
        <li> <a href=""> Social </a> </li>
    </ul>
</nav>
    </div>

    <div id="2">
    <section id="completeOverzicht">
        <table id="broodjesOverzicht">
            <tr>
                <td style="background-color: goldenrod">Naam brood </td>
                <td style="background-color: goldenrod">Meel soort</td>
                <td style="background-color: goldenrod">Vorm brood</td>
                <td style="background-color: goldenrod">Gewicht in gram</td>
                <td style="background-color: red">Verwijder </td>
            </tr>
            <?php
            JSC($_SESSION['broodjes']);
            function JSC($input){
                echo "<pre>";
                print_r($input);
                echo "</pre>";
            }

            foreach($_SESSION['broodjes']->getBroodjeslijst() as $k => $broodje) { ?>
            <tr>
                <td><?php echo $broodje->getNaamBrood(); ?></td>
                <td><?php echo $broodje->getMeelSoort(); ?></td>
                <td><?php echo $broodje->getVormBrood(); ?></td>
                <td><?php echo $broodje->getGewichtsBrood(); ?></td>
                <td> <form action="overzichtpagina.php" method="post" name="delete" id="delete">
                        <input type="hidden" name="index" value="<?php echo $k ?>">
                        <input type="submit" name="delete" value="X" id="delete">
                    </form>
                <?php echo $k; ?> </td>
            </tr>
            <?php } ?>
        </table>
    </section>
    </div>
    <div id="3">
    <section id="voegBroodToe">
        <form action="overzichtpagina.php" method="post" id="broodToevoegen">
            <label> Voeg een nieuw brood toe! </label>
            <label> * verplichte velden</label>
            <br>
            <br>
            <br>
            <label for="naamBrood">*Naam brood</label>
            <input id="naamBrood" name="naamBrood">
            <br>
            <label for="meelSoort">*Meel soort</label>
            <input id="meelSoort" name="meelSoort">
            <br>
            <label for="vormBrood">*Vorm brood</label>
            <input id="vormBrood" name="vormBrood">
            <br>
            <label for="gewichtBrood">*Gewicht brood</label>
            <input id="gewichtBrood" name="gewichtBrood">
            <br>
            <input type="submit" name="submit" value="voeg toe">
        </form>
            </div>
    <div>
        <br>
        <footer>
        </footer>
    </div>
</wrapper>
</body>
</html>

