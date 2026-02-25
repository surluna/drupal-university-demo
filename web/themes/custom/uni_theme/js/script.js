(function (Drupal) {
  'use strict';

  Drupal.behaviors.uniTheme = {
    attach: function (context, settings) {
      // Mobile menu toggle
      const menuToggle = context.querySelector('.menu-toggle');
      const mainNav = context.querySelector('.main-nav');

      if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
          mainNav.classList.toggle('is-open');
        });
      }
    }
  };

})(Drupal);