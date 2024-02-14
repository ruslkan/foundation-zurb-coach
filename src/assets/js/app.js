import $ from 'jquery'
import 'what-input'

// Foundation JS relies on a global variable. In ES6, all imports are hoisted
// to the top of the file so if we used `import` to import Foundation,
// it would execute earlier than we have assigned the global variable.
// This is why we have to use CommonJS require() here since it doesn't
// have the hoisting behavior.
window.jQuery = $
require('foundation-sites')

// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
// import './lib/foundation-explicit-pieces'

$(document).foundation()

$(document).ready(function () {
  $('.gallery-carousel').owlCarousel({
    nav: true,
    navText: [
      '<img src="http://randomsite.zzz.com.ua/cabel/img/s8_al.png">',
      '<img src="http://randomsite.zzz.com.ua/cabel/img/s8_ar.png">',
    ],
    margin: 10,
    loop: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  })

  $('.popup-gallery').magnificPopup({
    delegate: '.owl-item:not(.cloned) a',
    type: 'image',
    removalDelay: 500, //delay removal by X to allow out-animation
    gallery: {
      enabled: true,
    },
  })
})
