<?php
session_start();

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

// Получение информации о пользователе
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $userQuery = "SELECT firstname, lastname FROM users WHERE id = $userId";
    $userResult = $conn->query($userQuery);
    $user = $userResult->fetch_assoc();

    // Получение информации о корзине пользователя
    $cartQuery = "SELECT l.id, l.name, l.price FROM cart c JOIN list l ON c.product_id = l.id WHERE c.user_id = $userId";
    $cartResult = $conn->query($cartQuery);
    $products = $cartResult->fetch_all(MYSQLI_ASSOC);
}

$cartQuery = "SELECT l.id, l.name, l.price FROM cart c JOIN list l ON c.product_id = l.id WHERE c.user_id = $userId";
$cartResult = $conn->query($cartQuery);
$products = $cartResult->fetch_all(MYSQLI_ASSOC);

$totalPrice = 0;
foreach ($products as $product) {
    $totalPrice += $product['price'];
}

if (isset($_POST['remove_product'])) {
    $productId = $_POST['remove_product'];
    // Добавьте код для удаления товара из корзины
    $deleteQuery = "DELETE FROM cart WHERE user_id = $userId AND product_id = $productId LIMIT 1";
    $conn->query($deleteQuery);

    // Перезагружаем страницу после удаления товара
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="icon" href="images/profile.ico">

    <!-- swiper css link -->
    <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- fint awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="profile">
        <?php
        if (isset($user)) {
            echo "<h1 class='profile-heading'>" . $user['firstname'] . " " . $user['lastname'] . "</h1>";
        }
        ?>
        <div class="cart-container">
            <div class="cart">
                <?php
                if (isset($products)) {
                    echo "<h2>Товары в корзине:</h2>";
                    echo "<ul>";

                    echo "<li class='header-p'><span class='product-name'>Название</span><span class='product-price'>Цена</span></li>";

                    foreach ($products as $product) {
                        echo "<li>
                                <span class='product-name'>{$product['name']}</span>
                                <span class='product-price'>{$product['price']}</span>
                                <form method='post' style='display:inline;'>
                                    <input type='hidden' name='remove_product' value='{$product['id']}'>
                                    <button type='submit' class='remove-btn' onclick='return confirm(\"Вы уверены?\")'>Удалить</button>
                                </form>
                              </li>";
                    }

                    echo "</ul>";
                    echo "<p>Общая сумма: $totalPrice</p>";
                }
                ?>

                <button class="btn" onclick="alert('Оплачено')">Оплатить</button>
            </div>
            <?php
if (isset($_SESSION['user_id'])) {
    echo '<a href="logout.php" class="logout-btn" style="margin:10px">Выйти из аккаунта</a>';
}
?>
        </div>
    </section>

<!-- footer section starts-->
<?php include 'footer.php'; ?>

<!-- footer section ends-->


    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>