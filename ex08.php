<?php
echo "<h2>Partie 1: Nombres pairs</h2>";
$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) { 
        if ($i == 10) {
            echo "<strong>$i</strong>  <br>"; 
        } else {
            echo "$i <br>";
        }
    }
    $i++;
}
