(function () {
  'use strict';

  var querySelector = document.querySelector.bind(document);

  var menuBtn = querySelector('.menu-btn');
  var main = querySelector('.main');
  var menu = querySelector('.menu');

  function toggleMenu() {
    jQuery(main).toggleClass('opened-nav');
    jQuery(menu).toggleClass('opened-menu');
  }

  menuBtn.addEventListener('click', toggleMenu);
})();
