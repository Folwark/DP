<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biznes_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productId = $_GET['id'];

$sql = "DELETE FROM list WHERE id='$productId'";

if ($conn->query($sql) === TRUE) {
    echo "Товар успешно удален";
} else {
    echo "Ошибка при удалении товара: " . $conn->error;
}

$conn->close();
?>
