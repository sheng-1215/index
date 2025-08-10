<?php
$students = [
    ["name" => "Ali", "score" => 82],
    ["name" => "Bee", "score" => 77],
    ["name" => "Chen", "score" => 95],
    ["name" => "Dan", "score" => 88]
];

usort($students, function($a, $b) {
    return $b['score'] <=> $a['score'];
});

$top3 = array_slice($students, 0, 3);

$file = fopen("top3.txt", "w");
foreach ($top3 as $s) {
    fwrite($file, "{$s['name']}: {$s['score']}\n");
}
fclose($file);
echo "Top 3 saved to top3.txt";
