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

// Получение данных из формы
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$category_id = $_POST['category'];

// Подготовленный запрос для обновления товара в базе данных
$stmt = $conn->prepare("UPDATE list SET name=?, price=?, category_id=? WHERE id=?");
$stmt->bind_param("siii", $name, $price, $category_id, $id);

// Выполнение запроса
if ($stmt->execute()) {
  echo "Товар успешно обновлен в базе данных!";
} else {
  echo "Ошибка: " . $conn->error;
}

// Закрытие соединения
$stmt->close();
$conn->close();
?>
