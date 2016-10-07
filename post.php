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

  <!-- post navigator -->
  <div class="post-nav">

    
    <span class="p-n-sep">
      <svg id="egg4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 487.38 487.38" version="1.1"><path d="M293.86 13.18c-11.52 13.29-23.54 31.85-31.74 57.1 0 0-8.41-24.2 6.92-48.13 -14.43 13.04-32.76 35.13-43.97 69.66 0 0-10.31-29.88 13.06-56.07 -0.44 0.23-0.89 0.45-1.33 0.67 -38.9 19.82-64.12 59.3-65.7 102.92 0 0.03 0 0.07 0 0.1 0 0-17.89-25.49-3.22-56.79 -0.01 0.01-0.02 0.02-0.02 0.02 -16.58 14.37-28.07 33.48-33.04 54.85 -2.27 9.76-3.83 20.63-4.26 32.65 0 0-11.2-16.05-8.58-38.26 -0.01 0.02-0.03 0.03-0.04 0.05 -8.43 11.45-15.68 22.77-21.82 33.87 -9.76 17.64-9.82 39.15-0.12 56.83l0 0c0 0-9.69-4.44-18.45-14.89 -17.42 52.6-9.46 96.3 12.53 118.28 2.15 2.15 4.61 4.2 7.27 6.15 -16.35 51.38-21.45 100.23-6.1 155.19 18.33-91.51 23.9-167.09 133.51-323.02 -31 55.94-60.45 119.89-79.72 183.74 40.7 1.88 93.12-20.78 137-98.36 50.69-89.63 30.84-189.89 129.31-244.97C384.01-3.66 340.04-0.94 293.86 13.18z"></path></svg>

    </span>
    

    
                <span class="p-n-previous">上一篇：<?php $this->theNext('%s','没有了'); ?></span>
                <span class="p-n-next">下一篇：<?php $this->thePrev('%s','没有了'); ?></span>    

  </div>
  
  <!-- disqus comment system -->
  
  <div class="post-comment">
<?php $this->need('comments.php'); ?>

  </div>
  

  <!-- footer -->
<?php $this->need('footer.php'); ?>


</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>
