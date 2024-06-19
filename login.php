<!-- login.php -->
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login = $_POST['login'];
  $password = $_POST['password'];

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

  // Подготовленный запрос для получения данных пользователя
  $stmt = $conn->prepare("SELECT id, email, login, password, role FROM users WHERE login = ?");
  $stmt->bind_param("s", $login);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_role'] = $user['role'];
    header("Location: home.php"); // Перенаправление на защищенную страницу
    exit;
  } else {
    echo "Неверный логин или пароль";
  }

  $stmt->close();
  $conn->close();
}
?>