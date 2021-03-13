'use strict';
{
  $(function() {
    $('.menu-btn, #mask').on('click', function () {
      $('.menu-btn, #nav, #mask').toggleClass('open');
    });
  });
}
