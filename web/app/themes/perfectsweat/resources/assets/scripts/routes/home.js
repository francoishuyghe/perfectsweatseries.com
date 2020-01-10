export default {
  init() {
    // JavaScript to be fired on the home page
    
    //Parallax effect
    $(window).scroll(function () { 
      let scroll = $(window).scrollTop();
      let ratio = scroll / $(window).innerHeight();
      $('.parallax').each(function () { 
        let depth = 500 * $(this).data('depth');
        $(this).css('transform', 'translateY(-' + depth * ratio + 'px)')
      });
      $('#top img').css('opacity', 1 - 2 * ratio)
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
