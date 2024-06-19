<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой кабинет</title>
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


    <script>
    function validateForm() {
      var login = document.forms["registrationForm"]["login"].value;
      var email = document.forms["registrationForm"]["email"].value;
      var password = document.forms["registrationForm"]["password"].value;
      if (email == "" || password == "" ||; login == "") {
        alert("Пожалуйста, заполните все поля.");
        return false;
      }
    }
  </script>
</head>
<body>
    
 <!-- header section starts  -->

    <?php include 'header.php'; ?>
<section class="vhod">
<div class="registration-form">
    <h2>Регистрация</h2>
  <form name="registrationForm" action="register.php" onsubmit="return validateForm()" method="post">
    <label for="login">Логин:</label>
    <input type="login" id="login" name="login" required><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>
    <label for="firstname">Имя:</label>
    <input type="firstname" id="firstname" name="firstname" required><br>
    <label for="lastname">Фамилия:</label>
    <input type="lastname" id="lastname" name="lastname" required><br>
    <label for="email">Почта:</label>
    <input type="email" id="email" name="email" required><br>
    <button>Зарегистрироваться</button>
  </form>
  </div>
  <div class="login-form">
  <h2>Вход</h2>
  <form action="login.php" method="post">
    <label for="loginLogin">Логин:</label>
    <input type="login" id="loginLogin" name="login" required><br>
    <label for="loginPassword">Пароль:</label>
    <input type="password" id="loginPassword" name="password" required><br>
    <input type="submit" value="Войти">
  </form>
  </div>


  </section>
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