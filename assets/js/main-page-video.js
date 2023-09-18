window.onscroll = function() {fixHeader()}

let header = document.querySelector('.header')
let sticky = header.offsetTop

function fixHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("header--zindex")
  } else {
    header.classList.remove("header--zindex")
  }
}

function openMenu(event) {
    event.preventDefault()
    const btnMenu = document.querySelector('.menu__btn');
    const listMenu = document.querySelector('.menu__list');
    const btnElement = document.querySelector('.menu__btn__element');
    btnMenu.classList.toggle('menu__btn--close');
    listMenu.classList.toggle('menu__list--active');
    btnElement.classList.toggle('menu__btn__element--close');
}

/* Open a video in a modal window */
$(document).on('click', '.video__link', function(e) { 
  e.preventDefault();
  let dataLink = $(this).attr('data-link');
  document.getElementById('video-content').innerHTML = dataLink;
  const modal = document.querySelector('.modal-video');
  modal.classList.toggle('modal-video--open');
})
function openModal(event) {
  event.preventDefault()
  const modal = document.querySelector('.modal-video');
  modal.classList.toggle('modal-video--open');
  document.getElementById('video-content').innerHTML = '';
}
/* Open a video in a modal window */

/* Hover Menu */ 
const pageWidth = document.documentElement.scrollWidth
$(document).ready(function(){
  if (pageWidth > 1200) {
    $(".menu-open-one").hover(function(){
      $(".menu-modal--one").addClass("menu-modal--open");
    });
    $(".menu-modal__link").hover(function(){}, function(){
        $(".menu-modal--one").removeClass("menu-modal--open");
    });
    $(".menu-open-shop").hover(function(){
      $(".menu-modal--shop").addClass("menu-modal--open");
    });
    $(".menu-modal__link").hover(function(){}, function(){
        $(".menu-modal--shop").removeClass("menu-modal--open");
    });
    $(".menu-open-donat").hover(function(){
      $(".menu-modal--donat").addClass("menu-modal--open");
    });
    $(".menu-modal__link").hover(function(){}, function(){
        $(".menu-modal--donat").removeClass("menu-modal--open");
    });
  }
});
/* Hover Menu */ 