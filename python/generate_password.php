<?php

$length = 12; // you can adjust the length of the password as per your requirements

$command = escapeshellcmd("python generate_password.py " . $length);
$output = shell_exec($command);

echo $output;

?>
