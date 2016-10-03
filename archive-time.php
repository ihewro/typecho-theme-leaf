<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * archive-time
 *
 * @package custom
 */
$this->need('header.php'); ?>


<div id="pjax-container">

<div class="footer-clear archive">

  
 <?php
					$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
				    $year=0; $i=0; $j=0;
				    while($archives->next()):
				        $year_tmp = date('Y',$archives->created);
				        $y=$year;
				        if ($year != $year_tmp && $year > 0) $output .= '<div></div>';
				        if ($year != $year_tmp) {
				            $year = $year_tmp;
				            $output = '<h2 class="archive-year">'. $year .'</h2>';
				        }
				        $output .= '<a class="transition archive-iterm" href="'.$archives->permalink .'"><h3 class="archive-title">'. $archives->title .'</h3><p class="archive-date">'.date('F jS ',$archives->created).'</p></a>';
				    endwhile;
				    
				    echo $output;
				?>
  
  

  <!-- footer -->
    <?php $this->need('footer.php'); ?>


</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>