<?php
/**
 * 就如一片叶子般轻松自如吧
 * 
 * @package Leaf
 * @author ihewro
 * @version 2.8
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 <div id="pjax-container">
 <style>
	 #search {
	 display: none;
	 }
</style>
<?php if ( $this->options->Styleswitch =='1' ) : ?>
 <style>
 #nav-menu i,#nav-menu:after,#nav-menu:before {
 	background-color: #fff;
 }
 .buttons {
    margin-top: 115px;
    margin-bottom: 0px;
    text-align: center;
    -webkit-font-smoothing: antialiased;
}
.buttons a {
    letter-spacing: 1px;
    font-family: Arial;
    font-size: 18px;
    text-decoration: none;
    color: #fff;
    padding: 15px 30px;
    background: #fff;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 3px;
    margin: 0 18px;
    line-height: 60px;
}
.buttons a:hover {
    background: #f3f3f3;
    background-color: rgba(0, 0, 0, 0.5);
}
@media only screen and (max-width: 680px){
.buttons a {
    font-size: 14px;
    padding: 10px 20px;
    margin: 0 12px;
    line-height: 48px;
}
}
.index-container {
    position: absolute;
    top: 45%;
    width: 100%;
    min-width: 300px;
    height: auto;
    min-height: 200px;
    background: none;
    z-index: 80;
    transform: translateY(-50%);
}

.index-title {
    margin: 0;
    padding: 0px 0 0px 0;
    margin-bottom: 20px;
    line-height: 1.1;
    height: auto;
    text-align: center;
    text-transform: none;
    letter-spacing: 0px;
    font-family: "Microsoft YaHei", Arial, Verdana, sans-serif;
    font-size: 42px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 2px 3px rgba(0, 0, 0, 0.3);
}
.content2 {
	text-shadow: 1px 2px 3px rgba(0, 0, 0, 0.3);
    letter-spacing: 1px;
    -webkit-font-smoothing: subpixel-antialiased;
    text-align: center;
    color: #fff;
}
.p_part p {
    margin: 0;
}
.index-contacts {
    padding: 0px;
    height: auto;
    text-align: center;
}
.p_part {
    width: 60%;
    margin: 0 auto;
}
 </style>
<?php endif; ?>

<?php if (!empty($this->options->indexsetup) && in_array('IndexImage', $this->options->indexsetup)) : ?>
<?php else : ?>
<style>
#cover {
    position: relative;
    max-width: 100%;
    height: 100%;
    background-attachment: fixed;
    background-size: cover;
	background-position: center center;
}
</style>
<?php endif ;?>
<style>
 #nav-menu i,#nav-menu:after,#nav-menu:before {
 	background-color: #fff;
 }
</style>
<script>
<?php if (!empty($this->options->indexsetup) && in_array('IndexImage', $this->options->indexsetup)): ?>
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
<?php endif; ?>
	
//首页搜索	
$(function(){
var $searchbox = $("#search");
//$searchbox.hide();
$("#search-Button").bind("click",function(event){
	event.preventDefault();
	if($searchbox.is(":visible")){
		$searchbox.fadeOut(100);
	}
	else{
		$searchbox.fadeIn(100);
	}
	
});
});


$(".index-title").click(function(){	
	win_tips({title:'这是第1个彩蛋',text:'你开启了一扇秘密的门！一共5个彩蛋藏在整个网站里面┗|｀O′|┛ 嗷~~',duration:4000,icon:'fa fa-heart'});
})


</script>
<div class="index">
<div id="zhezhao">
</div>
<?php if (!empty($this->options->indexsetup) && in_array('IndexImage', $this->options->indexsetup)): ?>
<div id="screen">
	<div id="mark">
 		<div class="layer" data-depth="<?php $this->options->parallaxeffect();?>">
<?php if (!empty($this->options->indexsetup) && in_array('Indexrandombackground', $this->options->indexsetup)): ?>
               <img id="cover" src="<?php echo randombackground($this); ?>" />
<?php else: ?>
               <img id="cover" src="<?php $this->options->indeximage(); ?>" /> 
<?php endif ?>
		</div>
	</div>
</div>
<?php else : ?>
<div id="cover" style="background-image:url(<?php echo randombackground($this); ?>)"></div>
<?php endif ;?>

<?php if ( $this->options->Styleswitch =='0' ) : ?>
 <div id="style0">
  <div class="vertical-center-child index-container">
    <h1 class="index-title"><?php $this->options->IndexName(); ?></h1>
    <div class="index-contacts">
		<?php if ($this->options->socialgithub): ?>
			<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">
				<i class="fa fa-github-alt"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialmail): ?>
			<a class="social envelope" href="<?php $this->options->socialmail(); ?>">
				<i class="fa fa-envelope"></i>
			</a>
		<?php endif; ?>
			<a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">
				<i class="fa fa-rss"></i>
			</a>
		<?php if ($this->options->socialbook): ?>
			<a class="social book" target="blank" href="<?php $this->options->socialbook(); ?>">
				<i class="fa fa-book"></i>
			</a>
		<?php endif; ?>
			<a class="social search" id="search-Button" target="blank" href="<?php $this->options->socialweibo(); ?>">
				<i class="fa fa-search"></i>
			</a>
            <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="./" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input id="search-text" type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" id="search-submit" class="submit fa fa-search"></button>
                </form>
            </div>
    </div>
</div>
  </div>
<?php elseif($this->options->Styleswitch == '1'): ?>
<div id="style1">
  <div class="vertical-center-child index-container">
    <h1 class="index-title"><?php $this->options->IndexName(); ?></h1>
<div class="content2">
<div class="p_part"><p><?php $this->options->IndexIntroduction(); ?></p>
</div>
</div>
    <div class="index-contacts">
<div class="buttons">
<?php if ($this->options->socialmail): ?>
<a href="<?php $this->options->socialmail(); ?>">My Email</a>
<?php endif; ?>
<?php if ($this->options->socialgithub): ?>
<a href="<?php $this->options->socialgithub(); ?>" target="_blank" >My Github</a>
<?php endif; ?>
</div>
    </div>
</div>
  </div>
<?php endif; ?>



</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>

