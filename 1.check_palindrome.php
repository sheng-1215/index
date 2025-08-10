<?php
function isPalindrome($str) {
    $clean = strtolower(preg_replace("/[^a-z0-9]/i", "", $str));
    return $clean === strrev($clean);
}

$testCases = [
    "Madam",
    "Racecar",
    "Hello",
    "A man, a plan, a canal: Panama",
    "12321",
    "Not a Palindrome",
    "Was it a car or a cat I saw?",
    "No lemon, no melon",
    "",
    "   "
];

foreach ($testCases as $case) {
    $result = isPalindrome($case) ? "✅ Palindrome" : "❌ Not Palindrome";
    echo "\"$case\" → $result\n" . "<br>";
}