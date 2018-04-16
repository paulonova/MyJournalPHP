<?php 
require_once 'database.php';
require_once 'session_start.php';

header('Location: /journal.php');

echo "Title: " . $_POST['journal_title'] . "<br/>";
echo "TextArea: " . $_POST['journal_area'] . "<br/>";
echo "Date: " . $_POST['journal_date'] . "<br/>";
echo "UserID: " . $_SESSION['user_id'];

$statement = $pdo->prepare("INSERT INTO entries (entryID, title, content, createdAt, userID) 
VALUES (NULL, :title, :content, :created, :userId);");

$statement->execute([
    ":title" =>     $_POST['journal_title'],
    ":content" =>   $_POST['journal_area'],
    ":created" =>   $_POST['journal_date'],
    ":userId" =>    $_SESSION['user_id']
]);








?>