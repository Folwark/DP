<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список</title>
    <link rel="icon" href="images/profile.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- swiper css link -->
    <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- fint awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
 <!-- header section starts  -->

 <?php include 'header.php'; ?>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biznes_db";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$category_id = $_GET['category_id'];

// Выбираем данные из таблицы
$sql1 = "SELECT name FROM category WHERE id='$category_id'";
$result1 = $conn->query($sql1);


$sql = "SELECT id, name, price, category_id, image_link FROM list WHERE category_id='$category_id'";
$result = $conn->query($sql);


?>



    <section class="list">
    <?php

if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
?>
<?php echo "<h2 class='heading-title'>" .$row1["name"]. "</h2>";?>
<?php
                    }
                }
                ?>
        <div class="container mt-5">
            <div class="row">
            
                <?php

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4">
                    <div class="product">
                        <div class="image">
                            <img src="<?php echo $row["image_link"];?>" alt="">
                        </div>
                        <div class="info">
                            <h3><?php echo $row["name"]; ?></h3>
                            <div class="info-price">
                                <span class="price"><?php echo $row["price"]; ?> BYN</span>
                                <button class="add-to-cart" data-id="<?php echo $row['id']; ?>">Подроб</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo "Товаров ещё нет :(";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <!-- Другие скрипты и ссылки на файлы JavaScript -->


 


<script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', function() {
    const productId = this.getAttribute('data-id');
    window.location.href = 'productInfo.php?id=' + productId;
  });
});
</script>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<!-- footer section starts-->
<?php include 'footer.php'; ?>
<!-- footer section ends-->


    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>