<?php
require_once 'session_start.php';
require_once 'database.php';


$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$statement->execute([
  "username" => $_POST["username"]
]);

$user = $statement->fetch();
echo "<h1>Inlogad..</h1>";

if(password_verify($_POST["password"], $user["password"])){
    header('Location: /index.php');

    $_SESSION["loggedIn"] = true;
    $_SESSION["username"] = $user["username"];

}else{
    header('Location: /index.php?message=login failed');
}

?>