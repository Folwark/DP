  let menu = document.querySelector('#menu-btn');
  let navbar = document.querySelector('.header .navbar');
  let newBtn = document.querySelector('.header .a-pack');
  let drop = document.querySelector('.header .a-pack .dropdown-content');



  menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    drop.classList.toggle('active');
}

  // window.onscroll = () => {
  //     menu.classList.remove('fa-times');
  //     navbar.classList.remove('active');
  // }
  // newBtn.href = "package.php";

  // newBtn.onclick = (event) => {
  //   if (navbar.classList.contains('active')) {
  //       event.preventDefault(); // Предотвращаем переход по ссылке
  //       window.location.href = newBtn.href; // Открываем ссылку в новой вкладке
  //   }
// }


var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var swiper = new Swiper(".reviews-slider", {
    loop:true, 
    grabCursor:true,
    autoHeight:true,
    spaceBetween: 20,
    rewind: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    hashNavigation: {
      watchState: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var swiper = new Swiper(".service-slider", {
    grabCursor:true,
    spaceBetween: 20,
    // autoHeight:false,
    rewind: true,
   
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
    },
    
  });

  // let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  // let currentItem = 3;

  // loadMoreBtn.onclick = () =>{
  //   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
  //   for (var i = currentItem; i <currentItem + 3; i++){
  //     boxes[i].style.display = 'inline-block';
  //   };
  //   currentItem += 3;
  //   if(currentItem >=boxes.length){
  //     loadMoreBtn.style.display = 'none';
  //   }
  // }

  document.addEventListener("DOMContentLoaded", function() {
    var dropdown = document.querySelector(".dropdown");

    dropdown.addEventListener("click", function() {
        this.classList.toggle("active");
    });

    document.addEventListener("click", function(event) {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove("active");
        }
    });

    

    
});

document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', function() {
    const productId = this.getAttribute('data-id');
    window.location.href = 'productInfo.php?id=' + productId;
  });
});



  