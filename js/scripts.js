jQuery(document).ready(function($){
  $('.header').addClass('header-show');
  $('.welcome__title-inner').addClass('welcome__title-inner-show');
  $('.welcome__description-inner').addClass('welcome__description-inner-show');
})

$('.mobile-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('mobile-menu__active');
  $('.mobile-cover').toggleClass('mobile-cover__open');
  $('body').toggleClass('modal-open');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

$('iframe').load( function() {
  console.log($('iframe').contents().find('head'));
    $('iframe').contents().find('head').append("<style type='text/css'>  .place-card{display:none;}  </style>");
});

//Callback Form Open
if ($('.callback').length > 0) {
  $(document).on('click', '.callback', function(){
    $('.callback__modal').addClass('callback__modal-open');
    $('body').addClass('modal-open');
    $('.modal__bg').addClass('modal__bg-open');
  });
}

//Callback Form Close
if ($('.callback__close').length > 0) {
  $(document).on('click', '.callback__close', function(){
    $('.callback__modal').removeClass('callback__modal-open');
    $('body').removeClass('modal-open');
    $('.modal__bg').removeClass('modal__bg-open');
  });
}

function showSert(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("p_sertificates__button");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("p_sertificates__button-active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " p_sertificates__button-active";
}