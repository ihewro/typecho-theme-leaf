<?php
/**
 * 就如一片叶子般轻松自如吧
 * 
 * @package Leaf
 * @author ihewro
 * @version 2.1
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 <div id="pjax-container">
 <style>
 i.fa.fa-bars {
    color: #fff;
}
 </style>
 
<div class="index">
<div id="screen">
	<div id="mark">
 		<div class="layer" data-depth="0.20">
               <img id="cover" src="<?php $this->options->indeximage(); ?>" />
		</div>
	</div>
</div>
  <div class="vertical-center-child index-container">


    <h1 class="index-title"><?php $this->options->IndexName(); ?></h1>

    <div class="index-contacts">
		<?php if ($this->options->socialgithub): ?>
			<a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>">
				<i class="fa fa-github-alt"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialgoogle): ?>
			<a class="social google-plus" target="blank" href="<?php $this->options->socialgoogle(); ?>">
				<i class="fa fa-google-plus"></i>
			</a>
		<?php endif; ?>
			<a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/">
				<i class="fa fa-rss"></i>
			</a>
		<?php if ($this->options->socialtwitter): ?>
			<a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>">
				<i class="fa fa-twitter"></i>
			</a>
		<?php endif; ?>
		<?php if ($this->options->socialweibo): ?>
			<a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>">
				<i class="fa fa-weibo"></i>
			</a>
		<?php endif; ?>
    </div>


  </div>
</div>
<!--首页大图动态效果-->
<script src='<?php $this->options->themeUrl('assets/js/jquery.parallax.js'); ?>'></script>

<script>

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
var imageeffct = function() {


    var cover = {};
    cover.t = $('#cover');
    cover.w = cover.t.attr('width');
    cover.h = cover.t.attr('height');

    ; (cover.o = function() {
        $('#mark').height(window.innerHeight)
    })();

    ; (cover.f = function() {

        var _w = $('#mark').width(),
        _h = $('#mark').height(),
        x,
        y,
        i,
        e;

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
            'marginLeft': -0.5 * x,
            'marginTop': -0.5 * y
        })

        if (!cover.w) {
            cover.w = cover.t.width();
            cover.h = cover.t.height();
        }
                Leaf.F($('#cover')[0], cover.w, cover.h);

    })();

    $('#mark').parallax();
}
imageeffct();
</script>
</div>

<!-- menu -->
<?php $this->need('menu.php'); ?>

