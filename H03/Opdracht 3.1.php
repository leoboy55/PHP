<?php
//forloop 10 apen
$counter = 0;
for ($i = 1; $i <= 10; $i++) {
    echo "<img src = 'Sources/aap" .$i . ".jpg' >";
    if ($i == 3 || $i == 6) {
        echo "<br>";
    }
}