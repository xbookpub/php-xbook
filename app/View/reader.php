<!doctype html>
<html>
<head lang="zh-cmn-Hans">
  <meta charset="UTF-8">
  <title><?=$title?></title>
  <?php if (isset($description)): ?><meta name="description" content="<?php echo $description; ?>"><?php endif; ?>
  <?php if (isset($keyword)): ?><meta name="keyword" content="<?php echo $keyword; ?>"><?php endif; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <!--<link rel="alternate icon" type="image/png" href="assets/i/favicon.png">-->
  
  <!--预加载下一章-->
  <link rel="prefetch" href="<?=uri("books/{$book_id}/chapters/{$next}")?>" />

  <link href="//cdn.amazeui.org/amazeui/2.7.1/css/amazeui.min.css" rel="stylesheet">

  <link href="/static/css/amazeui.switch.min.css" rel="stylesheet">
  <!--<link href="https://rawgit.com/amazeui/switch/master/amazeui.switch.css" rel="stylesheet">-->
  
  <style>
    .am-offcanvas-bar .am-nav>li>a {
      color:#ccc;
      border-radius: 0;
      border-top: 1px solid rgba(0,0,0,.3);
      box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
    }

    .am-offcanvas-bar .am-nav>li>a:hover {
      background: #404040;
      color: #fff
    }

    .am-offcanvas-bar .am-nav>li.am-nav-header {
      color: #777;
      background: #404040;
      box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
      text-shadow: 0 1px 0 rgba(0,0,0,.5);
      border-top: 1px solid rgba(0,0,0,.3);
      font-weight: 400;
      font-size: 75%
    }

    .am-offcanvas-bar .am-nav>li.am-active>a {
      background: #1a1a1a;
      color: #fff;
      box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
    }

    .am-offcanvas-bar .am-nav>li+li {
      margin-top: 0;
    }

    .my-sidebar {
      padding-right: 0;
      border-right: 1px solid #eeeeee;
    }

    .my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
<div class="am-g am-g-fixed">
  <div class="am-u-md-12">
    <div class="am-g">
      <div class="am-u-sm-12 am-u-sm-centered">
        <div id='content' class="am-cf am-article">
          <?=$content?>
        </div>
        <hr/>
        <ul class="am-pagination am-pagination-default" style="text-align:center; margin-bottom:0px;">
          <li class="am-pagination-prev" style="display:none;"><a id='pre' href="<?=uri("books/{$book_id}/chapters/{$pre}")?>">«上一章</a></li>
          <li class="am-pagination-prev"><a href="<?=uri("books")?>">返回书架</a></li>
          <li class=""><a href="<?=uri("books/{$book_id}")?>">目录</a></li>
          <li class="am-pagination-next"><a id='next' href="<?=uri("books/{$book_id}/chapters/{$next}")?>">下一章»</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <!--侧边栏-->
  <div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
    <div class="am-offcanvas" id="sidebar">
      <div class="am-offcanvas-bar">
        <div id="extendbar"></div>
        <div class="am-offcanvas-content" style="position:fixed; bottom:0px;">
            <div style="position:fixed; bottom:70px;">
                <div id="decrement" style="cursor:pointer; position: relative; float:left; background-color:#FFFFFF; width:50px; height:50px; margin-left:50px; text-align:center;">A-</div>
                <div id="increment" style="cursor:pointer; position: relative; float:left; background-color:#FFFFFF; width:50px; height:50px; margin-left:20px; text-align:center;">A+</div>
            </div>

            <br />
            
            <div>
                <a id="style-1" href="javascript:;" style="background-color:#FFFFFF; position: relative; float:left; width:35px; height:35px; border:1px solid;">&nbsp;</a>
                <a id="style-3" href="javascript:;" style="background-color:#FFF2E2; position: relative; float:left; width:35px; height:35px; margin-left:10px; border:1px solid;">&nbsp;</a>
                <a id="style-2" href="javascript:;" style="background-color:#C7EDCC; position: relative; float:left; width:35px; height:35px; margin-left:10px; border:1px solid;">&nbsp;</a>
                <div style="position: relative; float:left; width:80px; height:35px; margin-left:20px;">
                    <input name='day-night' type="checkbox" data-am-switch data-off-text="日" data-on-text="夜" data-size="sm" data-animate="false" />
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--侧边栏结束-->

</div>

<footer class="my-footer">
  <p><small>© 2016 xbook.pub | SOSTART Team</small></p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="//cdn.amazeui.org/amazeui/2.7.1/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<!--<![endif]-->
<script src="//cdn.amazeui.org/amazeui/2.7.1/js/amazeui.min.js"></script>
<script src="/static/js/amazeui.switch.min.js"></script>
<!--<script src="https://rawgit.com/amazeui/switch/master/amazeui.switch.min.js"></script>-->

<script src="/static/js/reader.js"></script>

<script src="/static/js/extends.js"></script>

</body>
</html>