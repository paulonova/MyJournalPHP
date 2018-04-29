<?php 
// header('Location: /journal.php');

require_once 'session_start.php';

echo "Edit Test: " . $_SESSION['user_id'];
echo "<br>";
echo "Title Test: " . $_SESSION['journal_title'];
echo "<br>";
echo "entryID Test: " . $_GET['edit'];






$statement = $pdo->prepare("UPDATE entries WHERE entryID= :entryID");
$statement->execute([
    "entryID" => $_GET['edit']
]);


// header('Location: /journal.php');


?>