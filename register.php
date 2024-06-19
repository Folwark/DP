<!-- register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname']; // Новое поле firstname
  $lastname = $_POST['lastname']; // Новое поле lastname

  // Подключение к базе данных
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "biznes_db";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Проверка соединения
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Генерация защищенного хэша пароля
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Подготовленный запрос для вставки данных в базу
  $stmt = $conn->prepare("INSERT INTO users (email, login, password, firstname, lastname, role) VALUES (?, ?, ?, ?, ?, '0')");
  $stmt->bind_param("sssss", $email, $login, $hashed_password, $firstname, $lastname);

  if ($stmt->execute()) {
    echo "Регистрация прошла успешно";
  } else {
    echo "Ошибка при регистрации: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
?>
