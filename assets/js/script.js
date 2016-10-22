//代码高亮
        var reHighlightCodeBlock = function () {
            $('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });
        };

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
var lue = function() {
	$(function () {  
        $(".p-n-previous,.p-n-next").each(function (i) {  
            var divH = $(this).height();  
            var $p = $("a", $(this)).eq(0);  
            while ($p.outerHeight() > divH) {  
                $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));  
            };  
        });  
        });  
}
lue();

//仿win 10 弹窗
	var win_tips_hide_timeout;
	win_tips = function(parm) {
		if(parm.duration == null) parm.duration = 10000;
		if(parm.clkhd == null) parm.clkhd = false;
		if(parm.act == null) parm.act = "show";
		if(parm.title == null) parm.title = "";
		if(parm.text == null) parm.text = "";
		if(parm.act == "show"){
			if($(".PopboxIn").length == 0){ //若无popbox在显示
				$("#pop-box").removeClass("PopboxOut").addClass("PopboxIn");
				$("#pop-box-icons p").removeClass().addClass(parm.icon);
				$("#pop-box-content .title").html(parm.title);
				$("#pop-box-content .secondary").html(parm.text);
				if(!parm.clkhd) win_tips_hide_timeout = setTimeout(function(){win_tips({act:"hide",duration:parm.duration})},parm.duration);
			}else{// 若已有popbox显示并且在执行隐藏计时器时先取消计时器并隐藏
				clearTimeout(win_tips_hide_timeout);
				$("#pop-box").removeClass("PopboxIn").addClass("PopboxOut");
				setTimeout(function(){
					$("#pop-box-icons p").removeClass().addClass(parm.icon);
					$("#pop-box-content .title").html(parm.title);
					$("#pop-box-content .secondary").html(parm.text);
					$("#pop-box").removeClass("PopboxOut").addClass("PopboxIn");
					if(!parm.clkhd) win_tips_hide_timeout = setTimeout(function(){win_tips({act:"hide",duration:parm.duration})},parm.duration);
				},400);	
			}	
			$(document).on('click','#pop-box',function(){
				win_tips({act:"hide"});
			});
			if(!parm.clkhd){
				$(document).on('mouseenter','#pop-box',function(){
					clearTimeout(win_tips_hide_timeout);
				});
				$(document).on('mouseleave','#pop-box',function(){
					win_tips_hide_timeout = setTimeout(function(){win_tips({act:"hide",duration:parm.duration})},parm.duration);
				});	
			}else{
				$(document).off('mouseenter','#pop-box');
				$(document).off('mouseleave','#pop-box')	
			}
		}else{
			$("#pop-box").removeClass("PopboxIn").addClass("PopboxOut");
		}
	};

	console.log('\n %c theme Leaf v2.7 %c by友人C<ihewro.com> 2016/010/19 \n\n','color:#444;background:#eee;padding:5px 0;border-top-left-radius:5px;border-bottom-left-radius:5px;', 'color:#eee;background:#444;padding:5px 0;border-top-right-radius:5px;border-bottom-right-radius:5px;');
/*希望使用本主题能够保留本行注释QWQ*/
