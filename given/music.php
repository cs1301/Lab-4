<?php
header('Content-Type: application/mp3');
header("Content-disposition: attachment; filename=\"music.mp3\"");

echo file_get_contents("music.mp3");
?>