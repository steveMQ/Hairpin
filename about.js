(function ($){
  var BREAKPOINT = 642;
  var swappedDivs = false;

  function updateColumns() {
    var width = $(window).width();
    //check if the window is less than 642px, move the divs
    if (width < BREAKPOINT && !swappedDivs) {
      $('.about-left-sidebar').insertAfter('.about-center-content');
      swappedDivs = true;
    } else if (width >= BREAKPOINT && swappedDivs) {
      $('.about-left-sidebar').insertBefore('.about-center-content');
      swappedDivs = false;
    }
  }

  $(window).on('resize', updateColumns);
  $(document).ready(updateColumns);
})(jQuery);
