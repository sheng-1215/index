<?php

$str = "Hello World";

$vowels = ["a", "e", "i", "o", "u"];

$count = 0;

foreach ($vowels as $vowel) {
    $count += substr_count($str, $vowel);
}

echo "String: " . $str . "<br>";
echo "Vowels: " . implode(" , ",$vowels) . "<br>";
echo "Count: " . $count . "<br>";

?>
