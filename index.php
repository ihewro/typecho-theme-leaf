<?php
/**
 * 就如一片叶子般轻松自如吧
 * 
 * @package Leaf
 * @author ihewro
 * @version 2.4
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 <div id="pjax-container">
 <style>
 #nav-menu i,#nav-menu:after,#nav-menu:before {
 	background-color: #fff;
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
		<?php if ($this->options->socialmail): ?>
			<a class="social envelope" target="blank" href="<?php $this->options->socialmail(); ?>">
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
<script>
//首页搜索


	
	var $searchbox = $("#search");
	$searchbox.hide();
$(function(){
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
	win_tips({title:'这是第1个彩蛋',text:'你开启了一扇秘密的门！一共5个彩蛋藏在整个网站里面┗|｀O′|┛ 嗷~~',duration:10000,icon:'fa fa-heart'});
})
</script>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>

