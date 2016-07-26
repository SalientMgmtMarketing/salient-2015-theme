(function (document, window, $, undefined) {
  'use strict';

  var $tabWidget = $('.slides-container.multi'),
    $tabWidgetIndex = 1,

    tabClick = function ($thisTab, $allTabs, $tabPanels, i) {
      $allTabs
        .attr({
          'tabindex': -1,
          'aria-selected': 'false'
        })
        .removeAttr('aria-describedby')
        .removeClass('tab-widget__link--active');

      $thisTab
        .attr({
          'tabindex': 0,
          'aria-selected': 'true',
          'aria-describedby': 'tab-widget-description'
        })
        .addClass('tab-widget__link--active');

      $tabPanels
        .attr('aria-hidden', 'true')
        .removeClass('tab-widget__tab-content--active');

      $tabPanels.eq(i)
        .attr('aria-hidden', 'false')
        .addClass('tab-widget__tab-content--active');
    },

    tabKeydown = function ($thisTab, $allTabs, $tabPanels, $tabListItems, i, e) {
      var keyCode = e.which,
        $nextTab = $thisTab.parent().next().is('li') ? $thisTab.parent().next().find('a') : false,
        $previousTab = $thisTab.parent().prev().is('li') ? $thisTab.parent().prev().find('a') : false,
        $firstTab = $thisTab.parent().parent().find('li:first').find('a'),
        $lastTab = $thisTab.parent().parent().find('li:last').find('a');

      switch (keyCode) {
        // Left/Up
      case 37:
      case 38:
        e.preventDefault();
        e.stopPropagation();

        if (!$previousTab) {
          $lastTab.focus();
        } else {
          $previousTab.focus();
        }

        break;

        // Right/Down
        case 39:
        case 40:
        e.preventDefault();
        e.stopPropagation();

        if (!$nextTab) {
          $firstTab.focus();
        } else {
          $nextTab.focus();
        }

        break;

        // Home
      case 36:
        e.preventDefault();
        e.stopPropagation();

        $firstTab.focus();

        break;

        // End
      case 35:
        e.preventDefault();
        e.stopPropagation();

        $lastTab.focus();

        break;

        // Enter/Space
      case 13:
      case 32:
        e.preventDefault();
        e.stopPropagation();

        break;
      }
    },

    setupTabs = function ($tab, $allTabs, $tabPanels, $tabListItems, i) {
      $tab
        .attr({
          'href': '#tab-panel-' + i + $tabWidgetIndex,
          'id': 'tab-link-' + i + $tabWidgetIndex,
          'tabindex': '-1',
          'role': 'tab',
          'aria-selected': 'false',
          'aria-controls': 'tab-panel-' + i + $tabWidgetIndex
        });

      if (i === 0) {
        $tab
          .attr({
            'tabindex': '0',
            'aria-selected': 'true',
            'aria-describedby': 'tab-widget-description'
          })
          .addClass('tab-widget__link--active');
      }

      $tab.on('click', function (e) {
        e.preventDefault();

        tabClick($(this), $allTabs, $tabPanels, i);
      });

      $tab.on('focus', function (e) {
        tabClick($(this), $allTabs, $tabPanels, i);
      });

      $tab.on('keydown', function (e) {
        tabKeydown($(this), $allTabs, $tabPanels, $tabListItems, i, e);
      });
    },
    setupTabPanels = function (tabPanel, i) {
      tabPanel
        .attr({
          'id': 'tab-panel-' + i + $tabWidgetIndex,
          'role': 'tabpanel',
          'aria-hidden': 'true',
          'aria-labelledby': 'tab-link-' + i + $tabWidgetIndex
        });

      if (i === 0) {
        tabPanel
          .attr('aria-hidden', 'false')
          .addClass('tab-widget__tab-content--active');
      }
    };


  $tabWidget.each(function () {
    var $this = $(this),
      $tabList = $this.find('> nav > ul'),
      $tabListItems = $tabList.find('li'),
      $allTabs = $tabListItems.find('a'),
      $tabPanels = $this.find('> div');

    $tabList.attr('role', 'tablist');
    $tabListItems.attr('role', 'presentation');

    $allTabs.each(function (i) {
      setupTabs($(this), $allTabs, $tabPanels, $tabListItems, i);
    });

    $tabPanels.each(function (i) {
      setupTabPanels($(this), i);
    });

  });
  
  $tabWidget.each(function () {
    $tabWidgetIndex = $tabWidgetIndex + 1;
  });

  $('html').addClass('js').removeClass('no-js');

}(document, window, jQuery));