
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администрирование</title>
    <link rel="icon" href="images/profile.ico">

    <!-- swiper css link -->
    <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- fint awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Header styles (если есть) */

form {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #fff;
    font-size:2rem;
}

label {
    display: block;
    
    color: #333;
    font-size:1.2rem;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: var(--main-color);
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #007bb5;
}
</style>
   
</head>
<body style="background:#808080 ">
    
 <!-- header section starts  -->

 <?php include 'header.php'; ?>

 <h2>Добавить товар</h2>

<form action="insert.php" method="post">
  <label for="name">Название товара:</label><br>
  <input type="text" id="name" name="name"><br><br>

  <label for="price">Цена:</label><br>
  <input type="text" id="price" name="price"><br><br>

  <label for="category">Категория:</label><br>
  <?php
    // Вставляем PHP-код для создания выпадающего списка категорий
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biznes_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name FROM category";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo '<select id="category" name="category">';
      while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
      }
      echo '</select>';
    } else {
      echo "0 результатов";
    }

    $conn->close();
  ?>
  <br><br>

  <label for="description">Описание:</label><br>
  <input type="text" id="description" name="description"><br><br>

  <label for="manufacturer">Производитель:</label><br>
  <input type="text" id="manufacturer" name="manufacturer"><br><br>

  <label for="country">Страна:</label><br>
  <input type="text" id="country" name="country"><br><br>

  <label for="color">Цвет:</label><br>
  <input type="text" id="color" name="color"><br><br>

  <label for="imageLink">Ссылка на картинку:</label><br>
  <input type="text" id="imageLink" name="imageLink"><br><br>

  <input class="btn" type="submit" value="Добавить товар">
</form>



    


<!-- footer section starts-->
<?php include 'footer.php'; ?>
<!-- footer section ends-->


    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>