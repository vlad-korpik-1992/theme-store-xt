window.onscroll = function() {fixHeader()}

let header = document.querySelector('.header')
let breadcrumbs = document.querySelector('.breadcrumbs')
let sticky = header.offsetTop

function fixHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("header--zindex")
    breadcrumbs.classList.add("breadcrumbs--dn")
  } else {
    header.classList.remove("header--zindex")
    breadcrumbs.classList.remove("breadcrumbs--dn")
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
  $('span:contains("Товары")').html('Онлайн-магазин');

  $("a[href*='product-category']").each(function() { 
      this.href = this.href.replace(/product-category/, 
         "shop");
   });
   $("a[href*='misc']").each(function() { 
    this.href = this.href.replace(/misc/, 
       "");
  });
  $("span[itemprop='name']").each(function() { 
      this.innerHTML = this.innerHTML.replace('Misc', 'Онлайн-магазин');
  });
});

$(function() {
  $("span[itemprop='itemListElement']").each(function(){ 
		let innerHtml = this.innerHTML;
		if(innerHtml == 'Онлайн-магазин'){
			let blockParentBreadcrumbs = $(this);
			blockParentBreadcrumbs.next('.kb_sep').remove();
			blockParentBreadcrumbs.remove();
		}
  });
  /* Выбор вариативного товара */
  $(document).on('click', '.select-size', function(e) {
		e.preventDefault();
    $('.card__box__size__link--active').removeClass('card__box__size__link--active');
    $(this).addClass('card__box__size__link--active');
    let dataCart = $(this).attr('data-cart');
    let newHref = `?add-to-cart=${ dataCart }`;
    $("a.card__box__btn").attr("href", newHref);
    $("a.card__box__btn").attr('data-product_id', dataCart)
  })
  /* Выбор вариативного товара */
})

/* Hover Menu */ 

$(document).ready(function() {
  $('.top__slider').slick({
		mobileFirst: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		rows: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		infinite: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 575,
        settings: {
          dots: false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 280,
        settings: {
          dots: false,
          slidesToShow: 1
        }
      }
    ]
	});
  $('.cart__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.cart__sliderprev'
  });
  $('.cart__sliderprev').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    asNavFor: '.cart__slider',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 575,
        settings: {
          dots: false,
          slidesToShow: 2,
          rows: 1,
          centerMode: false
        }
      },
      {
        breakpoint: 424,
        settings: {
          dots: false,
          slidesToShow: 2,
          rows: 1,
          centerMode: false
        }
      },
      {
        breakpoint: 374,
        settings: {
          dots: false,
          rows: 1,
          slidesToShow: 2,
          centerMode: false
        }
      }
    ]
  });
})