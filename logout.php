<?php
session_start();
// Удаляем все сессионные переменные
session_unset();
// Уничтожаем сессию
session_destroy();
// Перенаправляем пользователя на страницу входа или на другую страницу
header("Location: user.php");
exit;
?>