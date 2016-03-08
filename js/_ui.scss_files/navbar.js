(function () {
  'use strict';

  var querySelector = document.querySelector.bind(document);

  var menuBtn = querySelector('.menu-btn');
  var main = querySelector('.main');

  function toggleMenu() {
    main.classList.toggle('opened-nav');
  }

  menuBtn.addEventListener('click', toggleMenu);
})();
