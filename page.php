<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="footer-clear post chinese">

  <!-- post header -->
  <div class="post-header">
    <h1 class="post-title"><?php $this->title() ?></h1>
    <p class="post-date" datetime="<?php $this->date('c'); ?>"><?php $this->date('F jS , Y'); ?></p>
  </div>

  <!-- post content -->
  <div class="post-content">
<?php $this->content(); ?>

  </div>


  <!-- disqus comment system -->
  
  <div class="post-comment">
<?php $this->need('comments.php'); ?>

  </div>
  

  <!-- footer -->
<?php $this->need('footer.php'); ?>


</div>

<!-- menu -->
<?php $this->need('menu.php'); ?>
