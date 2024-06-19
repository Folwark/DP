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
    
 <!-- header section starts  -->

 <?php include 'header.php'; ?>

 <!-- header section ends  -->

<section>
 <div class="heading" >
    <h1>Каталог</h1>
</div>
</section>

<!-- packages section starts  -->

<section class="packages">
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/videocards.png" alt="">
            </div>
            <div class="content">
             <h3>Видеокарты</h3>
            </div>
            <div class="content">
             <button class="look-category" data-category-id=1;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/CPU.png" alt="">
            </div>
            <div class="content">
             <h3>Процессоры</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=2;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/motherboards.png" alt="">
            </div>
            <div class="content">
             <h3>Материнские платы</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=3;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/RAM.png" alt="">
            </div>
            <div class="content">
             <h3>Оперативная память</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=4;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/SSD.png" alt="">
            </div>
            <div class="content">
             <h3>SSD диски</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=5;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/hdd.png" alt="">
            </div>
            <div class="content">
             <h3>HDD диски</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=6;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/Powersupplies.png" alt="">
            </div>
            <div class="content">
             <h3>Блоки питания</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=7;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/computercase.png" alt="">
            </div>
            <div class="content">
             <h3>Корпуса</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=8;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/Coolingsystems.png" alt="">
            </div>
            <div class="content">
             <h3>Системы охлаждения</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=9;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/DVD.png" alt="">
            </div>
            <div class="content">
             <h3>DVD привод</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=10;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/Expansioncards.png" alt="">
            </div>
            <div class="content">
             <h3>Платы расширения</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=11;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/USB.png" alt="">
            </div>
            <div class="content">
             <h3>USB диски</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=12;>Подробнее</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/tovars.png" alt="">
            </div>
            <div class="content">
             <h3>Прочие товары</h3>
             </div>
            <div class="content">
            <button class="look-category" data-category-id=13;>Подробнее</button>
            </div>
        </div>
        
        
        
        
        
    </div>



</section>
<script>
    document.querySelectorAll('.look-category').forEach(button => {
  button.addEventListener('click', function() {
    const categoryId = this.getAttribute('data-category-id');
    window.location.href = 'list.php?category_id=' + categoryId;
  });
});
</script>
<!-- packages section ends -->














<!-- footer section starts-->
<?php include 'footer.php'; ?>

<!-- footer section ends-->


    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <!-- <script src="js/script.js"></script> -->

</body>
</html>