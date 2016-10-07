<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * archive-time
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
               <img id="cover" />
		</div>
	</div>
</div>
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
				        $output .= '<li><a class="transition archive-iterm" href="'.$archives->permalink .'"><h3 class="archive-title">'. $archives->title .'</h3><p class="archive-date">'.date('F jS ',$archives->created).'</p></a></li>';
				    endwhile;
				    
				    echo $output;
				?>
  
  
<div id="pager" class="showmore">
<a href="http://ihewro.com"><span>全部文章</span></a>
</div>

<script>
$(function(){//等待DOM加载完成


var $category =  $("li:gt(<?php $this->options->archivenumber(); ?>)");
$category.hide();

var $toggleBtn = $('div.showmore >a');

$toggleBtn.click(function(){
	if($category.is(":visible"))
	{
		$category.hide();
		$(this).find('span').text("全部文章");
	}else{
		$category.show();
		$(this).find('span').text("部分文章");
	}
	
	return false;
});

})
</script>
  <!-- footer -->
    <?php $this->need('footer.php'); ?>


</div>
</div>
<!-- menu -->
<?php $this->need('menu.php'); ?>