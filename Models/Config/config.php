<?php

session_start();

$conn = new mysqli("localhost", "root", "", "restaurant-menu");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
<<<<<<< HEAD

if (!isset($_SESSION['id']) || isset($_GET['id'])) {
    header('location:../');
}

$id = $_SESSION['id'];

=======
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
?>