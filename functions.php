<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	//首页设置开关
    $indexsetup = new Typecho_Widget_Helper_Form_Element_Checkbox('indexsetup', 
    array('IndexImage' => _t('启用首页图片摇动效果'),
    'Indexrandombackground' => _t('启用首页随机显示背景图片')),
    array('IndexImage', 'Indexrandombackground'), _t('首页设置开关'));
    
    $form->addInput($indexsetup->multiMode());
	
	//首页文字
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, 'Friend C', _t('首页的英文字母'), _t('输入你喜欢的一行文字吧，不要太长哦，否则就不好看啦'));
	$form->addInput($IndexName);
	
	//首页介绍文字
	$IndexIntroduction = new Typecho_Widget_Helper_Form_Element_Text('IndexIntroduction', NULL, '我们笑着说再见，却深知再见遥遥无期。', _t('首页的一行介绍文字'), _t('在这里输入字母，不要太长'));
	$form->addInput($IndexIntroduction);
	
	//首页图标

	$socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, 'https://github.com/ihewro', _t('输入GitHub链接'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialbook = new Typecho_Widget_Helper_Form_Element_Text('socialbook', NULL,'http://diary.ihewro.com/', _t('输入另一个博客的地址'), _t('在这里输入另一个博客链接,带http://'));
	$form->addInput($socialbook);
	$socialmail = new Typecho_Widget_Helper_Form_Element_Text('socialmail', NULL, 'mailto:ihewro@163.com', _t('输入邮箱地址'), _t('在这里输邮箱地址,如mailto:ihewro@163.com'));
	$form->addInput($socialmail);
	//首页图片
	$indeximage = new Typecho_Widget_Helper_Form_Element_Text('indeximage', NULL, 'http://www.ihewro.com/pic/wall.jpeg', _t('输入图片地址'), _t('在这里输入首页大图地址，建议不超过500k,否则加载时间太长影响显示效果'));
	$form->addInput($indeximage);
	
	//配置parallax插件的摇动效果程度
    $parallaxeffect = new Typecho_Widget_Helper_Form_Element_Text('parallaxeffect',NULL, '0.2','配置首页图片摇动程度', '填写前请保证上面的选项被勾中。<br><font color="#F40">注意：</font>最大为1,0为静止效果，请填写一个0~1之间的两位小数');
    $parallaxeffect->input->setAttribute('class', 'mini');
    $form->addInput($parallaxeffect);
		
	//配置多说
    $duoshuosn = new Typecho_Widget_Helper_Form_Element_Text('duoshuosn',NULL, 'hewro','配置多说short_name', '填写你的多说评论的short_name，使博客的评论系统可用,不填则不启用多说，包括不加载多说js与css<br><font color="#F40">注意：</font>这里的多说css都是主题内置好的，所以多说自定义css里的css最好清空，否则会有不美观的现象发生.<br>博主认证必须修改aseets/css/duoshuo.min.css的博主ID');
    $duoshuosn->input->setAttribute('class', 'mini');
    $form->addInput($duoshuosn);
	//多说风格切换
	
    $duoshuoStyleswitch = new Typecho_Widget_Helper_Form_Element_Radio('duoshuoStyleswitch', 
        array(
            '0' => _t('disqus风格 &emsp;'),
            '1' => _t('轻简约风格 &emsp;')
        ),
        //Default choose
        '0',_t('多说风格切换'),_t("两款风格都比较简约，disqus风格看起来要稍微厚重一点")
    );
    
    $form->addInput($duoshuoStyleswitch->multiMode());	
	//风格切换
	
    $Styleswitch = new Typecho_Widget_Helper_Form_Element_Radio('Styleswitch', 
        array(
            '0' => _t('虚幻风格 &emsp;'),
            '1' => _t('质感风格 &emsp;')
        ),
        //Default choose
        '1',_t('主题风格切换'),_t("根据你的背景图片选择你喜欢的风格吧。我更喜欢质感风格哦")
    );
    
    $form->addInput($Styleswitch->multiMode());
	
	
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
	
	//播放器音乐
	$musiclist = new Typecho_Widget_Helper_Form_Element_Textarea('musiclist', NULL,'{title:"晚安；）",artist:"性人盒",mp3:"http://7xlk7n.com1.z0.glb.clouddn.com/wanan.mp3",cover:"http://p4.music.126.net/nz1ZXXSYg85COLFURrJodw==/7975857349674458.jpg",},
{title:"远山",artist:"末小皮",mp3:"http://7xlk7n.com1.z0.glb.clouddn.com/%E8%BF%9C%E5%B1%B1.mp3",cover:"http://p3.music.126.net/BceFKRe6K1aMsnu1QTFBYw==/8978611952438381.jpg",},', _t('音乐播放器的音乐列表'), _t('根据已给的格式填入你的HTML代码'));
	$form->addInput($musiclist);
	
}/*后台设置结束*/

// pjax判断

function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}

//随机输出首页图片
function randombackground($widget)
{ 
    $rand = rand(1,25); // 随机 25 张背景大图

    $random = $widget->widget('Widget_Options')->themeUrl . '/assets/img/background/' . $rand . '.jpg'; // 随机缩略图路径
    //正则匹配 主题目录下的/img/background/的图片（以数字按顺序命名）

return $random;
}
