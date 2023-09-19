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
$(document).on('click', '.video__link--open', function(e) { 
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


/* Mailing */
$('#school__form__submit').click(function(e){
  e.preventDefault();

  data = new FormData();
  const uploadField = document.getElementById("files");
  if(uploadField.files.length < 1){
    document.getElementById('school__form__status').textContent = "Вы не добавили файлы";
    return false;
}
  if(uploadField.files.length >= 6){
      document.getElementById('school__form__status').textContent = "Запрещено загружать больше 5 файлов";
      return false;
  }
  if(uploadField.files.length >=1){
      for (let i = 0; i < uploadField.files.length; i++){ 
          if(uploadField.files[i].size > 1048576){
              document.getElementById('school__form__status').textContent = "Размер файла не должен превышать 1MB";
              return false;
          }
          if ( /\.(jpe?g|png|PNG|gif|tif|doc|docx|xls|xlsx|csv|pdf|txt|zip|rar)$/i.test(uploadField.files[i].name) === false ){
              document.getElementById('school__form__status').textContent = "Не допустимый формат файла"; 
              return false;
          }
          data.append('files[]', document.getElementById('files').files[i] );
      }
  }
  $('#school__form__status').removeClass("school__form__error");
  document.getElementById('school__form__status').textContent = "Отправка...";
  $.ajax({
    url: '/wp-content/themes/xt/mail-files.php',
    type: "POST",
    data: data,
    processData: false,
    contentType: false,
    success: function() {
        $('#school__form').trigger('reset');
        $("#files").val(null);
        $('#school__form__status').text("Ваше сообщение отправлено!");
        setTimeout(function () {
          $('#school__form__status').text("").addClass("error");
        }, 2000);
    },
    error: function (jqXHR) {
        $('#school__form__status').text(jqXHR);
    }
  });
});