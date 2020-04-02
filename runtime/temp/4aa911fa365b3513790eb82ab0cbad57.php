<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"D:\phpstudy_pro\WWW\public/../application/index\view\index\article.html";i:1585828621;s:71:"D:\phpstudy_pro\WWW\public/../application/index\view\Common\header.html";i:1585495101;s:72:"D:\phpstudy_pro\WWW\public/../application/index\view\Common\sidebar.html";i:1585829027;s:71:"D:\phpstudy_pro\WWW\public/../application/index\view\Common\footer.html";i:1585828314;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title><?php echo $article['title']; ?> | Less is More Blog</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="__index__/assets/i/favicon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="__index__/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="__index__/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="__index__/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="__index__/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="__index__/assets/css/app.css">
</head>

<body id="blog-article-sidebar">
<!-- header start -->
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <img width="200" src="__index__/images/logo.png" alt="Less is More Logo"/>
        <h2 class="am-hide-sm-only">Less is More Blog</h2>
    </div>
</header>
<!-- header end -->
<hr>

<!-- nav start -->

<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a href="index.html">首页</a></li>
      <?php if(is_array($headerlist) || $headerlist instanceof \think\Collection || $headerlist instanceof \think\Paginator): $i = 0; $__LIST__ = $headerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$headerlist): $mod = ($i % 2 );++$i;?>
      <li><a href="cate?id=<?php echo $headerlist['cate_id']; ?>"><?php echo $headerlist['cate_name']; ?></a></li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
      </div>
    </form>
  </div>
</nav>
<!-- nav end -->
<hr>
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center"><?php echo $article['title']; ?></h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color">article &nbsp;</a></span>-
              <span><a href="#">@<?php echo $article['writer']; ?> &nbsp;</a></span>-
              <span><a href="#">2015/10/9</a></span>
          </p>
        </div>        
        <div class="am-article-bd">
        
      <?php echo $article['content']; ?>


       
        </div>
      </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
          <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> &nbsp;</span><a href="#">标签</a> , <a href="#">TAG</a> , <a href="#">啦啦</a>
            <hr>
            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
            <a href=""><span class="am-icon-wechat am-icon-fw blog-icon"></span></a>
            <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
          </div>
        </div>

        <hr>
        <div class="am-g blog-author blog-article-margin">
          <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
            <img src="__index__/assets/i/f15.jpg" alt="" class="blog-author-img am-circle">
          </div>
          <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
          <h3><span>作者 &nbsp;: &nbsp;</span><span class="blog-color">Less is More</span></h3>
            <p>极简生活！</p>
          </div>
        </div>
        <hr>
        <ul class="am-pagination blog-article-margin">
          <li class="am-pagination-prev"><a href="#" class="">&laquo; 一切的回顾</a></li>
          <li class="am-pagination-next"><a href="">不远的未来 &raquo;</a></li>
        </ul>
        
        <hr>

        <form class="am-form am-g">
            <h3 class="blog-comment">评论</h3>
          <fieldset>
            <div class="am-form-group am-u-sm-4 blog-clear-left">
              <input type="text" class="" placeholder="名字">
            </div>
            <div class="am-form-group am-u-sm-4">
              <input type="email" class="" placeholder="邮箱">
            </div>

            <div class="am-form-group am-u-sm-4 blog-clear-right">
              <input type="password" class="" placeholder="网站">
            </div>
        
            <div class="am-form-group">
              <textarea class="" rows="5" placeholder="一字千金"></textarea>
            </div>
        
            <p><button type="submit" class="am-btn am-btn-default">发表评论</button></p>
          </fieldset>
        </form>

        <hr>
    </div>

<div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="__index__/assets/i/f14.jpg" alt="about me" class="blog-entry-img" >
            <p>Less is More</p>
            <p>
        极简主义
        </p><p></p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        
    </div>  
</div>
<!-- content end -->


 <footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>系统介绍</h3>
            <p class="am-text-sm">这是闲着没事写得一套cms系统<br>极简主义者！<br> 
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>社交账号</h3>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon blog-icon"></span></a>
            </p>

            <p></p>          
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
              <h1>人生就是一场旅行！</h1>
             <h3>Less is More</h3>
            <p>
                <ul>

                </ul>
            </p>
        </div>
    </div>    
    <div class="blog-text-center">© 2020  By Less is More</div>    
  </footer>




<!--[if (gte IE 9)|!(IE)]><!-->
<script src="__index__/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="__index__/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="__index__/assets/js/amazeui.min.js"></script>
<!-- <script src="__index__/assets/js/app.js"></script> -->
</body>
</html>