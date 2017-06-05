<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo "Your username is <strong>{$username}</strong> and your password is <strong>{$password}</strong>";

header("Refresh: 5; url=index.php");