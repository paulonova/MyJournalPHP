<?php 
// header('Location: /journal.php');
require_once 'session_start.php';
require_once "classes/entry.php";
require_once 'partials/database.php';

header('Location: /journal.php');

echo "Delete Test: " . $_SESSION['user_id'];



?>