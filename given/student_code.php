<?php

header('Content-Type: application/html');
header("Content-disposition: attachment; filename=\"student_code.js\"");


$hidden_char = json_decode('"\u200c"');

$index = file_get_contents("student_code.js");
echo str_replace("UNIQUE_ID", str_repeat($hidden_char,rand(0, 1000)), $index);
?>