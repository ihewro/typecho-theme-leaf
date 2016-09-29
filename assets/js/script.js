// 目录的按钮
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


//超过div内容显示省略号
$(function () {  
        $(".p-n-previous").each(function (i) {  
            var divH = $(this).height();  
            var $p = $("a", $(this)).eq(0);  
            while ($p.outerHeight() > divH) {  
                $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));  
            };  
        });  
        });  
		