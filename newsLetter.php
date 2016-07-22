<?php
$newsLetter = fopen("newsLetter.txt", "a") or die("Unable to open file!");
$email = $_POST["email"] . "\n"; 
fwrite($newsLetter, $email);
fclose($newsLetter);
?>