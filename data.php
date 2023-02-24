<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$question = $_POST['question'];
$type = $_POST['question_type'];
$category = $_POST['category'];
$rec = $_POST['recurring'];

$sql = "INSERT INTO data (question_text, input_type, category, recurring)
VALUES ('$question', '$type', '$category', '$rec')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

function redirect($url) {
    header('Location: '.$url);
    die();
}

redirect('index.php');

?>
