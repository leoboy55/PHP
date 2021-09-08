<?php
?>
<!DOCTYPE HTML>
<HTML lang="">
<head>
    <title>PHP Opdrachten</title>
<body style="text-align: center">
<?php
//teken een kerstboom
echo "<br>";
for ($a = 0; $a < 9; $a++) {
    for ($b = 0; $b < $a; $b++) {
        echo "*";
    }
    echo  "*<br>";
}

?>
</body>
</HTML>