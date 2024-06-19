<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biznes_db";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получение ID товара для удаления
$id = $_POST['id'];

// SQL-запрос для удаления товара
$sql = "DELETE FROM list WHERE id=$id";

// Выполнение запроса
if ($conn->query($sql) === TRUE) {
  echo "Товар успешно удален из базы данных!";
} else {
  echo "Ошибка: " . $conn->error;
}

// Закрытие соединения
$conn->close();
?>
