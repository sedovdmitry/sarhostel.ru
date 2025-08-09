(function($) {

$.fn.picorner = function(options) {
  var opts = $.extend({}, $.fn.picorner.defaults, options);

  return this.each(function(i) {
    var $this = $(this);


    var o = $.meta ? $.extend({}, opts, $this.data()) : opts;

    $this.wrap('<div class="icorner_wrap writer'+i+'"></div>');
    $('.writer'+i).append('<div class="t_left"></div><div class="t_right"></div><div class="b_left"></div><div class="b_right"></div>');
  });


  function debug($obj) {
    if (window.console && window.console.log) {
      window.console.log($obj);
    }
  }
};


$.fn.picorner.defaults = {
  defaultOne:true,
  defaultTwo:false,
};

})(jQuery);