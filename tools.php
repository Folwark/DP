<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "byh_db";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Ошибка соединения: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Ваш код обновления статуса в базе данных
    $sql = "UPDATE application SET status = 0 WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Статус успешно обновлен";
    } else {
        echo "Ошибка при обновлении статуса: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
