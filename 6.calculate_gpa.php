<?php
$courses = [
    "Math" => 88,
    "Science" => 92,
    "English" => 84
];

$total = array_sum($courses);
$average = $total / count($courses);

foreach ($courses as $subject => $score) {
    echo "$subject: $score\n";
}
echo "<br>";
echo "Total: " . $total . "<br>";
echo "Average GPA: " . number_format($average, 2) . "<br>";