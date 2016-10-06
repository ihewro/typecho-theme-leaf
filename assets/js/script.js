//代码高亮
        var reHighlightCodeBlock = function () {
            $('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });
        };
		
		
//首页大图动画效果
var Leaf ={
 F: function(id, w, h) {
        var _height = $(id).parent().height(),
            _width = $(id).parent().width(),
            ratio = h / w;

        if (_height / _width > ratio) {
            id.style.height = _height +'px';
            id.style.width = _height / ratio +'px';
        } else {
            id.style.width = _width +'px';
            id.style.height = _width * ratio +'px';
        }

        id.style.left = (_width - parseInt(id.style.width)) / 2 +'px';
        id.style.top = (_height - parseInt(id.style.height)) / 2 +'px';
    }
}
var imageeffct = function(){
	$(function() {

        var cover = {};
        cover.t = $('#cover');
        cover.w = cover.t.attr('width');
        cover.h = cover.t.attr('height');

        ;(cover.o = function() {
            $('#mark').height(window.innerHeight)
        })();
        if (cover.t.prop('complete')) {
            // why setTimeout ?
            setTimeout(function() { cover.t.load() }, 0)
        }
cover.t.on('load', function() {
	 ;(cover.f = function() {

                var _w = $('#mark').width(), _h = $('#mark').height(), x, y, i, e;

                e = (_w >= 1000 || _h >= 1000) ? 1000 : 500;

                if (_w >= _h) {
                    i = _w / e * 50;
                    y = i;
                    x = i * _w / _h;
                } else {
                    i = _h / e * 50;
                    x = i;
                    y = i * _h / _w;
                }

                $('.layer').css({
                    'width': _w + x,
                    'height': _h + y,
                    'marginLeft': - 0.5 * x,
                    'marginTop': - 0.5 * y
                })

                if (!cover.w) {
                    cover.w = cover.t.width();
                    cover.h = cover.t.height();
                }

                Leaf.F($('#cover')[0], cover.w, cover.h)

            })();
			$('#mark').parallax();
})

});
}
imageeffct();

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
	}

