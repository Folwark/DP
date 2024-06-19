<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $productId = $_GET['id']; // Получаем id товара из запроса

    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biznes_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Запрос для добавления товара в корзину
    $sql = "INSERT INTO cart (user_id, product_id) VALUES ('$userId', '$productId')";

    if ($conn->query($sql) === TRUE) {
        echo "Товар успешно добавлен в корзину";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Пользователь не аутентифицирован";
}
?>
