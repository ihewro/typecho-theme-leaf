<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
               <img id="cover" />
		</div>
	</div>
</div>
<?php if ($this->have()): ?>
<div class="footer-clear post archive">
  <!-- post header -->
  <div class="post-header">
    <h1 class="post-title" itemprop="name headline"><?php $this->archiveTitle(array(
                'category'  =>  _t('- %s -'),
                'search'    =>  _t('- %s -'),
                'tag'       =>  _t('- %s -'),
                'author'    =>  _t('- %s -')
            ), '', ''); ?></h1>
    <p class="post-date"></p>
  </div>

  <!-- post content -->
      
   <?php while($this->next()): ?>
      <a class="transition archive-iterm" href="<?php $this->permalink() ?>"><h3 class="archive-title"><?php $this->title() ?></h3><p class="archive-date"><?php $this->date('F jS , Y'); ?></p></a>
 <?php endwhile; ?>
 
  <?php else: ?>
<div class="footer-clear vertical-center-child about">

  <p>没有搜索结果！</p>
  
</div>
  <?php endif; ?>
   
  <?php $this->pageNav(); ?>


  <!-- footer -->
    <?php $this->need('footer.php'); ?>
</div>
</div>

<!-- menu -->
	<?php $this->need('menu.php'); ?>
