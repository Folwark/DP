<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформить звонок</title>
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
    <h1>Оформить звонок</h1>
</div>
</section>

<!-- booking section starst  -->

<section class="booking">

 

 <form action="book_form.php" method="post" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>ФИО :</span>
            <input type="text" placeholder="Введите ваше ФИО:" name="name">
        </div>
        <div class="inputBox">
            <span>Телефон :</span>
            <input type="text" placeholder="Введите ваш номер" name="phone">
        </div>
        
        
       
 

        
        
        
        
    </div>
    <input type="submit" value="Отправить" class="btn" name="send">


 </form>

</section>

<!-- booking section ends  -->















<!-- footer section starts-->
<?php include 'footer.php'; ?>

<!-- footer section ends-->


    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>

</body>
</html>