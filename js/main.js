'use strict';
{
  jQuery(function () {
    $('.menu-btn, #mask').on('click', function () {
      $('.menu-btn, #nav, #mask').toggleClass('open');
    });
  });
}
