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
<div class="footer-clear vertical-center-child about">

  <p>Page Not Found</p>

  <!-- footer -->
<?php $this->need('footer.php'); ?>

  
</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>