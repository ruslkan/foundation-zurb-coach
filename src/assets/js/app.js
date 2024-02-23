import $ from 'jquery'
import 'what-input'
import 'slick-slider'
import 'magnific-popup'

// Foundation JS relies on a global variable. In ES6, all imports are hoisted
// to the top of the file so if we used `import` to import Foundation,
// it would execute earlier than we have assigned the global variable.
// This is why we have to use CommonJS require() here since it doesn't
// have the hoisting behavior.
// window.jQuery = $
// require('foundation-sites')

// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
import './lib/foundation-explicit-pieces'

$(document).foundation()

// Slick Slider Section Certificates
$(document).ready(function () {
  var $carousel = $('#certificatesSlider')

  $carousel
    .slick({
      arrows: false,
      dots: false,
      initialSlide: 1,
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 5000,
      adaptiveHeight: true,
      closeBtnInside: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    })
    .magnificPopup({
      type: 'image',
      delegate: 'a:not(.slick-cloned)',
      disableOn: function () {
        if ($(window).width() < 600) {
          return false
        }
        return true
      },
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1],
        closeOnContentClick: true,
      },
      callbacks: {
        open: function () {
          var current = $carousel.slick('slickCurrentSlide')
          $carousel.magnificPopup('goTo', current)
        },
        beforeClose: function () {
          $carousel.slick('slickGoTo', parseInt(this.index))
        },
      },
    })
})
