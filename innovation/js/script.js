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





 