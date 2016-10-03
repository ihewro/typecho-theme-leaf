<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 未加载functions.php则自动加载
 * 防止因404报错
 */
if(!function_exists('getReadMode')) include_once('functions.php');
?>
<?php $this->need('header.php'); ?>
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

  <p>Page Not Found</p>

  <!-- footer -->
<?php $this->need('footer.php'); ?>

  
</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>