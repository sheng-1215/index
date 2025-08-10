<?php
function isValidStudentID($id) {
    return preg_match("/^A\d{7}$/", $id);
}

echo "Student ID: " . "A1234567" . "<br>";
echo isValidStudentID("A1234567") ? "Valid" : "Invalid";