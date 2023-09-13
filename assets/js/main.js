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

/* Sending a form */

const btn = document.querySelector('.feedback__form__btn');
btn.onclick = (e) => {
  e.preventDefault()
  let x = document.querySelector('#firstname').value
  if (x === "") {
          document.querySelector('.feedback__form--error').textContent = "Укажите Ваше имя";
          return false;
  }
  x =  document.querySelector('#email').value;
  if (x === "") {
    document.querySelector('.feedback__form--error').textContent = "Укажите Ваш E-mail";
      return false;
    } else {
          let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if(!re.test(x)){
              document.querySelector('.feedback__form--error').textContent = "Некорректный E-mail";
              return false;
          }
      }
  x = document.querySelector('#message').value
  if (x === "") {
          document.querySelector('.feedback__form--error').textContent = "Напишите Ваше сообщение";
          return false;
  }
  const params = new FormData(document.querySelector('.feedback__form'))
  
  fetch('../wp-content/themes/xt/mail.php', {
    method: 'POST',
    body: params
  }).then(
    response => {
      return response.text()
  }).then(
    () => {
      document.querySelector('.feedback__form--error').textContent = ''
      document.querySelector('.feedback__form--error').classList.remove('feedback__form__message--error');
      document.querySelector('.feedback__form--error').textContent = 'Сообщение успешно отправлено. Специалист свяжется с Вами через несколько минут';
      setTimeout( function(){ 
        document.querySelector('.feedback__form').reset()
        document.querySelector('.feedback__form--error').textContent = '';
        document.querySelector('.feedback__form--error').classList.add('feedback__form__message--error');
      }, 10000)
  }
  )
}

/* Sending a form */

$(document).ready(function() {
  $('.jobs__box__items__link').click(function (e) {
    e.preventDefault();
    let elem = e.target;
    let id = '1' + elem.getAttribute('id');
    let idContent = '2' + elem.getAttribute('id');
    console.log(elem);
    jQuery("#"+id).toggleClass('content--dn');
    jQuery("#"+idContent).toggleClass('content--active');
    });
})