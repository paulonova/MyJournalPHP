<?php
session_start();

// Initialize variables
$name = "";
$address = "";
$id = 0;
$edit_state = false;

/**CONNECTING TO DB *******************/
$db = mysqli_connect('localhost', 'root', 'root', 'crud');

//If save button is clicked
if(isset($_POST['save'])){
  $name = $_POST['name'];
  $address = $_POST['address'];

  $query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
  mysqli_query($db, $query);
  $_SESSION['msg'] = "Address Saved..";
  header('location: index.php'); // redirect to index after inserting.
}

/**DELETING RECORDS ********************/
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address Deleted!"; 
	header('location: index.php');
}

/**UPDATING RECORDS ********************/
if(isset($_POST['update'])){  
  $id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];


  mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
  $_SESSION['msg'] = "Address Updated!";
  header('location: index.php'); // redirect to index after inserting.
}

/**RETRIEVE RECORDS ********************/
$results = mysqli_query($db, "SELECT * FROM info");


?>
