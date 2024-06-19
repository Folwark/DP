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
$name = $_POST['name'];
$price = $_POST['price'];
$category_id = $_POST['category'];
$description = $_POST['description'];
$manufacturer = $_POST['manufacturer'];
$country = $_POST['country'];
$color = $_POST['color'];
$imLink = $_POST['imageLink'];

// Подготовленный запрос для добавления товара в базу данных
$stmt = $conn->prepare("INSERT INTO list (name, price, description, color, country, manufacturer, image_link, category_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssi", $name, $price, $description, $color, $country, $manufacturer, $imLink, $category_id);


// Выполнение запроса
if ($stmt->execute()) {
  echo "Товар успешно добавлен в базу данных!";
} else {
  echo "Ошибка: " . $conn->error;
}

// Закрытие соединения
$stmt->close();
$conn->close();
?>
