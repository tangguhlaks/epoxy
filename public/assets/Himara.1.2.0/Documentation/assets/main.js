
jQuery.noConflict()(function($) {
  $(document).ready(function() {
    'use strict';

    $('body').scrollspy({
      target: '#sidebar-scrollspy-nav',
      offset: 55
    });

    $('#sidebar-nav').affix({
      offset: {
        top: function() {
          return (this.top = $('#docs-header').outerHeight(true) + $('#docs-heading-section').outerHeight(true));
        },
        bottom: function() {
          return (this.bottom = $('#docs-footer').outerHeight(true));
        }
      }
    });
        $(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 10
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    });


  });
});
