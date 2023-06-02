

function toggleMenu() {
  var menuBtn = document.getElementById('menu-btn');
  var navbar = document.querySelector('.navbar');

  menuBtn.classList.toggle('active');
  navbar.classList.toggle('active');
}

function closeMenu() {
  var menuBtn = document.getElementById('menu-btn');
  var navbar = document.querySelector('.navbar');

  menuBtn.classList.remove('active');
  navbar.classList.remove('active');
}

document.querySelectorAll('.about .video-container .controls .control-btn').forEach(btn =>{
    btn.onclick = () =>{
        let src = btn.getAttribute('data-src');
        document.querySelector('.about .video-container .video').src = src;
    }
})

var swiper = new Swiper(".home-slider", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadow: true,
  },
  loop: true,
  autoplay:{
    delay: 3000,
    disableOnInteraction:false,
  }
});