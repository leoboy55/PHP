<HTML lang="">
<head>
    <style>
        body {
            text-align: center;
        }
        .rood {
            border: red solid 5px;
            width: 200px;
            height: 200px;
        }
        .groen {
            border: green solid 5px;
            width: 200px;
            height: 200px;
        }
    </style>
    <title>PHP Opdrachten</title>
<body>
<?php

for ($x = 1; $x < 10; $x++) {
    if ($x == 1 || $x == 3 || $x == 5 || $x == 7) {
echo "<img class='groen' src='Sources/aap" . $x . ".jpg'>";
        if ($x == 5) {
            echo "<br>";
        }
    } else {
        echo "<img class='rood' src='Sources/aap" . $x . ".jpg'>";
    }
}
?>
</body>
</HTML>
