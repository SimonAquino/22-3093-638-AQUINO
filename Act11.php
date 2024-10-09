<?php
$fibonacci = [];
$fibonacci[0] = 0;
$fibonacci[1] = 1; 

$i = 2;
while ($i < 10) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    $i++;
}

foreach ($fibonacci as $number) {
    echo "$number ";
}
?>
