<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\phpstudy_pro\WWW\public/../application/index\view\index\cate.html";i:1585828090;s:71:"D:\phpstudy_pro\WWW\public/../application/index\view\Common\header.html";i:1585495101;s:71:"D:\phpstudy_pro\WWW\public/../application/index\view\Common\footer.html";i:1585828314;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Less is More Blog_<?php echo $data['cate_name']; ?></title>
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

<body id="blog">

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <img width="200" src="__index__/images/logo.png" alt="Less is More Logo"/>
        <h2 class="am-hide-sm-only">Less is More Blog</h2>
    </div>
</header>
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

<hr>

<!-- banner start -->
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class="am-slides">
      <li>
            <img src="__index__/assets/i/b1.jpg">
            <div class="blog-slider-desc am-slider-desc ">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">当前目录是：<?php echo $data['cate_name']; ?></a></h1>
                   
                    <p><?php echo $data['cate_name']; ?>
                    </p>
                    
                    <span class="blog-bor">2015/10/9</span>
                    <br><br><br><br><br><br><br>                
                </div>
            </div>
      </li>
      <li>
            <img src="__index__/assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src="__index__/assets/i/b3.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src="__index__/assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
    </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-12 am-u-sm-12">

<?php if(is_array($articlelist) || $articlelist instanceof \think\Collection || $articlelist instanceof \think\Paginator): $i = 0; $__LIST__ = $articlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articlelist): $mod = ($i % 2 );++$i;?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="__index__/assets/i/f10.jpg" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <span><a href="" class="blog-color">article &nbsp;</a></span>
                <span> <?php echo $articlelist['writer']; ?> &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a href="article?id=<?php echo $articlelist['id']; ?>"><?php echo $articlelist['title']; ?></a></h1>
                <p>我们一直在坚持着，不是为了改变这个世界，而是希望不被这个世界所改变。
                </p>
                <p><a href="" class="blog-continue">continue reading</a></p>
            </div>
        </article>

<?php endforeach; endif; else: echo "" ;endif; ?>
        
        <ul class="am-pagination">
  <li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>
  <li class="am-pagination-next"><a href="">Next &raquo;</a></li>
</ul>
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