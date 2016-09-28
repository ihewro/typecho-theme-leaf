<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * about-me
 *
 * @package custom
 */
$this->need('header.php'); ?>
<div id="pjax-container">
<div class="footer-clear vertical-center-child about">

  <p><?php $this->content(); ?></p>

  <!-- footer -->
<?php $this->need('footer.php'); ?>

  
</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>