<?php
$password = substr(md5(rand()), 0, 8);
echo "Your random password is: " . $password;
?>
