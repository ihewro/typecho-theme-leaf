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

  <div id="me-words"><?php $this->content(); ?></div>

  <!-- footer -->
<?php $this->need('footer.php'); ?>

  
</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>