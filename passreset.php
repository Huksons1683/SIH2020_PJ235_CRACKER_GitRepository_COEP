<?php
session_start();
$h=mysqli_connect('localhost', 'root', '', 'register_login');
$pass = $_POST['passd'];

$has = strval($_SESSION['hash']);
if(isset($_POST['reset'])) {

  $sql = "UPDATE `user_login` SET `password` = '$pass' WHERE `user_login`.`id` = $has";

if (mysqli_query($h, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: ".mysqli_error($h);
}
}
    ?>