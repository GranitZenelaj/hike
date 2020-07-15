<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UFT-8">
<title>CONTACT US</title>
 <link rel="stylesheet" href="css/contact.css">
 <script src="js/scripts.js"></script>
</head>
<body>
<div class="form">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form id="myform"   method="POST">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name" name="name">
    </div>

    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message" name="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit" name"submit-btn" value="SUBMIT">
    </div>
  </form>
</div>

</body>

</html>




<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "hikedb";

try {

$dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;

$pdo = new PDO($dsn, $dbUser ,$dbPassword);


} catch (PDOException $e) {
  echo "DB connection failed: " . $e->getMessage();
}


//
if($_SERVER['REQUEST_METHOD'] == 'POST') {


      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];


if(empty($name) || empty($email) || empty($message)) {
  echo '<script language="javascript">';
  echo 'alert("Error: all fields are required! ")';
  echo '</script>';
} else {
  if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
    echo '<script language="javascript">';
    echo 'alert("please enter valid name")';
    echo '</script>';
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<script language="javascript">';
    echo 'alert("please enter valid email")';
    echo '</script>';
  } else {

    $sql = "INSERT INTO inbox (name, email, message) VALUES (:name, :email, :message)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(['name' => $name,'email' => $email , 'message' => $message]);


    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';
      $name = "";
      $email = "";
      $message = "";

    }
}
}
?>
