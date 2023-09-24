<?php
session_start();

//setting up session
$_SESSION['name'] = 'ManishBasnet';

$name = $_SESSION['name'];
echo "name: $name<br>";

// unsetting or removing session
unset($_SESSION['name']);

session_destroy();

if (isset($_SESSION['name'])) {
    echo "name still exists in the session.";
} else {
    echo "Session and session variables have been removed.";
}
?>