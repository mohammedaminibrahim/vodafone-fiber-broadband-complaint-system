<?php


$password = "password";
echo password_hash($password, PASSWORD_BCRYPT);

echo "</br>";

$hased = "$2y$10$/J5vU1IbK89dv3UqV.xgzOvvaThBwoxZJIkDjROYS7X3SZV/2v4gu";
echo password_verify($password,$hased);


;?>