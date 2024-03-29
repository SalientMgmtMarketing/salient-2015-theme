/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
(function () {
  'use strict';
  var container, button, menu, links, subMenus, i, len;

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
  // Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}
    /**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

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
  $('#site-navigation .menu-item-has-children > a').after('<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>');

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