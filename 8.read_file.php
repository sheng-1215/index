<?php
$filename = "students.csv";

if (($handle = fopen($filename, "r")) !== false) {
    $header = fgetcsv($handle);  // skip header
    while (($data = fgetcsv($handle)) !== false) {
        $name = $data[0];
        $scores = array_slice($data, 1);
        $avg = array_sum($scores) / count($scores);
        echo "$name: " . number_format($avg, 2) . "\n" . "<br>";
    }
    fclose($handle);
}
