<?php
echo "<h2>Partie 1: Table de multiplication</h2>";
$nombre = 7;
for ($i = 1; $i <= 10; $i++) {
    echo "$nombre x $i = " . ($nombre * $i) . "<br>";
}

echo "<h2>Partie 2: Pyramide</h2>";
// ila bghitiha m9ada mzyan f navigateur, 3melha f <pre>
echo "<pre>";
for ($ligne = 1; $ligne <= 6; $ligne++) {
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "* ";
    }
    echo "\n";
}
echo "</pre>";
?>