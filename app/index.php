<?php

echo "Welcome to Fiery 0ctopus Server 1.0\n";

//phpinfo();

$link = mysqli_connect('mysql', 'octoRoot', 'password');
if (!$link) {
    die('Connection error: ' . mysqli_error());
}
echo 'Connection success';
mysqli_close($link);