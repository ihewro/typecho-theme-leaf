<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()) { ?>

<div id="menu" class="vertical-center-child menu">
  <a class="transition m-iterm" href="<?php $this->options->siteUrl(); ?>">home</a>
  <a class="transition m-iterm" href="<?php Helper::options()->siteUrl()?>archive.html">archive</a>
  <a class="transition m-iterm" href="<?php Helper::options()->siteUrl()?>about.html">about</a>
</div>
<div id="menu-trigger" class="menu-trigger">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" version="1.1"><path class="svg-menu" d="M19.38 1L0.63 1C0.28 1 0 0.78 0 0.5 0 0.22 0.28 0 0.63 0L19.38 0C19.73 0 20 0.22 20 0.5 20 0.78 19.73 1 19.38 1L19.38 1 19.38 1ZM19.38 7L0.63 7C0.28 7 0 6.78 0 6.5 0 6.22 0.28 6 0.63 6L19.38 6C19.73 6 20 6.22 20 6.5 20 6.78 19.73 7 19.38 7L19.38 7 19.38 7ZM19.38 13L0.63 13C0.28 13 0 12.78 0 12.5 0 12.22 0.28 12 0.63 12L19.38 12C19.73 12 20 12.22 20 12.5 20 12.78 19.73 13 19.38 13L19.38 13 19.38 13ZM19.38 19L0.63 19C0.28 19 0 18.78 0 18.5 0 18.22 0.28 18 0.63 18L19.38 18C19.73 18 20 18.22 20 18.5 20 18.78 19.73 19 19.38 19L19.38 19 19.38 19Z" fill="#000"></path></svg>
</div>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/script.js'); ?>"></script>
<script src='<?php $this->options->themeUrl('assets/js/nprogress.js'); ?>'></script>
<link rel='stylesheet' href='<?php $this->options->themeUrl('assets/css/nprogress.css'); ?>'/>


<!--Qpalyer author:https://32mb.space-->
<div id="QPlayer">
<div id="pContent">
	<div id="player">
		<span class="cover"></span>
		<div class="ctrl">
			<div class="musicTag marquee">
				<strong>Title</strong>
				 <span> - </span>
				<span class="artist">Artist</span>
			</div>
			<div class="progress">
				<div class="timer left">0:00</div>
				<div class="contr">
					<div class="rewind icon"></div>
					<div class="playback icon"></div>
					<div class="fastforward icon"></div>
				</div>
				<div class="right">
					<div class="liebiao icon"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="ssBtn">
	        <div class="adf"></div>
    </div>
</div>
<ol id="playlist"></ol>
</div>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/jquery.marquee.min.js'); ?>"></script>
<script>
	var	playlist = [
{title:"晚安；）",artist:"性人盒",mp3:"http://7xlk7n.com1.z0.glb.clouddn.com/wanan.mp3",cover:"http://p4.music.126.net/nz1ZXXSYg85COLFURrJodw==/7975857349674458.jpg",},
{title:"远山",artist:"末小皮",mp3:"http://7xlk7n.com1.z0.glb.clouddn.com/%E8%BF%9C%E5%B1%B1.mp3",cover:"http://p3.music.126.net/BceFKRe6K1aMsnu1QTFBYw==/8978611952438381.jpg",},
];
  var isRotate = true;
  var autoplay = false;
</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/player.js'); ?>"></script>
<script>

function bgChange(){
	var lis= $('.lib');
	for(var i=0; i<lis.length; i+=2)
	lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
}
window.onload = bgChange;
</script>
<!--Qpalyer end!-->






<script>
//pjax 刷新

$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#pjax-container',
    timeout: 8000
}).on('pjax:send',
function() {
    NProgress.start();
	
}).on('pjax:complete',
function() {
NProgress.done();
//linkshow();
if ($('.ds-thread').length > 0) { if (typeof DUOSHUO !== 'undefined') DUOSHUO.EmbedThread('.ds-thread'); else $.getScript("http://www.ihewro.com/duoshuo/embedhw4.min.js"); }
});

</script>

<script>
/*
var $content = $("#friends");
$content.hide();
function linkshow(){
$(function(){
$("#friend-head").bind("click",function(){
	if($content.is(":visible")){
		$content.fadeOut();
	}
	else{
		$content.fadeIn();
	}
})
});
}
linkshow();*/
</script>
</body>
</html>
<?php } ?>
