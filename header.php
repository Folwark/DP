<?php
session_start();

// Подключение к базе данных
$conn = new mysqli("localhost", "root", "", "biznes_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $userQuery = "SELECT firstname, lastname, role FROM users WHERE id = $userId";
    $userResult = $conn->query($userQuery);

    if ($userResult) {
        $user = $userResult->fetch_assoc();
    } else {
        // Обработка ошибки запроса
    }
}
?>
<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #333
    }

    .navbar {
        display: flex;
        gap: 20px;
    }

    .navbar.left {
        justify-content: flex-start;
    }

    .navbar.center {
        justify-content: center;
    }

    .navbar.right {
        justify-content: flex-end;
    }

    #menu-btn {
        cursor: pointer;
    }
</style>
<section class="header">
    <nav class="navbar left">
        <a href="home.php">Главная</a>
        <a href="about.php">О компании</a>
        <a href="package.php">Каталог</a>
     
    </nav>

    <nav class="navbar center">
        <a href="">+375 29 12-232-21</a>
        <a href="book.php">Заказать звонок</a>
    </nav>

    <nav class="navbar right">
        <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a href="profile.php">Мой кабинет</a>';
        } else {
            echo '<a href="user.php">Войти</a>';
        }

        if (isset($user) && $user['role'] == 1) {
            echo '<a href="admin.php">Администрирование</a>';
        }
        ?>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

