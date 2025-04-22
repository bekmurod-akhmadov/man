// A $( document ).ready() block.
$( document ).ready(function() {

  // === Swiper ===
  if (document.querySelector('.works_swiper')) {
    const worksSwiper = new Swiper('.works_swiper', {
      slidesPerView: 2,
      spaceBetween: 40,
      centeredSlides: false,
      loop: false,
      touchRatio: 1,
      simulateTouch: true,
      touchStartPreventDefault: true,
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
        }
      },
    });
  }

  // === Phone input ===
  if (document.querySelector('#phone')) {
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      initialCountry: "ru",
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });
  }

  // === Checked toggle ===
  if (document.querySelector('.checked')) {
    $('.checked').on('click', function () {
      $(this).toggleClass('active');
    });
  }

  // === FAQ toggle ===
  if (document.querySelector('.faq_top_side')) {
    $('.faq_top_side').on('click', function () {
      $('.faq_item').removeClass('active');
      $(this).closest('.faq_item').toggleClass('active');
    });
  }

  if ($('.car_swiper').length) {
    var carSwiper = new Swiper('.car_swiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: '.right_btn',
        prevEl: '.left_btn',
      },
    });
  }

  if(document.querySelector('.screen_btn')){
    $('.screen_btn').on('click', function () {
      $(this).closest('.slide_item').toggleClass('active');
      $(this).addClass('d-none');
    });
  }




});