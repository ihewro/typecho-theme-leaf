<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * about-me
 *
 * @package custom
 */
$this->need('header.php'); ?>


<div id="pjax-container">
<style>
#screen{
	display:none;
}
</style>
<div id="screen">
	<div id="mark">
 		<div class="layer" data-depth="0.20">
               <img id="cover" src="http://isujin.com/wp-content/uploads/2016/04/wallhaven-212380.jpg" />
		</div>
	</div>
</div>
<div class="footer-clear vertical-center-child about">

  <div id="me-words"><?php $this->content(); ?></div>

  <!-- footer -->
<?php $this->need('footer.php'); ?>

  
</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>