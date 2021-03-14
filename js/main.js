'use strict';
{
  jQuery(function () {
    jQuery('.menu-btn, #mask').on('click', function () {
      jQuery('.menu-btn, #nav, #mask').toggleClass('open');
    });
  });
}
