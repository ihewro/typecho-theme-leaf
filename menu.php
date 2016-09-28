<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="menu" class="vertical-center-child menu">
  <a class="transition m-iterm" href="<?php $this->options->siteUrl(); ?>">home</a>
  <a class="transition m-iterm" href="<?php Helper::options()->siteUrl()?>/archive.html">archive</a>
  <a class="transition m-iterm" href="<?php Helper::options()->siteUrl()?>/about.html">about</a>
</div>
<div id="menu-trigger" class="menu-trigger">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" version="1.1"><path class="svg-menu" d="M19.38 1L0.63 1C0.28 1 0 0.78 0 0.5 0 0.22 0.28 0 0.63 0L19.38 0C19.73 0 20 0.22 20 0.5 20 0.78 19.73 1 19.38 1L19.38 1 19.38 1ZM19.38 7L0.63 7C0.28 7 0 6.78 0 6.5 0 6.22 0.28 6 0.63 6L19.38 6C19.73 6 20 6.22 20 6.5 20 6.78 19.73 7 19.38 7L19.38 7 19.38 7ZM19.38 13L0.63 13C0.28 13 0 12.78 0 12.5 0 12.22 0.28 12 0.63 12L19.38 12C19.73 12 20 12.22 20 12.5 20 12.78 19.73 13 19.38 13L19.38 13 19.38 13ZM19.38 19L0.63 19C0.28 19 0 18.78 0 18.5 0 18.22 0.28 18 0.63 18L19.38 18C19.73 18 20 18.22 20 18.5 20 18.78 19.73 19 19.38 19L19.38 19 19.38 19Z" fill="#000000"></path></svg>

</div>

 <script type="text/javascript">
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#pjax-container',
    timeout: 8000
}).on('pjax:complete',
function() {
if ($('.ds-thread').length > 0) { if (typeof DUOSHUO !== 'undefined') DUOSHUO.EmbedThread('.ds-thread'); else $.getScript("http://www.ihewro.com/duoshuo/embedhw4.min.js"); }
})
</script>
</body>
</html>
