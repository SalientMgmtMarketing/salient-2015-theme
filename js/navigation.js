/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
(function () {
  'use strict';
  var container, button, menu;

  container = document.getElementById('site-navigation');
  if (!container) {
    return;
  }

  button = container.getElementsByTagName('button')[0];
  if ('undefined' === typeof button) {
    return;
  }

  menu = container.getElementsByTagName('ul')[0];

  // Hide menu toggle button if menu is empty and return early.
  if ('undefined' === typeof menu) {
    button.style.display = 'none';
    return;
  }

  menu.setAttribute('aria-expanded', 'false');

  if (-1 === menu.className.indexOf('nav-menu')) {
    menu.className += ' nav-menu';
  }

  button.onclick = function () {
    if (-1 !== container.className.indexOf('toggled')) {
      container.className = container.className.replace(' toggled', '');
      button.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-expanded', 'false');
    } else {
      container.className += ' toggled';
      button.setAttribute('aria-expanded', 'true');
      menu.setAttribute('aria-expanded', 'true');
    }
  };
}());


jQuery(function ($) {
  'use strict';
  var $body, $window, $sidebar, adminbarOffset, top = false,
    bottom = false,
    windowWidth, windowHeight, lastWindowPos = 0,
    topOffset = 0,
    bodyHeight, sidebarHeight, resizeTimer,
    secondary, button;

  // Add dropdown toggle that display child menu items.
  $('.main-navigation .menu-item-has-children > a').after('<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>');

  // Toggle buttons and submenu items with active children menu items.
  //$('.main-navigation .current-menu-ancestor > button').addClass('toggle-on');
  //$( '.main-navigation .current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

  $('.dropdown-toggle').click(function (e) {
    var _this = $(this);
    e.preventDefault();
    _this.toggleClass('toggle-on');
    _this.next('.children, .sub-menu').toggleClass('toggled-on');
    _this.attr('aria-expanded', _this.attr('aria-expanded') === 'false' ? 'true' : 'false');
    _this.html(_this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand);
  });

  secondary = $('#secondary');
  button = $('.site-branding').find('.secondary-toggle');


  $('button.menu-toggle').click(function () {
    $('#page').toggleClass('toggled');
  });
});