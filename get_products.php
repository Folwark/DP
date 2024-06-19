<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Запрос к базе данных
$sql = "SELECT название, цена, оценка FROM ТаблицаТоваров";
$result = $conn->query($sql);

// Вставка информации о товарах на страницу
if ($result->num_rows > 0) {
  // вывод данных каждой строки
  while($row = $result->fetch_assoc()) {
   
  }
} else {
  ъ
}
$conn->close();
?>