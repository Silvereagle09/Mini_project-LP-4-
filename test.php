<?php
$conn = new mysqli("localhost", "root", "@Purva3551", "afterlife_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>