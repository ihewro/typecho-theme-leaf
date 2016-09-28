<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<html>
 <head></head>
 <body>
  <div class="wrapper {{pageClass}}" ng-controller="MainCtrl" ng-class="{'page-is-loading': pageLoading}">
   <div class="header" ng-if="lang != 'en' &amp;&amp; lang != 'jp'" route-change-reset-header="" mobile-device="">
    <div class="header-main">
     <div class="container">
      <h1 class="logo"><a href="http://www.smartisan.com/#/home">Smartisan</a></h1>
      <div class="nav">
       <div class="view">
        <ul class="nav-main" ng-hide="topbarIsStore">
         <li ng-class="{'active':appHeader=='index'}"><a href="http://www.smartisan.com/#/shop">在线商城</a></li>
         <li ng-class="{'active':appHeader=='t2'}"><a href="http://www.smartisan.com/t2/">Smartisan T2</a></li>
         <li ng-class="{'active':appHeader=='jianguo'}"><a href="http://www.smartisan.com/jianguo/">坚果手机</a></li>
         <li ng-class="{'active':appHeader=='os'}"><a href="http://www.smartisan.com/os/">Smartisan OS</a></li>
         <li><a href="https://cloud.smartisan.com/" target="_blank">欢喜云</a></li>
         <li ng-class="{'active':appHeader=='apps'}"><a href="http://www.smartisan.com/apps/">应用下载</a></li>
         <li><a href="http://bbs.smartisan.com/forum.php" target="_blank">官方论坛</a></li>
        </ul>
        <ul class="nav-main nav-main-store" ng-class="{'nav-main-store-show': topbarIsStore}">
         <li><a href="{{indexPathName}}#/shop">在线商城</a></li>
         <li><a href="{{storePathName}}#/t2">Smartisan T2</a></li>
         <li><a href="{{storePathName}}#/jianguo">坚果手机</a></li>
         <li><a href="{{storePathName}}#/category/?id=60">耳机 / 音箱</a></li>
         <li><a href="{{storePathName}}#/category/?id=61">背壳 / 保护套</a></li>
         <li><a href="{{storePathName}}#/hd/qinghuai">“情怀”背壳</a></li>
         <li><a href="{{storePathName}}#/category/?id=59">其他周边</a></li>
         <li><a href="http://m.store.smartisan.com/#/insurance/information" data-close="true">保修服务</a></li>
         <li><a href="{{storePathName}}#/category/?id=62">全部商品</a></li>
        </ul>
        <ul class="nav-sub" ng-hide="topbarIsStore">
         <li><a class="btn btn-cdkey" href="http://www.smartisan.com/#/cdkey">优先购买码</a></li>
         <li><a class="btn btn-service" href="http://store.smartisan.com/#/warranty/agreement">购买意外保</a></li>
         <li><a class="btn btn-service" href="http://www.smartisan.com/special/#/enterprise">企业定制</a></li>
         <li><a class="btn btn-service" href="http://store.smartisan.com/#/huanxin">旧机换 T2</a></li>
        </ul>
        <ul class="nav-sub nav-sub-store" ng-show="topbarIsStore">
         <li><a class="btn btn-cdkey" href="#/cdkey">优先购买码</a></li>
         <li><a class="btn" href="http://www.smartisan.com/os/">Smartisan OS</a></li>
         <li><a class="btn" href="http://www.smartisan.com/apps/">应用下载</a></li>
         <li><a class="btn" href="http://bbs.smartisan.com/forum.php" target="_blank">官方论坛</a></li>
        </ul>
        <div class="account-panel">
         <a class="nav-login" ng-class="{'show': isLoggedIn === false}" ng-click="login()">登录</a>
         <div class="account-label" ng-class="{'show': isLoggedIn === true}">
          <span class="account-avatar"></span> 
          <a href="http://store.smartisan.com/account/" class="account-link">个人中心</a>
          <div class="account-menu">
           <div class="menu-avatar">
            <span ng-if="!loginUser.avatar_url"></span> 
            <img ng-if="loginUser.avatar_url" ng-src="{{loginUser.avatar_url}}" class="nav-avatar" />
           </div>
           <div class="account-name hide-row">
            {{!!loginUser.nickname ? loginUser.nickname : loginUser.cellphone}}
           </div>
           <ul>
            <li class="order-list"><a href="http://store.smartisan.com/account/#/order/list">我的订单</a></li>
            <li class="support-list"><a href="http://store.smartisan.com/account/#/support/list">售后服务</a></li>
            <li class="coupon"><a href="http://store.smartisan.com/account/#/coupon">我的优惠</a></li>
            <li class="information"><a href="http://store.smartisan.com/account/#/information">账户资料</a></li>
            <li class="address-list"><a href="http://store.smartisan.com/account/#/address/list">收货地址</a></li>
            <li class="logout"><a ng-click="logout()">退出</a></li>
           </ul>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="header-sub">
     <div class="cover-gray"></div>
     <div class="cover-dark"></div>
     <div class="container clearfix">
      <div class="breadcrumb"></div>
      <div class="account-wrapper">
       <ul class="account-service" ng-class="{'show': isU1 === 1 || isT2 === 1}">
        <li><a class="btn btn-cdkey" href="http://www.smartisan.com/shop/#/cdkey">优先购买码</a></li>
        <li ng-if="isT2 === 1"><a class="btn btn-service" href="http://store.smartisan.com/#/huanxin">手机回收置换计划</a></li>
       </ul>
       <div class="account-buy u1" ng-class="{'show': isU1 === 1}">
        <a class="buy-btn" href="http://www.smartisan.com/shop/#/jianguo">现在购买</a>
       </div>
       <div class="account-buy t2" ng-class="{'show': isU1 != 1 &amp;&amp; isT1 !=1 &amp;&amp; isOS !=1}">
        <a class="buy-btn" href="http://www.smartisan.com/shop/#/t2">现在购买</a>
       </div>
       <div class="account-buy os" ng-class="{'show': isOS === 1}">
        <a class="buy-btn" href="http://www.smartisan.com/apps/os">现在刷机</a>
       </div>
      </div>
     </div>
    </div>
    <div class="young-cover"></div>
    <div class="header-mobile" title-bar="">
     <div class="title-bar">
      <a class="nav-toggle"></a> 
      <a class="nav-back hide" ng-click="goBack()">返回</a>
      <h1 class="nav-logo"><a href="http://www.smartisan.com/#/home">锤子科技官网</a></h1>
      <h1 class="nav-title hide"></h1>
      <ul class="nav-aside">
       <li class="nav-cart"><a href="http://www.smartisan.com/#/cart">购物车</a></li>
       <li class="nav-user"><a href="http://m.store.smartisan.com/account/">个人中心</a></li>
      </ul>
      <a class="nav-btn" href="{{titleBar.navBtnUrl}}">{{titleBar.navBtnName}}</a>
     </div>
     <nav class="nav-drawer" id="nav-drawer">
      <div class="iscroll-placeholder">
       <ul class="nav-list" ng-if="titleBar.navList.length">
        <li ng-repeat="item in titleBar.navList"><a href="{{item.url}}">{{item.title}}</a></li>
       </ul>
       <ul class="nav-aside">
        <li class="nav-shop"><a href="http://www.smartisan.com/#/shop"><span>锤子科技商城</span></a></li>
        <li class="nav-t2"><a href="http://www.smartisan.com/t2/"><span>Smartisan T2</span></a></li>
        <li class="nav-u1"><a href="http://www.smartisan.com/jianguo/"><span>坚果手机</span></a></li>
        <li class="nav-os"><a href="http://www.smartisan.com/os/"><span>Smartisan OS</span></a></li>
        <li class="nav-apps"><a href="http://www.smartisan.com/apps/"><span>应用下载</span></a></li>
        <li class="nav-bbs"><a href="http://bbs.smartisan.com/"><span>锤子科技论坛</span></a></li>
       </ul>
      </div>
     </nav>
    </div>
   </div>
   <div class="header en" ng-if="lang == 'en'" route-change-reset-header="" mobile-device="">
    <div class="header-main">
     <div class="container">
      <h1 class="logo"><a href="http://www.smartisan.com/en/#/home">Smartisan</a></h1>
      <div class="nav">
       <div class="view">
        <ul class="nav-main">
         <li ng-class="{'active':appHeader=='index'}" class="en-home-link"><a href="http://www.smartisan.com/en/">Home</a></li>
         <li ng-class="{'active':appHeader=='t2'}"><a href="http://www.smartisan.com/en/t2/">Smartisan T2</a></li>
         <li ng-class="{'active':appHeader=='t1'}"><a href="http://www.smartisan.com/en/t1/">Smartisan T1</a></li>
         <li ng-class="{'active':appHeader=='jianguo'}"><a href="http://www.smartisan.com/en/u1/#/specs">Smartisan U1</a></li>
         <li ng-class="{'active':appHeader=='apps'}"><a href="http://www.smartisan.com/en/apps/">Smartisan Apps</a></li>
        </ul>
        <div class="language-switch">
         <h3><a class="flag-en" change-language="">English<span class="smartisan-icon caret-down"></span></a></h3>
         <ul>
          <li><a class="flag-cn" href="http://www.smartisan.com/cn/#/home" ng-click="changeLangCookies($event)">中文</a></li>
          <li><a class="flag-jp" href="http://www.smartisan.com/jp/" ng-click="changeLangCookies($event)">日本語</a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="header-sub">
     <div class="cover-gray"></div>
     <div class="cover-dark"></div>
     <div class="container clearfix">
      <div class="breadcrumb"></div>
     </div>
    </div>
    <div class="young-cover"></div>
    <div class="header-mobile" title-bar="">
     <div class="title-bar">
      <a class="nav-toggle"></a>
      <h1 class="nav-logo"><a href="http://www.smartisan.com/">Smartisan</a></h1>
      <h1 class="nav-title hide"></h1>
     </div>
     <nav class="nav-drawer" id="nav-drawer">
      <div class="iscroll-placeholder">
       <ul class="nav-list" ng-if="titleBar.navList.length">
        <li ng-repeat="item in titleBar.navList"><a href="{{item.url}}">{{item.title}}</a></li>
       </ul>
       <ul class="nav-aside">
        <li class="nav-home"><a href="http://www.smartisan.com/en/"><span>Home</span></a></li>
        <li class="nav-t2"><a href="http://www.smartisan.com/en/t2/"><span>Smartisan T2</span></a></li>
        <li class="nav-t2"><a href="http://www.smartisan.com/en/t1/"><span>Smartisan T1</span></a></li>
        <li class="nav-u1"><a href="http://www.smartisan.com/en/u1/#/specs"><span>Smartisan U1</span></a></li>
        <li class="nav-apps"><a href="http://www.smartisan.com/en/apps/"><span>Smartisan Apps</span></a></li>
       </ul>
      </div>
     </nav>
    </div>
   </div>
   <div class="header jp" ng-if="lang == 'jp'" route-change-reset-header="" mobile-device="">
    <div class="header-main">
     <div class="container">
      <h1 class="logo"><a href="http://www.smartisan.com/jp/#/home">Smartisan</a></h1>
      <div class="nav">
       <div class="view">
        <ul class="nav-main">
         <li ng-class="{'active':appHeader=='index'}" class="en-home-link"><a href="http://www.smartisan.com/jp/">Home</a></li>
         <li ng-class="{'active':appHeader=='t2'}"><a href="http://www.smartisan.com/jp/t2/">Smartisan T2</a></li>
         <li ng-class="{'active':appHeader=='t1'}"><a href="http://www.smartisan.com/jp/t1/">Smartisan T1</a></li>
         <li ng-class="{'active':appHeader=='jianguo'}"><a href="http://www.smartisan.com/jp/u1/#/specs">Smartisan U1</a></li>
        </ul>
        <div class="language-switch">
         <h3><a class="flag-jp" change-language="">日本語<span class="smartisan-icon caret-down"></span></a></h3>
         <ul>
          <li><a class="flag-cn" href="http://www.smartisan.com/cn/#/home" ng-click="changeLangCookies($event)">中文</a></li>
          <li><a class="flag-en" href="http://www.smartisan.com/en/" ng-click="changeLangCookies($event)">English</a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="header-sub">
     <div class="cover-gray"></div>
     <div class="cover-dark"></div>
     <div class="container clearfix">
      <div class="breadcrumb"></div>
     </div>
    </div>
    <div class="young-cover"></div>
    <div class="header-mobile" title-bar="">
     <div class="title-bar">
      <a class="nav-toggle"></a>
      <h1 class="nav-logo"><a href="http://www.smartisan.com/">Smartisan</a></h1>
      <h1 class="nav-title hide"></h1>
     </div>
     <nav class="nav-drawer" id="nav-drawer">
      <div class="iscroll-placeholder">
       <ul class="nav-list" ng-if="titleBar.navList.length">
        <li ng-repeat="item in titleBar.navList"><a href="{{item.url}}">{{item.title}}</a></li>
       </ul>
       <ul class="nav-aside">
        <li class="nav-home"><a href="http://www.smartisan.com/jp/"><span>Home</span></a></li>
        <li class="nav-t2"><a href="http://www.smartisan.com/jp/t2/"><span>Smartisan T2</span></a></li>
        <li class="nav-t2"><a href="http://www.smartisan.com/jp/t1/"><span>Smartisan T1</span></a></li>
        <li class="nav-u1"><a href="http://www.smartisan.com/jp/u1/#/specs"><span>Smartisan U1</span></a></li>
       </ul>
      </div>
     </nav>
    </div>
   </div>
   <div class="main">
    <div id="sub-nav" class="layout-sub-header {{subNavStyle}}">
     <div class="sub-nav-fix-panel">
      <div class="header-container clearfix js-sub-nav-container">
       <ul class="top-breadcrumb js-sub-nav-list">
        <li data-category="home" class="selected"><a href="http://www.smartisan.com/#/shop" data-close="true">精选</a></li>
        <li data-category="mobile" ng-class="{'selected': currentPage == 'mobile'}"><a class="js-toggle-nav" data-type="mobile">手机</a></li>
        <li data-category="60" ng-class="{'selected': currentPage == 60}"><a href="{{storePathName}}#/category?id=60" data-close="true">耳机 / 音箱</a></li>
        <li data-category="61" ng-class="{'selecteselectedd': currentPage == 61}"><a href="{{storePathName}}#/category?id=61" data-close="true">背壳 / 保护套</a></li>
        <li ng-class="{'selected': currentPage == 'qinghuai'}"><a href="{{storePathName}}#/hd/qinghuai" data-close="true">“情怀”背壳</a></li>
        <li data-category="59" ng-class="{'selected': currentPage == 59}"><a href="{{storePathName}}#/category?id=59" data-close="true">其他周边</a></li>
        <li data-category="warranty" ng-class="{'selected': currentPage == 'warranty'}"><a href="http://store.smartisan.com/#/insurance/information" data-close="true">保修服务</a></li>
        <li data-category="62" ng-class="{'selected': currentPage == '62'}"><a href="{{storePathName}}#/category?id=62" data-close="true">全部商品</a></li>
       </ul>
       <div class="header-cart-panel">
        <div id="js-main-cart-panel" class="cart-label" cart-main="" options="{{options}}">
         <a href="{{storePathName}}#/cart" class="cart-link">购物车</a> 
         <span class="cart-num"><span class="cart-empty-num">0</span></span>
        </div>
       </div>
       <div class="right-nav" ng-class="{'right-nav-hide': !!mainConfig.useGoodsDiscount520Data}">
        <a href="http://www.smartisan.com/#/cdkey" target="_blank">优先购买码</a>
       </div>
       <div class="nav-goods-panel js-nav-goods-panel">
        <div temp-sub-nav-goods-item=""></div>
       </div>
      </div>
     </div>
    </div>
    <div class="page-loading" ng-show="pageLoading">
     页面加载中...
    </div>
    <div ng-view="" autoscroll="true" ng-show="!pageLoading"></div>
   </div>
   <div class="footer" ng-if="lang != 'en' &amp;&amp; lang != 'jp'" route-change-reset-footer="">
    <div class="container">
     <div class="siteinfo">
      <ul class="nav-footer" mobile-footer="">
       <li><h3>订单服务</h3>
        <ul>
         <li><a href="http://www.smartisan.com/support/#/instruction">购买指南</a></li>
         <li><a href="http://www.smartisan.com/support/#/payment">支付方式</a></li>
         <li><a href="http://www.smartisan.com/support/#/delivery">送货政策</a></li>
        </ul></li>
       <li><h3>服务支持</h3>
        <ul>
         <li><a href="http://www.smartisan.com/support/#/service">售后服务</a></li>
         <li class="mobile"><a href="http://www.smartisan.com/support/#/service-policy">售后政策</a></li>
         <li class="mobile"><a href="http://store.smartisan.com/#/insurance/information">保修服务</a></li>
         <li class="mobile"><a href="http://www.smartisan.com/support/#/serviceprice">维修报价</a></li>
         <li><a href="http://www.smartisan.com/support/#/servicelist">维修门店</a></li>
         <li><a href="http://www.smartisan.com/support/#/storelist">零售门店</a></li>
        </ul></li>
       <li><h3>自助服务</h3>
        <ul>
         <li><a href="http://www.smartisan.com/support/#/self-service">热点咨询</a></li>
         <li><a href="http://www.smartisan.com/support/#/self-service/6">预约购买</a></li>
         <li><a href="http://www.smartisan.com/support/#/self-service/7">订单物流</a></li>
         <li class="mobile"><a href="http://www.smartisan.com/support/#/self-service/8">日常使用</a></li>
         <li class="mobile"><a href="http://www.smartisan.com/support/#/self-service/9">常见问题</a></li>
        </ul></li>
       <li><h3>媒体中心</h3>
        <ul>
         <li><a href="http://www.smartisan.com/pr/#/news-center">新闻动态</a></li>
         <li><a href="http://www.smartisan.com/pr/#/videos">官方视频</a></li>
         <li><a href="http://www.smartisan.com/pr/#/pictures">图片资源</a></li>
         <li class="mobile"><a href="http://www.smartisan.com/pr/#/report">时尚之选</a></li>
        </ul></li>
       <li><h3>关于公司</h3>
        <ul>
         <li><a href="http://www.smartisan.com/support/#/about">公司简介</a></li>
         <li class="mobile"><a href="http://www.smartisan.com/support/#/awards">获奖信息</a></li>
         <li class="mobile"><a href="http://www.smartisan.com/support/#/culture">企业文化</a></li>
         <li><a href="http://www.smartisan.com/support/#/join">加入我们</a></li>
         <li><a href="http://www.smartisan.com/support/#/contact">联系我们</a></li>
        </ul></li>
       <li><h3>关注我们</h3>
        <ul>
         <li><a href="http://weibo.com/u/2968634427" target="_blank">新浪微博</a></li>
         <li class="weixin" show-weixin-code=""><a>官方微信</a>
          <div class="mask"></div>
          <div class="qrcode">
           <div class="close-btn"></div>
           <h4>锤子科技官方微信</h4>
           <h6>打开微信，点击右上角的“+”，选择“扫一扫”功能，用摄像头对准下方二维码即可。</h6>
           <div class="qrcode-bg"></div>
          </div></li>
         <li><a href="http://tieba.baidu.com/f?kw=%B4%B8%D7%D3%BF%C6%BC%BC" target="_blank">官方贴吧</a></li>
        </ul></li>
      </ul>
      <ul class="service">
       <li class="tel"><a href="tel:4006190909" prevent-call="">400-619-0909</a></li>
       <li class="time">周一至周日 9:00-18:00（仅收市话费）</li>
       <li class="online"><a href="http://www.smartisan.com/support/#/self-service"><span class="smartisan-icon info-question"></span>在线帮助</a></li>
      </ul>
      <div class="language-switch">
       <ul>
        <li><a class="flag-en" href="http://www.smartisan.com/en/" ng-click="changeLangCookies($event)">English</a></li>
        <li><a class="flag-jp" href="http://www.smartisan.com/jp/" ng-click="changeLangCookies($event)">日本語</a></li>
       </ul>
       <h3><a class="flag-cn" change-language="">中文<span class="smartisan-icon caret-down"></span></a></h3>
      </div>
     </div>
     <div class="copyright">
      <h4>Copyright &copy; <span copyright-year=""></span>, Smartisan Digital Co., Ltd. All Rights Reserved.</h4>
      <h5 class="company">北京锤子数码科技有限公司</h5>
      <ul class="privacy">
       <li><a href="http://www.smartisan.com/support/#/agreement">法律声明</a></li>
       <li><a href="http://www.smartisan.com/support/#/privacy">隐私条款</a></li>
       <li class="devstore"><a href="http://dev.smartisan.com/">开发者中心</a></li>
      </ul>
      <h6><a href="http://www.miibeian.gov.cn/" target="_blank"><span>京ICP备14041720号-1</span><span>京ICP证140622号</span><span>京公网安备11010502025474</span></a></h6>
     </div>
    </div>
   </div>
   <div class="footer en" ng-if="lang == 'en'" route-change-reset-footer="">
    <div class="container">
     <div class="siteinfo">
      <ul>
       <li><a href="http://www.smartisan.com/en/support/#/about">About Us</a></li>
       <li><a href="http://www.smartisan.com/en/support/#/contact">Contact Us</a></li>
       <li><a href="http://www.smartisan.com/en/pr/#/videos">Media Center</a></li>
       <li class="mail">Customer Service: <a href="mailto:service@smartisan.com">service@smartisan.com</a></li>
      </ul>
      <div class="language-switch">
       <ul>
        <li><a class="flag-jp" href="http://www.smartisan.com/jp/" ng-click="changeLangCookies($event)">日本語</a></li>
        <li><a class="flag-cn" href="http://www.smartisan.com/cn/#/home" ng-click="changeLangCookies($event)">中文</a></li>
       </ul>
       <h3><a class="flag-en" change-language="">English<span class="smartisan-icon caret-down"></span></a></h3>
      </div>
     </div>
     <div class="copyright">
      <h4>Copyright &copy; <span copyright-year=""></span>, Smartisan Digital Co., Ltd. All Rights Reserved.</h4>
      <ul class="privacy">
       <li><a href="http://www.smartisan.com/en/support/#/statement">Legal Statement</a></li>
       <li><a href="http://www.smartisan.com/en/support/#/privacy">Privacy Policy</a></li>
      </ul>
     </div>
    </div>
   </div>
   <div class="footer jp" ng-if="lang == 'jp'" route-change-reset-footer="">
    <div class="container">
     <div class="siteinfo">
      <ul>
       <li><a href="http://www.smartisan.com/jp/support/#/about">Smartisanについて</a></li>
       <li><a href="http://www.smartisan.com/jp/support/#/contact">お問い合わせ</a></li>
       <li><a href="http://www.smartisan.com/jp/pr/#/videos">メディアセンター</a></li>
       <li class="mail">カスタマサービス：<a href="mailto:service@smartisan.com">service@smartisan.com</a></li>
      </ul>
      <div class="language-switch">
       <ul>
        <li><a class="flag-en" href="http://www.smartisan.com/en/" ng-click="changeLangCookies($event)">English</a></li>
        <li><a class="flag-cn" href="http://www.smartisan.com/cn/#/home" ng-click="changeLangCookies($event)">中文</a></li>
       </ul>
       <h3><a class="flag-jp" change-language="">日本語<span class="smartisan-icon caret-down"></span></a></h3>
      </div>
     </div>
     <div class="copyright">
      <h4>Copyright &copy; <span copyright-year=""></span>, Smartisan Digital Co., Ltd. All Rights Reserved.</h4>
      <ul class="privacy">
       <li><a href="http://www.smartisan.com/jp/support/#/statement">利用規約</a></li>
       <li><a href="http://www.smartisan.com/jp/support/#/privacy">ポリシー</a></li>
      </ul>
     </div>
    </div>
   </div>
   <div class="back-top" back-top=""></div>
  </div>
  <script>
        (function () {
            function _addClass (el, className) {
                if (el.classList)
                  el.classList.add(className);
                else
                  el.className += ' ' + className;
            }
            if ((/^SmartisanSupport/g).test(navigator.userAgent)) {
                _addClass(document.body, 'smartisan-support');
            }
        })();
    </script>
  <noscript>
   <iframe src="//www.googletagmanager.com/ns.html?id=GTM-TDPXSZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TDPXSZ');</script>
  <script src="http://static.smartisanos.cn/common/js/common_a813c80786.js"></script>
  <script src="http://static.smartisanos.cn/index/js/template_ee5b982b9e.js"></script>
  <script src="http://static.smartisanos.cn/index/js/app_617ebdbd56.js"></script>
  <div temp-dialog="" data-dialog="dialog"></div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
