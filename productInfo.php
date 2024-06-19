<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о товаре</title>
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
<Style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    max-width: 1200px;
    
    padding: 20px;
    
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.row {
    display: flex;
    justify-content: space-between;
}

.col-md-6 {
    width: 48%;
}

.images img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 20px;
}

h1 {
    font-size: 24px;
    margin-bottom: 10px;
    color:var(--light-black);
}


</Style>
    <script>
$(document).ready(function(){
    $("button.addToCart").click(function(){
        var productId = $(this).data('product-id');
        $.get("addToCart.php", { id: productId }, function(data){
            alert(data); // Отображение уведомления
        });
    });
});
</script>

</head>
<body>
<?php include 'header.php'; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biznes_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productId = $_GET['id'];

$sql = "SELECT name, price, description, color, country, manufacturer, image_link FROM list WHERE id='$productId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                        <h1><?php echo $row["name"]?></h1>
                    <div class="images">
                        <img src="<?php echo $row["image_link"]?>" alt="">
                    </div>
                    <h1>Описание: <?php echo $row["description"]?></h1>
                    <h1>Цвет: <?php echo $row["color"]?></h1>
                    <h1>Страна: <?php echo $row["country"]?></h1>
                    <h1>Производитель: <?php echo $row["manufacturer"]?></h1>
                    

                </div>
                <div class="col-md-6">
                <h1>Цена: <?php echo $row["price"]?></h1>
                <button class="btn" id="addToCartButton">Добавить в корзину</button>

                </div>
            </div>
            
        </div>
        <?php
    }

} else {
    echo "Товар не найден";
}

$conn->close();
?>


<script>
  document.getElementById('addToCartButton').addEventListener('click', function() {
    var productId = <?php echo $productId; ?>;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'addToCart.php?id=' + productId, true);
    xhr.send();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          alert(xhr.responseText); // Показываем сообщение, полученное от сервера
        } else {
          alert('Произошла ошибка');
        }
      }
    };
  });
</script>
<?php include 'footer.php'; ?>
</body>
</html>