let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
}


window.onscroll = () =>{
   navbar.classList.remove('active');
   // myOrders.classList.remove('active');
   // cart.classList.remove('active');
};

let slides = document.querySelectorAll('.home-bg .home .slide-container .slide');
let index = 0;

function next(){
   slides[index].classList.remove('active');
   index = (index + 1) % slides.length;
   slides[index].classList.add('active');
}


var swiper = new Swiper(".patners-slider", {
   grabCursor: true,
   centeredSlides: true,  
   spaceBetween: 20,
   loop:true,
   autoplay: {
     delay: 1000,
     disableOnInteraction: false,
   },
   pagination: {
     el: ".swiper-pagination",
     clickable:true,
   },
   breakpoints: {
     0: {
       slidesPerView: 1,
     },
     768: {
       slidesPerView: 2,
     },
     1024: {
       slidesPerView: 3,
     },
   },
 });
 

 var swiper = new Swiper(".testimonials-slider", {
   grabCursor: true,
   centeredSlides: true,  
   spaceBetween: 20,
   loop:true,
   autoplay: {
     delay: 1000,
     disableOnInteraction: false,
   },
   pagination: {
     el: ".swiper-pagination",
     clickable:true,
   },
   breakpoints: {
     0: {
       slidesPerView: 1,
     },
     768: {
       slidesPerView: 2,
     },
     1024: {
       slidesPerView: 3,
     },
   },
 });
 





 