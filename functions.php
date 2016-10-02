<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig(Typecho_Widget_Helper_Form $form) {
	
	//首页文字
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, 'Leaf Hewro', _t('首页的英文字母'), _t('在这里输入字母，不要太长'));
	$form->addInput($IndexName);
	
	//首页图标
	$socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('输入微博链接'), _t('在这里输入微博链接,带http://'));
	$form->addInput($socialweibo);
	$socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入GitHub链接'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('输入Twitter链接'), _t('在这里输入twitter链接,带http://'));
	$form->addInput($socialtwitter);
	$socialgoogle = new Typecho_Widget_Helper_Form_Element_Text('socialgoogle', NULL, NULL, _t('输入Google +链接'), _t('在这里输入Google +链接,带http://'));
	$form->addInput($socialgoogle);
	//首页图片
	$indeximage = new Typecho_Widget_Helper_Form_Element_Text('indeximage', NULL, 'http://www.ihewro.com/pic/wall1.jpg', _t('输入图片地址'), _t('在这里输入首页大图地址，建议不超过1M'));
	$form->addInput($indeximage);
	//底部友链HTML代码
	$links = new Typecho_Widget_Helper_Form_Element_Textarea('links', NULL,'<a href="http://www.wecho.cc/" class="link" target="_blank">SNlone</a><i>/</i>
<a href="http://caisiduo.xyz/" class="link" target="_blank">CAISIDUO</a><i>/</i>
<a href="http://sqiu.me/" class="link" target="_blank">三秋</a><i>/</i>
<a href="https://hran.me/" class="link" target="_blank">hran</a>  <i>/</i>
<a href="http://techair.cc/" class="link" target="_blank">飞翔的技术宅</a><i>/</i>
<a href="http://fyzgxy.cn/" class="link" target="_blank">雷的窝</a><i>/</i>
<a href="https://www.dreamwings.cn/" class="link" target="_blank">千千</a><i>/</i>
<a href="http://czduban.com/" class="link" target="_blank">以歌</a><i>/</i>
<a href="http://yufanboke.top/" class="link" target="_blank">yufan</a><i>/</i>
<a href="https://quericy.me/" class="link" target="_blank">quericy</a><i>/</i>
<a href="https://mist.ink/" class="link" target="_blank">十四行詩</a><i>/</i>
<a href="http://ryli.pw/" class="link" target="_blank">RY</a><i>/</i>
<a href="https://blog.timelovelife.com/" class="link" target="_blank">Jackrabbit</a><i>/</i>
<a href="http://www.4zen.top/" class="link" target="_blank">1900</a>', _t('友链样式的HTML代码'), _t('填入你的HTML代码'));
	$form->addInput($links);

}


// pjax判断

function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}