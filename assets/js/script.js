$(document).ready(function() {
  var init = {
    load: function() {
      $(window).load(function() {
        $("body").addClass("loaded");
      });
    },

    trigger: function() {
      var $target= $("#menu");
      $("#menu-trigger").click(function() {
        $target.addClass("clicked");
      });
      $target.click(function() {
        $target.removeClass("clicked");
      });
    },

    start: function() {
      this.load();
      this.trigger();
    }
  }
  init.start();
});
