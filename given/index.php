<?php
header('Content-Type: application/html');
header("Content-disposition: attachment; filename=\"index.html\"");

$index = file_get_contents("index.html");
echo str_replace("UNIQUE_ID", "REQID".uniqid(), $index);
?>