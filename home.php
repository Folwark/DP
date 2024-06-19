
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
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


   
</head>
<body>
    
 <!-- header section starts  -->

 <?php include 'header.php'; ?>

 <!-- header section ends  -->
 
 <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                

                <div class="swiper-slide slide" style="background:url(images/main1.jpg) no-repeat">
                    <div class="content">
                    <h3>Путешествие в мир технологий</h3>
                        <span>Откройте для себя передовые комплектующие и сделайте свой тур по технологиям стоящим.</span>
                       
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/main2.jpg) no-repeat">
                    <div class="content">
                    <h3>Бюджетно и качественно</h3>
                        <span>Открывайте для себя бюджетные, но качественные комплектующие для стоящего тура.</span>
                        
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/main3.jpg) no-repeat">
                    <div class="content">
                         <h3>Экологичные технологии</h3>
                        <span>Исследуйте экологичные технологии для тура в будущее стоящего.</span>
                       
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
 <!-- home section starts -->

 <section class="services">


<h1 class="heading-title"> Популярные категории </h1>

<div class="box-container">


    <div class="box">
        <img src="images/videocards.png" alt="">
        <h3>Видеокарты</h3>
    </div>

    <div class="box">
        <img src="images/CPU.png" alt="">
        <h3>Процессоры</h3>
    </div>

    <div class="box">
        <img src="images/motherboards.png" alt="">
        <h3>Материнские платы</h3>
    </div>

    <div class="box">
        <img src="images/RAM.png" alt="">
        <h3>Оперативная память</h3>
    </div>
    <div class="box">
        <img src="images/SSD.png" alt="">
        <h3>SSD диски</h3>
    </div>
    <div class="box">
        <img  src="images/hdd.png" alt="">
        <h3>HDD диски</h3>
    </div>

</div>
</section>

 <section class="home-about">
    
    <div style="border-radius:35px 35px 35px 35px" class="content">
        <h3>ПроКомп</h3>
        <p>Добро пожаловать в наш магазин ПроКомп, где вы обнаружите разнообразие высококачественных элементов, необходимых для сборки и улучшения вашего компьютера. Мы предлагаем широкий выбор процессоров, видеокарт, жестких дисков, оперативной памяти и других комплектующих, чтобы удовлетворить любые потребности вашего ПК.</p>
        <a href="about.php" class="btn">Узнать больше</a>
    </div>
     
</section>
<section class="news">
<h2 class="heading-title">Новинки</h2>
<div class="new">


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

// Запрос к базе данных для получения последних 4 добавленных инструментов
$sql = "SELECT * FROM list ORDER BY id DESC LIMIT 4";
$result = $conn->query($sql);

// Если есть результаты, выводим их
if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "<div class='new-block'> <p>" . $row["name"] . " - Цена: " . $row["price"] ."</p> </div>";
  }
  
} else {
  echo "Нет результатов";
}

// Закрытие соединения
$conn->close();
?>

</div>
</section>
 <!-- home section ends -->
           
          
<!-- services section starts -->




<!-- <section class="home-packages">
    <h1 class="heading-title">Каталог</h1>

    <div class="box-container">

    <div class="box">
            <div class="image">
                <img src="images/guitar.jpg" alt="">
            </div>
            <div class="content">
             <h3>Гитары</h3>
            </div>
            <div class="content">
            <button class="look-category" data-category-id=1;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/bara.jpg" alt="">
            </div>
            <div class="content">
             <h3>Барабаны</h3>
            </div>
            <div class="content">
            <button class="look-category" data-category-id=2;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/sintezator.jpg" alt="">
            </div>
            <div class="content">
             <h3>Синтезаторы</h3>
            </div>
            <div class="content">
            <button class="look-category" data-category-id=3;>Подробнее</button>
            </div>
        </div>

    </div>

    <div class="load-more"><a href="package.php" class="btn">Загрузить далее</a>    </div>

</section> -->

<!-- home packages section ends  -->


<!-- home offer section starts  -->

    <section class="home-offer">
        <div class="content">
            <h3>Не знаете, что выбрать? Мы поможем!</h3>
            <a href="book.php" class="btn">Заказать консультацию</a>
        </div>
    </section>

<!-- home offer section ends  -->

    <!-- <section class="reviews">
        <h1 class="heading-title">Отзывы наших клиентов</h1>
        <div class="reviews-block">
            <div class="content">
                <h3>Рената</h3>
                <p>Всё кул</p>
                <img src="images/n1.jpg" alt="">
            </div>
            <div class="content">
                <h3>не Рената</h3>
                <p>Всё не кул</p>
                <img src="images/n1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Пипл</h3>
                <p>АФИГЕТЬ</p>
                <img src="images/n1.jpg" alt="">
            </div>
        </div>
    </section> -->
   




    <script>
    document.querySelectorAll('.look-category').forEach(button => {
  button.addEventListener('click', function() {
    const categoryId = this.getAttribute('data-category-id');
    window.location.href = 'list.php?category_id=' + categoryId;
  });
});
</script>




<!-- footer section starts-->
<?php include 'footer.php'; ?>

<!-- footer section ends-->


    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>