export default {
  init() {
    // JavaScript to be fired on all pages
    const banner = $('.banner');

    $(window).scroll(function () { 
      if ($(window).scrollTop() > 20) { 
        banner.addClass('scrolled');
      } else {
        banner.removeClass('scrolled');
      }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
