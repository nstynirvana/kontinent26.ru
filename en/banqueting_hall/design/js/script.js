$('.banner-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 691,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ]
});

$('.food-slider-banket').on('init', function (event, slick) {
    if (slick.slideCount === 1) {
        // If there's only one slide, adjust the settings
        slick.slickSetOption('variableWidth', false, true);
        slick.slickSetOption('centerMode', true, true);
        slick.slickSetOption('slidesToShow', 1, true);
        slick.slickSetOption('slidesToScroll', 1, true);
        slick.slickSetOption('arrows', false, true);
    }
}).slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 600,
    variableWidth: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 1220,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 691,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});


$('.price-icons-slider').slick({
    dots: false,
    arrows: false,
    infinite: false,
    variableWidth: true,
    speed: 600,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1221,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
    ]
});

ymaps.ready(function () {
  var myMap = new ymaps.Map('map', {
          center: [45.0443737112002,41.970678414680485],
          zoom: 18
      }, {
          searchControlProvider: 'yandex#search'
      });

      myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
          hintContent: '',
          balloonContent: 'Ставрополь, улица Дзержинского, 114 '
      }, {
          // Опции.
          // Необходимо указать данный тип макета.
          iconLayout: 'default#image',
          // Своё изображение иконки метки.
          // iconImageHref: '/design/img/map-point.svg',
          // Размеры метки.
          iconImageSize: [42, 55],
          // Смещение левого верхнего угла иконки относительно
          // её "ножки" (точки привязки).
          iconImageOffset: [-21, -55]
      });

  myMap.geoObjects.add(myPlacemark);
});




const menuBg = document.querySelector('.mobile-menu'),
      menu = document.querySelector('.mobile-menu-wrapper'),
      menuCloseBtn = document.querySelector('.mobile-menu-close'),
      menuList = document.querySelector('.mobile-menu-list'),
      menuHeader = document.querySelector('.mobile-menu-header'),
      menuHeaderClose = document.querySelector('.mobile-menu-header-close'),
      menuOpenBtn = document.querySelector('.mobile-navigation-btn');

menuOpenBtn.addEventListener('click', (e) => {
    menuBg.classList.add('open');
    document.body.style.overflow = 'hidden';
});
menuHeaderClose.addEventListener('click', (e) => {
    menuBg.classList.remove('open');
    document.body.style.overflow = 'visible';
});
menuCloseBtn.addEventListener('click', (e) => {
    menuBg.classList.remove('open');
    document.body.style.overflow = 'visible';
});
document.addEventListener('keydown', (e) => {
    if (e.code === "Escape" && menuBg.classList.contains('open')) { 
        menuBg.classList.remove('open');
        document.body.style.overflow = 'visible';
    }
});
menuBg.addEventListener('click', (e) => {
    if (e.target !== menu && e.target !== menuList && e.target !== menuHeader && menuBg.classList.contains('open')) {
        menuBg.classList.remove('open');
        document.body.style.overflow = 'visible';
    }
});