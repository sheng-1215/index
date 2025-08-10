<?php

$numbers = [10, 20, 30, 40, 50];

$min = min($numbers);
$max = max($numbers);

echo "Numbers: " . implode(" , ",$numbers) . "<br>";
echo "Minimum value: " . $min . "<br>";
echo "Maximum value: " . $max . "<br>";

?>