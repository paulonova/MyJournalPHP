<?php 

// header('Location: /journal.php');
require_once 'session_start.php';
require_once "../classes/entry.php";
require_once 'database.php';

// echo "Delete Test: " . $_SESSION['user_id'];
// echo "<br>";
// echo "Title Test: " . $_SESSION['journal_title'];
// echo "<br>";
// echo "entryID Test: " . $_GET['del'];


$statement = $pdo->prepare("DELETE FROM entries WHERE entryID= :entryID");
$statement->execute([
    "entryID" => $_GET['del']
]);

$_SESSION['msg'] = "Entry updated..";
// function deleteJournalEntryTitle(){}

header('Location: /journal.php');

?>